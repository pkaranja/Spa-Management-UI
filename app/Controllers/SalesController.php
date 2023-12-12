<?php
namespace App\Controllers;

use Config\Services;
use CodeIgniter\Controller;
use App\Models\SalesModel;


class SalesController extends Controller
{
    /**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;
	protected $model;

    //--------------------------------------------------------------------

	public function __construct()
    {
        // start session
		$this->session = Services::session();
		$this->model = new SalesModel();
    }

    //--------------------------------------------------------------------

	/**
	 * Displays settings page.
	 */
	public function index() 
    {
        $data = $this->model->getSales('*');

        return view('sales', [
            'userData' => $this->session->userData, 
			'data' => $data
		]);
    }
}
