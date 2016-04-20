<?php
class Page_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_info($field = '')
	{
		return $this->db->query("select `content` from ts_config where name = '{$field}'")->row()->$field;
	}
}