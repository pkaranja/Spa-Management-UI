<?php
namespace App\Controllers;

use Config\Services;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\ProductsModel;
use App\Middlewares\AuthenticationMiddleware;

class ProductsController extends BaseController
{
	protected Session $session;
	protected ProductsModel $model;
	protected $helpers = ['form'];
	protected ValidationInterface $validation;
	protected AuthenticationMiddleware $authenticationMiddleware;
	
	public function __construct()
    {
		//Check if user is logged in before proceeding
		$this->authenticationMiddleware = new AuthenticationMiddleware();
		$this->authenticationMiddleware->isLoggedIn();
		
        //initiate controller data
		$this->session = Services::session();
		$this->validation = Services::validation();
		$this->model = new ProductsModel();
    }

	public function index(): String
    {
		$data = $this->model->getProducts('*');
		if ( is_array($data) OR is_object($data) ){
			return view('products/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
    }
	
	public function new(): String 
	{
		return view('products/create', [ 'userData' => $this->session->userData ]);
	}
	
	public function edit($id): String 
	{
		$data = $this->model->getProduct($id);
		
		if ( is_array($data) OR is_object($data) ){
			return view('products/edit', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
	}
	
	public function update($id) 
	{
		$this->validation->setRules([
			'name' => 'required',
	        'phone' => 'required',
	        'email' => 'required|valid_email',
			'contactPersonEmail' => 'valid_email',
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('product/edit/'.$id)->withInput()->with('errors', $this->validation->getErrors() );
		}

        // If validation passes
        $data = [
			'name' => $this->request->getPost('name'),
	        'phoneNumber' => $this->request->getPost('phone'),
	        'contactPerson' => $this->request->getPost('contactPerson'),
	        'contactPersonPhone' => $this->request->getPost('contactPersonPhone'),
	        'emailAddress' => $this->request->getPost('email'),
			'address' => $this->request->getPost('address'),
			'contactPersonEmail' => $this->request->getPost('contactPersonEmail'),
			'description' => $this->request->getPost('notes')
	    ];

		// Process the data
		$this->model->updateProduct($id, $data);

		// Redirect to a success page
		return redirect()->to('products')->with('success', "Product updated succesfully!");
	}
	
	public function create() 
	{
		$this->validation->setRules([
			'name' => 'required',
	        'cost' => 'required|numeric',
	        'sellingPrice' => 'required|numeric',
			'alertQuantity' => 'required|numeric',
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('product/new')->withInput()->with('errors', $this->validation->getErrors() );
		}

        // If validation passes
        $data = [
			'name' => $this->request->getPost('name'),
	        'phoneNumber' => $this->request->getPost('phone'),
	        'contactPerson' => $this->request->getPost('contactPerson'),
	        'contactPersonPhone' => $this->request->getPost('contactPersonPhone'),
	        'emailAddress' => $this->request->getPost('email'),
			'address' => $this->request->getPost('address'),
			'contactPersonEmail' => $this->request->getPost('contactPersonEmail'),
			'description' => $this->request->getPost('notes')
	    ];

		// Process the data
		$this->model->saveProduct($data);

		// Redirect to a success page
		return redirect()->to('products')->with('success', "Product created succesfully!");
	}
}
