<?php
namespace App\Controllers;

use Config\Services;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\CustomersModel;


class CustomersController extends BaseController
{
	protected Session $session;
	protected CustomersModel $model;
	protected $helpers = ['form'];
	protected ValidationInterface $validation;

	public function __construct()
    {
        // start session
		$this->session = Services::session();
		$this->model = new CustomersModel();
		$this->validation = Services::validation();
    }

	public function index(): String
    {
		$data = $this->model->getCustomers('*');
		if ( is_array($data) OR is_object($data) ){
			return view('customers/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
    }
	
	public function new(): String 
	{
		return view('customers/create', [ 'userData' => $this->session->userData ]);
	}
	
	public function create() 
	{
		$this->validation->setRules([
			'firstname' => 'required',
	        'lastname' => 'required',
	        'phone' => 'required',
	        'email' => 'required|valid_email',
			'gender' => 'required|in_list[MALE,FEMALE,OTHER]',
	        'dob' => 'required|valid_date'
        ]);

		if (!$this->validation->withRequest($this->request)->run()) {
			return redirect()->to('customer/new')->withInput()->with('errors', $this->validation->getErrors() );
		}

        // If validation passes, get the name from the form
        $data = [
			'firstName' => $this->request->getPost('firstname'),
	        'lastName' => $this->request->getPost('lastname'),
	        'phone' => $this->request->getPost('phone'),
	        'email' => $this->request->getPost('email'),
	        'gender' => strtoupper( $this->request->getPost('gender') ),
	        'dateOfBirth' => $this->request->getPost('dob'),
			'remarks' => $this->request->getPost('remarks'),
			'acceptAgeLimit' => 1,
			'acceptTerms' => 1
	    ];

		// Process the data
		$this->model->saveCustomer($data);

        // Redirect to a success page
		return redirect()->to('customers')->with('success', "Customer created succesfully!");
	}
	
	public function editCustomer(): String 
	{
		return view('customers/edit', [ 'userData' => $this->session->userData ]);
	}
	
	public function update(): String 
	{
		//TODO: Update customer via api
		return "";
	}
}