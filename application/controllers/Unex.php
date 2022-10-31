<?php
	defined('BASEPATH') OR exit('inaccessible');
	class Unex extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("Unex_m","u");
			$this->load->helper(array('form','url'));
		}

		public function index(){
			$this->load->view('Unex/index');
		}

	}
?>