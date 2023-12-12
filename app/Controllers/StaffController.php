<?php
namespace App\Controllers;

use Config\Services;
use CodeIgniter\Controller;
use App\Models\StaffModel;


class StaffController extends Controller
{
	protected $session;
	protected StaffModel $model;

	public function __construct()
    {
        // start session
		$this->session = Services::session();
		$this->model = new StaffModel();
    }

	public function index(): String
    {
		$data = $this->model->getStaff('*');
		if ( is_array($data) OR is_object($data) ){
			return view('staff/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
    }
	
	public function new(): String 
	{
		return view('staff/create', [ 'userData' => $this->session->userData ]);
	}

	public function create(): String 
	{

		$data = $this->model->getStaff('*');
		if ( is_array($data) OR is_object($data) ){
			return view('staff/index', [
				'userData' => $this->session->userData, 
				'data' => $data
			]);
		}else{
			return view('/errors/error', [ 'message' => $data,  ]);
		}
	}
}
