<?php
	defined('BASEPATH') OR exit('inaccessible');
	class Unex_m extends CI_Model{

		public function inscriptionAdmin($donnees){
			$this->db->insert("admin",$donnees);
			if($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		public function insererCrypto($donnees,$donnes){
			if ($this->input->post('choix')=="Withdraw") {
				$this->db->insert("withdraw",$donnees);
				$this->db->insert("sortiemvola",$donnes);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			} else {
				$this->db->insert("deposit",$donnees);
				$this->db->insert("entreemvola",$donnes);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}
			
		}

		public function insererAutre($donnees,$donnes){
			if ($this->input->post('choix')=="Entrée") {
				$this->db->insert("entreemvola",$donnees);
				$this->db->insert("monnaie",$donnes);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}else{
				$this->db->insert("sortiemvola",$donnees);
				$this->db->insert("monnaie",$donnes);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}
			
		}
		public function insererMvola($donnees){
			if ($this->input->post('choix')=="Entrée") {
				$this->db->insert("entreemvola",$donnees);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}else{
				$this->db->insert("sortiemvola",$donnees);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}
			
		}
		public function insererCoffre($donnees){
			if ($this->input->post('choix')=="Entrée") {
				$this->db->insert("entreemvola",$donnees);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}else{
				$this->db->insert("sortiemvola",$donnees);
				if($this->db->affected_rows()>0){
					return true;
				}else{
					return false;
				}
			}
			
		}

		//***********liste des personnes achetant des cryptos***************//
		public function listecrypto(){
			if ($this->input->post('choix')==="Deposit") {
				$query=$this->db->get('deposit');
				if($query->num_rows()>0){
					return $query->result();
				}else{
					return false;
				}
			}else{
				$query=$this->db->get('withdraw');
				if($query->num_rows()>0){
					return $query->result();
				}else{
					return false;
				}
			}
		}
		//***********liste des personnes vendant d'autres monnaies'***************//
		public function listeautre(){
			if ($this->input->post('choix')==="Entrée") {
				$query=$this->db->get('entreemvola');
				if($query->num_rows()>0){
					return $query->result();
				}else{
					return false;
				}
			}else{
				$query=$this->db->get('sortiemvola');
				if($query->num_rows()>0){
					return $query->result();
				}else{
					return false;
				}
			}
		}
		//****************************************************************//
		public function personneGetByMail($mail){
			$this->db->where('mail',$mail);
			$query=$this->db->get('admin');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

		public function personneGetByMdp($mdp){
			$this->db->where('mdp',$mdp);
			$query=$this->db->get('admin');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

		//modification des éléments des transactions
		public function sortieAutreGetById($id){
			$this->db->where('id',$id);
			$query=$this->db->get('sortiemvola');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

		public function entreeAutreGetById($id){
			$this->db->where('id',$id);
			$query=$this->db->get('entreemvola');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

		public function depositGetById($id){
			$this->db->where('id',$id);
			$query=$this->db->get('deposit');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}

		public function withdrawGetById($id){
			$this->db->where('id',$id);
			$query=$this->db->get('withdraw');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}
		//******************modifier la transaction***********************//
		//mvola
		public function modificationAutre($data,$libelle){
			$this->db->where('libelle',$libelle);
			if ($this->input->post('choix')=="Sortie") {
				$query=$this->db->update('sortiemvola',$data);
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			} else {
				$query=$this->db->update('entreemvola',$data);
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			}
		}
		//crypto
		public function modificationCrypto($data,$nom){
			$this->db->where('nom_crypto',$nom);
			if ($this->input->post('choix')=="Deposit") {
				$query=$this->db->update('deposit',$data);
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			} else {
				$query=$this->db->update('withdraw',$data);
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			}
			
		}
		//suppression d'une transaction mvola dans la liste
		public function supprimerAutre($ident){
			$this->db->where('id',$ident);
			if ($this->input->post('choix')=="Sortie") {
				$query=$this->db->delete('sortiemvola');
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			} else {
				$query=$this->db->delete('entreemvola');
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			}
		}
		//suppression d'une transaction de crypto dans la liste
		public function supprimerCrypto($ident){
			$this->db->where('id',$ident);
			if ($this->input->post('choix')=="Deposit") {
				$query=$this->db->delete('deposit');
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			} else {
				$query=$this->db->delete('withdraw');
				if ($this->db->affected_rows()>0) {
					return true;
				}else {
					return false;
				}
			}
			
		}

		//login form model in codeigniter
		function can_login($mailConnect, $mdpConnect)  
	      {  
	           $this->db->where('mail', $mailConnect);  
	           $this->db->where('mdp', $mdpConnect);  
	           $query = $this->db->get('admin');  
	           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
	           if($query->num_rows() > 0)  
	           {  
	                return true;  
	           }  
	           else  
	           {  
	                return false;       
	           }  
	      } 
	}
?>