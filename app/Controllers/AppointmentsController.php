<?php
namespace App\Controllers;

use Config\Services;
use CodeIgniter\Controller;
use App\Models\AppointmentsModel;


class AppointmentsController extends Controller
{
    /**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;
	
	protected $model;

	public function __construct()
    {
        // start session
		$this->session = Services::session();
		$this->model = new AppointmentsModel();
    }

    //--------------------------------------------------------------------

	/**
	 * Displays settings page.
	 */
	public function index() :String
    {
		$data = 	$this->model->getAppointments('*');

        return view('appointments', [
            'userData' => $this->session->userData, 
			'data' => $data
		]);
    }
}
