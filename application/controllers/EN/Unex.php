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
		public function home(){
			$this->load->view('Unex/EN/home');
		}
		public function card(){
			$this->load->view('Unex/EN/card');
		}
		public function wallet(){
			$this->load->view('Unex/EN/wallet');
		}
		public function pricing(){
			$this->load->view('Unex/EN/pricing');
		}
		public function faq(){
			$this->load->view('Unex/EN/faq');
		}
		public function contacte(){
			$this->load->view('Unex/EN/contacte');
		}
		public function mail(){
			$this->load->view('Unex/EN/mail');
		}
		public function comingSoon(){
			$this->load->view('Unex/EN/coming-soon');
		}
		public function tuto(){
			$this->load->view('Unex/EN/tuto');
		}
		public function guide(){
			$this->load->view('Unex/EN/guide');
		}
		public function crypto(){
			$this->load->view('Unex/EN/crypto');
		}
		public function blog(){
			$this->load->view('Unex/EN/blog');
		}
		public function blog_single(){
			$this->load->view('Unex/EN/blog_single');
		}
	}
?>