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
			$this->load->view('Unex/FR/home');
		}
		public function card(){
			$this->load->view('Unex/FR/card');
		}
		public function wallet(){
			$this->load->view('Unex/FR/wallet');
		}
		public function pricing(){
			$this->load->view('Unex/FR/pricing');
		}
		public function faq(){
			$this->load->view('Unex/FR/faq');
		}
		public function contacte(){
			$this->load->view('Unex/FR/contacte');
		}
		public function mail(){
			$this->load->view('Unex/FR/mail');
		}
		public function comingSoon(){
			$this->load->view('Unex/FR/coming-soon');
		}
		public function tuto(){
			$this->load->view('Unex/FR/tuto');
		}
		public function guide(){
			$this->load->view('Unex/FR/guide');
		}
		public function crypto(){
			$this->load->view('Unex/FR/crypto');
		}
		public function blog(){
			$this->load->view('Unex/FR/blog');
		}
		public function blog_single(){
			$this->load->view('Unex/FR/blog_single');
		}
	}
?>