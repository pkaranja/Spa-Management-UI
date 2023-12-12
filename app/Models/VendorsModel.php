<?php namespace App\Models;

use Config\Services;
use CodeIgniter\HTTP\CURLRequest;

class VendorsModel
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
    
    public function getVendors(string $rule)
    {
        try{
            $response = $this->rest_client->get('vendors');
            
            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function getVendor(string $id)
    {
        try{
            $response = $this->rest_client->get('vendors/'.$id);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function saveVendor(array $data) {
        try{
            $response = $this->rest_client->request('POST', 'vendors', ["body" => json_encode($data) ]);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function updateVendor(string $id, array $data) {
        try{
            $response = $this->rest_client->request('PUT', 'vendors/'.$id, ["body" => json_encode($data) ]);

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