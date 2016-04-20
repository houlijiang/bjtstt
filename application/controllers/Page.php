<?php
class Page extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Page_model");
    }
    public function index($id = 0)
    {
        $data['info'] = $this->Page_model->get_info($id);
        $this->load->view('page',$data);
    }
}