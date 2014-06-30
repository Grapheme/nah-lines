<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Model{

	var $id				= 0;
	var $email			= '';
	var $photo			= '';
	var $thumbnail		= '';
	var $password		= '';
	var $signdate		= '';
	var $active			= 0;
	var $temporary_code	= '';
	var $language		= 1;

	function __construct(){
		parent::__construct();
	}
	
	function read_record($record_id,$table){
		
		$this->db->select('id,email,active,language');
		$query = $this->db->get_where('users',array('id'=>$record_id),1,0);
		$data = $query->result_array();
		if($data) return $data[0];
		return FALSE;
	}
	
	function insert_record($data){

		$this->email 	= $data['email'];
		$this->password	= md5($data['password']);
		$this->signdate = date("Y-m-d");
		
		$this->db->insert('users',$this);
		return $this->db->insert_id();
	}
	
	function auth_user($login,$password){
		
		$this->db->select('id,active');
		$this->db->where('email',$login);
		$this->db->where('password',md5($password));
		$query = $this->db->get('users',1);
		$data = $query->result_array();
		if($data) return $data[0];
		return FALSE;
	}

	function user_exist($field,$parameter){
			
		$this->db->where($field,$parameter);
		$query = $this->db->get('users',1);
		$data = $query->result_array();
		if(count($data)) return $data[0]['id'];
		return FALSE;
	}
	
	function valid_code($code){
		
		
		$this->db->where('temporary_code',$code);
		$this->db->where('code_life >=',now());
		$query = $this->db->get('users',1);
		$data = $query->result_array();
		if(count($data)) return $data[0]['id'];
		return FALSE;
	}

	function valid_password($id,$field,$parameter){
			
		$this->db->where('id',$id);
		$this->db->where($field,$parameter);
		$query = $this->db->get('users',1);
		$data = $query->result_array();
		if(count($data)) return $data[0]['id'];
		return FALSE;
	}
	
}