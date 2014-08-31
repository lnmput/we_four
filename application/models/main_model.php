<?php 
  class Main_model extends CI_Model{
  
    function __construct()
    {
        parent::__construct();
    }
  	 
  	 /*
  	  * 数据插入:用户发送来的数据
  	  * 表结构：
  	  * @id
  	  * @username  fromusername
  	  * @content  内容
  	  * @time     时间
  	  * 
  	  */ 			
  	 public function setData($data){
  	 	$this->db->set($data);
  	 	$this->db->insert('fromusercontent');
  	 	return $this->db->insert_id();

  	 }
  	 /*
  	  * 数据取出：用户发送来的数据
  	  */
  	 public function getData(){
  	 	$this->db->select('content,time');
  	 	$this->db->order_by("time", "DESC");
  	 	$query=$this->db->get('fromusercontent');
  	 	
  	 	$result=$query->result_array();
  	 	
  	 	return $result;
  	 }
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  }
?>