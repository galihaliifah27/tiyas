<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_COntroller extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if(!$this->session->userdata('logged_in')){
            redirect('auth/login');
        }
    }
}