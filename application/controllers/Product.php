<?php
class Product extends CI_Controller{
    public function index($id = 0)
    {
        
        $this->load->view('product_home');
    }
    
    public function show($id = 0)
    {
        
        $this->load->view('product_info');
    }
}