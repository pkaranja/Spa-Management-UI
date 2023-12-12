<?php namespace App\Models;

use Config\Services;
use CodeIgniter\HTTP\CURLRequest;

class ProductsModel
{
    protected CURLRequest $rest_client;

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
    
    public function getProducts(string $rule)
    {
        try{
            $response = $this->rest_client->get('stocks');
            
            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function getProduct(string $id)
    {
        try{
            $response = $this->rest_client->get('products/'.$id);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function saveProduct(array $data) {
        try{
            $response = $this->rest_client->request('POST', 'products', ["body" => json_encode($data) ]);

            if ( $response->getStatusCode() == 200 ):
                return json_decode($response->getBody());
            else:
               return $response->getReasonPhrase();
            endif;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function updateProduct(string $id, array $data) {
        try{
            $response = $this->rest_client->request('PUT', 'products/'.$id, ["body" => json_encode($data) ]);

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