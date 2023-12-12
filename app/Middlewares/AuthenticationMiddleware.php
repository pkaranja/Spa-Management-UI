<?php
namespace App\Middlewares;

use Config\Services;

class AuthenticationMiddleware {
    protected $session;
    
    public function __construct() {
        $this->session = Services::session();
    }

    public function isLoggedIn() {
        if ( !$this->session->isLoggedIn OR $this->session->isLoggedIn == null ){
            header("Location: /login");
            die();
        }
        return true;
    }
}
