<?php
class News extends CI_Controller{
    public function index()
    {
        
        $this->load->view('news_home');
    }
    
    public function show($id = 0)
    {
        
        $this->load->view('news_info');
    }
}