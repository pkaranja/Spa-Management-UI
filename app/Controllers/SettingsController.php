<?php
namespace App\Controllers;

use Config\Services;
use CodeIgniter\Controller;
use Codeigniter\Validation\ValidationInterface;
use Codeigniter\Session\Session;
use App\Models\SettingsModel;


class SettingsController extends Controller
{
    protected Session $session;
    protected SettingsModel $model;
    protected $helpers = ['form'];
    protected ValidationInterface $validation;

    public function __construct()
    {
        /// start session
		$this->session = Services::session();
        $this->validation = Services::validation();
        $this->model = new SettingsModel();
    }

	public function index(): String
    {
        $data = $this->model->getBusiness();

        if ( is_array($data) OR is_object($data) ){
            return view('settings/business', [
                'userData' => $this->session->userData, 
				'data' => $data
			]);
        }else{
            return view('/errors/error', [ 'message' => $data,  ]);
        }
    }
    
    public function update() 
    {
        $this->validation->setRules([
            'businessname' => 'required',
	        'phone' => 'required',
	        'email' => 'required|valid_email',
	        'opening' => 'required',
            'closing' => 'required',
            'logo' => 'required',
            'currency' => 'required',
            'country' => 'required',
        ]);

        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->to('business-settings')->withInput()->with('errors', $this->validation->getErrors() );
        }

        // If validation passes, get the name from the form
        $data = [
            'businessname' => $this->request->getPost('businessname'),
	        'phone' => $this->request->getPost('phone'),
	        'mobile' => $this->request->getPost('mobile'),
	        'city' => $this->request->getPost('city'),
	        'opening' => $this->request->getPost('opening'),
			'logo' => $this->request->getPost('logo'),
            'email' => $this->request->getPost('email'),
            'currency' => $this->request->getPost('currency'),
            'country' => $this->request->getPost('country'),
            'closing' => $this->request->getPost('closing'),
            'description' => $this->request->getPost('description'),
	    ];

        // Process the data
		$this->model->updateBusiness($data);

        // Redirect to a success page
		return redirect()->to('services')->with('success', "Service created succesfully!");
    }
}
