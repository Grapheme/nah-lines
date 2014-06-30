<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Plan extends MY_Model{

	var $id = 0; var $corps = 0; var $floor = 0; var $plan = '';

	function __construct(){
		parent::__construct();
	}
	
	function getPlanImage($corps,$floor){
		
		$this->db->select('plan');
		$query = $this->db->get_where('plan',array('corps'=>$corps,'floor'=>$floor));
		$data = $query->result_array();
		if(count($data)):
			return $data[0]['plan'];
		endif;
		return NULL;
	}
}