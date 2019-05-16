<?php
class Overview extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Load Admin Overview
        $this->load->view("admin/overview");
    }
}
