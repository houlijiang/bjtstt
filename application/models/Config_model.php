<?php
class Config_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_info($field = '') 
	{
		return $this->db->query("select `value` from ts_config where name = '{$field}'")->row()->$field;
	}
}