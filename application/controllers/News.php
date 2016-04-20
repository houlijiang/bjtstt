<?php
class News extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model');
	}
	
    public function index($page_index = 0)
    {
        $data = $this->Content_model->get_list($page_index);
        $config['base_url'] = site_url('/news/index/');
        $config['total_rows'] = $data['total'];
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $this->load->view('news_home',$data);
    }
    
    public function show($id = 0)
    {
        $data['info'] = $this->Content_model->get_info($id);
        $data['title'] = $data['info']['title'];
        $this->load->view('news_info',$data);
    }
}