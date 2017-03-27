<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function Even($num){
		$return ="";
		if($num %2 == 0){
			$return = "Even";
		}else {
			$return = "Odd";
		}

		return $return;
	}

}

/* End of file Mymodel.php */
/* Location: ./application/models/Mymodel.php */