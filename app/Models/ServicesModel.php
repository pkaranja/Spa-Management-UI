<?php namespace App\Models;

use Config\Services;
use CodeIgniter\HTTP\CURLRequest;

class ServicesModel
{
    protected CURLRequest $rest_client;

    public function __construct()
    {
        //API configuration
		$options = [
            'baseURI' => $_ENV['api.url'],
		    'timeout' => $_ENV['api.timeout'],
		];

        $this->rest_client = Services::curlrequest($options);
        $this->rest_client->setHeader("Content-Type", "application/json");
        $this->rest_client->setHeader("Accept", "application/json");
    }
    
    public function getServiceCategories()
    {
        try{
            $response = $this->rest_client->get('serviceCategories');

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function getServices(string $rule)
    {
        try{
            $response = $this->rest_client->get('services');
            
            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function getService(string $id)
    {
        try{
            $response = $this->rest_client->get('services/'.$id);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveService(array $data) {
        try{
            $response = $this->rest_client->request('POST', 'services', ["body" => json_encode($data) ]);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateService(string $id, array $data) {
        try{
            $response = $this->rest_client->request('PUT', 'services/'.$id, ["body" => json_encode($data) ]);

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