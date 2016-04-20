<?php
class Cat_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_list()
	{
		return $this->db->query("select * from ts_cat")->result_array();
	}
}