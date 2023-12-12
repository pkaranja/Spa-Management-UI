<?php namespace App\Models;

use Config\Services;
use CodeIgniter\HTTP\CURLRequest;

class PackagesModel
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

    public function getPackages(string $rule)
    {
        try{
            $response = $this->rest_client->get('servicePackages');

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    

    public function getPackage(string $id)
    {
        try{
            $response = $this->rest_client->get('servicePackages/'.$id);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function savePackage(array $data) {
        try{
            $response = $this->rest_client->request('POST', 'servicePackages', ["body" => json_encode($data) ]);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updatePackage(string $id, array $data) {
        try{
            $response = $this->rest_client->request('PUT', 'servicePackages/'.$id, ["body" => json_encode($data) ]);

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