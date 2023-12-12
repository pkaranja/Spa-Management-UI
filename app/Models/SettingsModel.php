<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\CURLRequest;
use Config\Services;

class SettingsModel extends Model
{
	protected CURLRequest $rest_client;
	
	protected $table      = 'settings';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'language', 'timezone', 'dateformat', 'timeformat', 'iprestriction'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'settings' => [
			'language'	=> 'required',
			'timezone'	=> 'required',
			'dateformat'	=> 'required',
			'timeformat'	=> 'required',
			'iprestriction'	=> 'required',
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;
	
	public function __construct()
	{
		//API configuration
		$options = [
			'baseURI' => 'http://localhost:3004/api/',
		    'timeout' => 3,
		];


		$this->rest_client = Services::curlrequest($options);
		$this->rest_client->setHeader("Content-Type", "application/json");
		$this->rest_client->setHeader("Accept", "application/json");
	}
    
	

	public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

	public function getBusiness() {
		try{
			$response = $this->rest_client->get('businesses');

			if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
			else:
               return $response->getReasonPhrase();
			endif;
		}catch (\Exception $e) {
			return $e->getMessage();
		}
    }
	
	public function updateBusiness(array $data) {
		try{
			$response = $this->rest_client->request('POST', 'business', ["body" => json_encode($data) ]);

			if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
			else:
               return $response->getReasonPhrase();
			endif;
		}catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}
