<?php
	defined('BASEPATH') OR exit('inaccessible');
	class Compta extends CI_Controller{
		function __construct(){
			parent::__construct();
			if($this->session->userdata())
			$this->load->model("Compta_m","u");
			$this->load->helper(array('form','url'));
		}

		public function index(){
			$this->load->view('Compta/index');
		}

		public function choixTransaction(){
			$this->load->view('Compta/choixTransaction');
		}

		public function inscriptionAdmin(){
			$this->load->view('Compta/inscriptionAdmin');
		}

		public function insertCrypto(){
			$this->load->view('Compta/insertcrypto');
		}

		public function insertMvola(){
			$this->load->view('Compta/mvola');
		}

		public function suivimvola(){
			$this->load->view('Compta/suivimvola');
		}

		public function suivicrypto(){
			$this->load->view('Compta/suivicrypto');
		}

		
		public function connexion(){
			//$data['contenu']=$this->c->personneGetById($id);
			$this->load->view('Compta/connexion');
		}
		public function deconnexion(){
			//$data['contenu']=$this->c->personneGetById($id);
			$this->load->view('Compta/deconnexion');
		}
		
		public function inscription(){
			$this->load->view('Compta/inscriptionAdmin');
		}
		
		public function transaction(){
			$this->load->view('Compta/transaction');
		}
		//****************************************************//

		//****liste des personnes inscrites*****//
		public function listePersonne(){
			$list['personne']=$this->c->listePersonnes();
			$this->load->view('Compta/listePersonnes',$list);
		}
		public function modifier($ident){
			$data['contenu']=$this->c->personneGetById($ident);
			$this->load->view('Compta/modifier',$data);
		}
		//*************************************//

		public function ajouter(){
			$data2=array(
				'id'=>'0',
				'nom'=>$this->input->post('nom'),
				'prenom'=>$this->input->post('prenom'),
				'mail'=>$this->input->post('mail'),
				'mdp'=>$this->input->post('mdp'));
			$this->c->inscription($data2);
			$this->load->view('Compta/accueil');
		}

		public function modifierQte($nom){
			//$liste['produit']=$this->c->liste();
			/*$prd['prd']=$this->c->produitGetByNom();
			$ajout=$this->input->post('ajouter');
			$enlever=$this->input->post('enlever');
			$this->load->view('Compta/modifier',$nom);*/
			$data['contenu']=$this->c->produitGetByNom($nom);
			$this->load->view('Compta/modifier',$data);
		}

		public function accueil(){
			
			$this->load->view('Compta/accueil');
		}
		public function listeProduits(){
			$liste['produit']=$this->c->liste();
			$this->load->view('Compta/listeProduits',$liste);
		}
		public function consultation(){
			$this->load->view('Compta/consultation');
		}
		//***************************modification produit*****************************//
		public function ajouterProduit($nom){
			$this->c->ajouterProduit($nom);
			$this->listeProduits();
		}
		public function supprimer($ident){
			$this->m->supprimerPersonne($ident);
			$this->listPersonne();
		}
		public function modifierPrdt($nom){
			$data['contenu']=$this->c->produitGetByNom($nom);
			$this->load->view('Compta/modifier',$data);
		}

		public function valider(){
			$nom=$this->input->post('nom_produit');
			$donnees=array(
				'nom_produit'=>$this->input->post('nom_produit'),
				'prix'=>$this->input->post('prix'),
				'image'=>$this->input->post('image'),
				'quantite'=>$this->input->post('quantite')
			);
			//$qte=$this->input->post('quantite');

			$this->c->modifierProduit($donnees,$nom);
		}


		//********************************************************************************//

		//**********connexion**********//
		public function verifier(){
			$this->load->model('Compta');
			$check = $this->Compta->authentifier();
			if ($check) {
				$this->session->set_userdata($check);
				redirect('Compta/choixTransaction.php');
			} else {
				# code...
			}
			
		}


		public function logout(){
			//removing session
			$this->session->unset_userdata('mailConnect');
			redirect("Chaussure");
		}
	}
?>