<?php
namespace App\Controllers;

use Config\Services;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\VendorsModel;


class VendorsController extends BaseController
{
	protected Session $session;
	protected VendorsModel $model;
	protected $helpers = ['form'];
	protected ValidationInterface $validation;

	public function __construct()
    {
        /// start session
		$this->session = Services::session();
		$this->validation = Services::validation();
		$this->model = new VendorsModel();
    }

	public function index(): String
    {
		$data = $this->model->getVendors('*');
		if ( is_array($data) OR is_object($data) ){
			return view('vendors/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
    }
	
	public function new(): String 
	{
		return view('vendors/create', [ 'userData' => $this->session->userData ]);
	}
	
	public function edit($id): String 
	{
		$data = $this->model->getVendor($id);
		
		if ( is_array($data) OR is_object($data) ){
			return view('vendors/edit', [
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
			return redirect()->to('vendor/edit/'.$id)->withInput()->with('errors', $this->validation->getErrors() );
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
		$this->model->updateVendor($id, $data);

		// Redirect to a success page
		return redirect()->to('vendors')->with('success', "Vendor updated succesfully!");
	}
	
	public function create($id) 
	{
		$this->validation->setRules([
			'name' => 'required',
	        'phone' => 'required',
	        'email' => 'required|valid_email',
			'contactPersonEmail' => 'valid_email',
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('vendor/edit/'.$id)->withInput()->with('errors', $this->validation->getErrors() );
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
		$this->model->saveVendor($data);

		// Redirect to a success page
		return redirect()->to('vendors')->with('success', "Vendor created succesfully!");
	}
}
