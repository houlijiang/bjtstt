<?php
class Product extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}
    public function index($id = 0)
    {
    	$data = $this->Product_model->get_list($id);
    	$config['base_url'] = site_url('/product/index/');
    	$config['total_rows'] = $data['total'];
    	$config['per_page'] = 20;
    	$config['uri_segment'] = 3;
    	$this->pagination->initialize($config);
    	$data['page'] = $this->pagination->create_links();
        $this->load->view('product_home',$data);
    }
    
    public function show($id = 0)
    {
        $data['info'] = $this->Product_model->get_info($id);
        $data['title'] = $data['info']['name'];
        $this->load->view('product_info',$data);
    }
}