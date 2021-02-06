<?php

class Prueba_ctrllr extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        
        $this->load->view('prueba/Prueba_view');
    }

}
