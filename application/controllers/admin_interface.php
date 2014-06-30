<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
		if(!$this->loginstatus):
			redirect('');
		endif;
	}
	
	/******************************************** cabinet *******************************************************/
	
	public function rent(){
		
		$this->load->model('rent');
		$pagevar = array(
			'rent' => $this->rent->read_records(),
			'corps'=> array(),
			'floor'=> array(),
		);
		
		for($i=0;$i<count($pagevar['rent']);$i++):
			$pagevar['corps'][] = $pagevar['rent'][$i]['corps'];
			$pagevar['floor'][] = $pagevar['rent'][$i]['floor'];
		endfor;
		$pagevar['corps'] = array_unique($pagevar['corps']);
		sort($pagevar['corps']);
		$pagevar['floor'] = array_unique($pagevar['floor']);
		sort($pagevar['floor']);
		$this->session->set_userdata('backpath',site_url(uri_string()));
		$this->session->unset_userdata('current_item');
		$this->load->view("admin_interface/rent/rent-list",$pagevar);
	}
	
	public function insertRent(){
		$this->load->helper('form');
		$this->session->unset_userdata('current_item');
		$this->load->view("admin_interface/rent/insert-rent");
	}

	public function editRent(){
		
		$current_item = $this->session->userdata('current_item');
		if(!$current_item && $this->uri->total_segments() == 4):
			$this->session->set_userdata('current_item',$this->uri->segment(4));
			redirect('admin/rent/edit');
		elseif(!$current_item && $this->uri->total_segments() == 3):
			redirect('admin/rent');
		endif;
		$this->load->helper('date');
		$this->load->model('rent');
		$this->load->helper('form');
		$pagevar = array(
			'rent' => $this->rent->read_record($current_item,'rent'),
		);
		if(!$pagevar['rent']):
			show_error('В доступе отказано');
		endif;
		$this->load->view("admin_interface/rent/update-rent",$pagevar);
	}
	
}