<?php
class Page_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_info($id = 0)
	{
		return $this->db->query("select * from ts_page where id = $id")->row_array();
	}
}