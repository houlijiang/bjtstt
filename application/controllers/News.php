<?php
class News extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model');
	}
	
    public function index($page_index = 0)
    {
        $data['list'] = $this->Content_model->get_list($page_index);
        $this->load->view('news_home',$data);
    }
    
    public function show($id = 0)
    {
        $data['info'] = $this->Content_model->get_info($id);
        $data['title'] = $data['info']['title'];
        $this->load->view('news_info',$data);
    }
}