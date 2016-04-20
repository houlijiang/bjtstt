<?php
class Content_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_info($id = 0)
	{
		$id = intval($id);
		return $this->db->query("select * from ts_content where id = $id")->row_array();
	}
	
	public function get_list($page_index = 0,$page_size = 10)
	{
		$total = $this->db->query("select count(id) total from ts_content")->row()->total;
		$list = $this->db->query("select a.id,a.title,a.utime,b.catname from ts_content 
				left join ts_cat b on b.id = a.catid
				where a.id = $id limit $page_index,$page_size")->result_array();
		return array('list'=>$list,'total'=>$total);
	}
}