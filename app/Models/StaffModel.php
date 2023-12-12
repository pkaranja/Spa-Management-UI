<?php namespace App\Models;

use Config\Services;
use CodeIgniter\HTTP\CURLRequest;

class StaffModel
{
    protected CURLRequest $rest_client;

    public function __construct()
    {
        //API configuration
		$options = [
            'baseURI' => 'https://dummyjson.com/',
		    'timeout' => 3,
		];

        $this->rest_client = Services::curlrequest($options);
    }

    public function getStaff(string $rule)
    {
        try{
            $response = $this->rest_client->get('users');

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