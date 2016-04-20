<?php
class Content_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_info($id = 0)
	{
		$id = intval($id);
		return $this->db->query("select * from ts_content where contentid = $id")->row_array();
	}
	
	public function get_list($page_index = 0,$page_size = 10)
	{
		$total = $this->db->query("select count(contentid) total from ts_content")->row()->total;
		$list = $this->db->query("select a.contentid id,a.title,a.utime,b.catname from ts_content a
				left join ts_cat b on b.catid = a.catid
				limit $page_index,$page_size")->result_array();
		return array('list'=>$list,'total'=>$total);
	}
}