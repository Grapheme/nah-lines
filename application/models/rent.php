<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Rent extends MY_Model{

	var $id = 0; var $corps = 0; var $floor = 0; var $office = 0; var $square = 0; var $price = 0;
	var $date = ''; var $status = ''; var $note = ''; var $plan = '';

	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data){

		$this->corps = $data['corps'];
		$this->floor = $data['floor'];
		$this->office = $data['office'];
		$this->square = $data['square'];
		$this->price = $data['price'];
		$this->status = $data['status'];
		$this->note = $data['note'];
		$this->db->insert('rent',$this);
		return $this->db->insert_id();
	}
	
	function update_record($data){
		
		$this->db->set('corps',$data['corps']);
		$this->db->set('floor',$data['floor']);
		$this->db->set('office',$data['office']);
		$this->db->set('square',$data['square']);
		$this->db->set('price',$data['price']);
		$this->db->set('status',$data['status']);
		$this->db->set('note',$data['note']);
		$this->db->where('id',$data['id']);
		$this->db->update('rent');
		return $this->db->affected_rows();
	}
	
	function read_records(){
		
		$this->db->order_by('corps,floor,office,square,price');
		$query = $this->db->get('rent');
		$data = $query->result_array();
		if($data) return $data;
		return NULL;
	}
	
	function readFloorCorp($corps){
		
		$this->db->select('floor');
		$this->db->group_by('floor');
		$this->db->order_by('office');
		$query = $this->db->get_where('rent',array('corps'=>$corps));
		$data = $query->result_array();
		if($data) return $data;
		return NULL;
	}
	
	function readRentCorpFloor($corps,$floor){
		
		$this->db->order_by('office');
		$query = $this->db->get_where('rent',array('corps'=>$corps,'floor'=>$floor));
		$data = $query->result_array();
		if($data) return $data;
		return NULL;
	}
}