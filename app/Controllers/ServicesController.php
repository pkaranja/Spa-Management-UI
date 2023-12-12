<?php
namespace App\Controllers;

use Config\Services;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\ServicesModel;
use App\Middlewares\AuthenticationMiddleware;

class ServicesController extends BaseController
{
	protected Session $session;
	protected ServicesModel $model;
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
		$this->model = new ServicesModel();
    }

	public function index(): String
    {
		$data = $this->model->getServices('*');
		if ( is_array($data) OR is_object($data) ){
			return view('services/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
    }
	
	public function new(): String 
	{
		$categories = $this->model->getServiceCategories();
		if ( is_array($categories) OR is_object($categories) ){
			return view('services/create', [
				'userData' => $this->session->userData, 
				'data' => $categories
			]);
		}else{
			return view('/errors/error', [ 'message' => $categories,  ]);
		}
	}

	public function edit($id): String 
	{
		$categories = $this->model->getServiceCategories();
		$data = $this->model->getService($id);
		$weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		if ( is_array($data) OR is_object($data) ){
			return view('services/edit', [
				'userData' => $this->session->userData, 
				'data' => $data,
				'categories' => $categories,
				'weekdays' => $weekdays
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
	}

	public function update($id) 
	{
		$this->validation->setRules([
			'servicename' => 'required',
	        'category' => 'required',
	        'starttime' => 'required',
			'price' => 'required|numeric',
			'days' => 'required',
			'endtime' => 'required'
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('service/edit/'.$id)->withInput()->with('errors', $this->validation->getErrors() );
		}

        // If validation passes
        $data = [
			'serviceName' => $this->request->getPost('servicename'),
	        'category' => $this->request->getPost('category'),
	        'serviceStartTime' => $this->request->getPost('starttime'),
	        'price' => $this->request->getPost('price'),
	        'daysAvailable' => implode(',', $this->request->getPost('days') ),
			'serviceEndTime' => $this->request->getPost('endtime'),
			'description' => $this->request->getPost('description'),
			'active' => true
	    ];

		// Process the data
		$this->model->updateService($id, $data);

		// Redirect to a success page
		return redirect()->to('services')->with('success', "Service updated succesfully!");
	}

	public function create() 
	{
		$this->validation->setRules([
			'name' => 'required',
	        'phone' => 'required',
	        'email' => 'required|valid_email',
			'contactPersonEmail' => 'valid_email',
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('service/new')->withInput()->with('errors', $this->validation->getErrors() );
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
		$this->model->saveService($data);

		// Redirect to a success page
		return redirect()->to('vendors')->with('success', "Service created succesfully!");
	}
}
