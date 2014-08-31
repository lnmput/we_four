<?php 
   class Jumplink extends SAE_Controller{
   	    //初始化
   	    public function __construct(){
   	   	  parent::__construct();
   	   	  //加载模型
   	   	  $this->load->model('main_model');
	  
   	    }
   	    
   	    /*
   	     * 微信留言墙
   	     */
   	    
   	    public function messagewall(){
   	    	//获得数据
   	    	
   	    	$result['data']=$this->main_model->getData();
   	    	
   	    	$this->load->view('messagewall',$result);
   	    }
   	    
   	    
   	    public function timewall(){
   	    	$this->load->view('time');
   	    }
   	    
   	    public function demo(){
   	    	$result['data']=$this->main_model->getData();
   	    	$this->load->view('demo',$result);
   	    }
        
       
       public function yibu(){
          //获得数据
   	    	
            $time = date('r');
            echo "data: The server time is: {$time}\n\n";
           
            flush();
           //$result['data']=$this->main_model->getData();
   	    	
           //$this->load->view('messagewall',$result);
       }
   	    
   }
?>