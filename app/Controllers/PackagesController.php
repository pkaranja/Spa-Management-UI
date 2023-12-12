<?php
namespace App\Controllers;

use Config\Services;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\PackagesModel;
use App\Models\ServicesModel;
use App\Middlewares\AuthenticationMiddleware;

class PackagesController extends BaseController
{
	protected Session $session;
	protected PackagesModel $model;
	protected ServicesModel $servicesmodel;
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
		$this->model = new PackagesModel();
		$this->servicesmodel = new ServicesModel();
	}
	
	public function index(): String
	{
		$data = $this->model->getPackages('*');
		
		if ( is_array($data) OR is_object($data) ){
			return view('packages/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
	}

	public function new(): String 
	{
		$services = $this->servicesmodel->getServices('*');
		$weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		
		if ( is_array($services) OR is_object($services) ){
			return view('packages/create', [
				'userData' => $this->session->userData, 
				'services' => $services,
				'weekdays' => $weekdays
			]);
		}else{
			return view('/errors/error', [ 'message' => $services,  ]);
		}
	}
	
	public function edit($id): String 
	{
		$services = $this->servicesmodel->getServices('*');
		$data = $this->model->getPackage($id);
		$weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		
		if ( is_array($data) OR is_object($data) ){
			return view('packages/edit', [
				'userData' => $this->session->userData, 
					'data' => $data,
					'services' => $services,
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
			return redirect()->to('package/edit/'.$id)->withInput()->with('errors', $this->validation->getErrors() );
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
		return redirect()->to('packages')->with('success', "Service updated succesfully!");
	}
	
	public function create() 
	{
		$this->validation->setRules([
			'packagename' => 'required',
	        'starttime' => 'required',
	        'services' => 'required',
			'price' => 'required|numeric',
			'endtime' => 'required',
			'days' => 'required'
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('package/new')->withInput()->with('errors', $this->validation->getErrors() );
		}

        // If validation passes
        $data = [
			'packageName' => $this->request->getPost('packagename'),
	        'serviceStartTime' => $this->request->getPost('starttime'),
			'serviceEndTime' => $this->request->getPost('endtime'),
	        'cost' => $this->request->getPost('price'),
	        'daysOffered' => implode(',', $this->request->getPost('days') ),
	        'services' => $this->request->getPost('services'),
			'description' => $this->request->getPost('description'),
			'active' => true,
			'image' => ''
	    ];

		// Process the data
		$this->model->savePackage($data);

		// Redirect to a success page
		return redirect()->to('packages')->with('success', "Package created succesfully!");
	}
}
