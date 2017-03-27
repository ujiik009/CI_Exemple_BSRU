<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mycontroller extends CI_Controller {

 	public function __construct(){
		parent::__construct();
		$this->load->view('inputView');
		$this->load->model('Mymodel');
	}
 
 	public function index()
 	{
 		//echo "hello";
 	}

 	public function get_Even(){
 		$number = $this->input->post("number");
 		$res = $this->Mymodel->Even($number);
 		$data["res"] = $res;
 		$this->load->view('Myview', $data);
 	//echo $res;
 		//$this->load->view('Myview', $data, FALSE);
 		//echo $res;
 	}


 
 }
 
 /* End of file Mycontroller.php */
 /* Location: ./application/controllers/Mycontroller.php */