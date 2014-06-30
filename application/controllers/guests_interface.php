<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Guests_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	/*************************************************** Страницы ********************************************************/
	
	public function index(){

		$this->load->view("guests_interface/pages/index");
	}
	
	public function rent(){
			
		$this->load->model(array('rent','plan'));
		$pagevar = array('rent' => array(),'corps'=> array(),'floor'=> array(),'plan'=>'');
		$rent = $this->rent->readFloorCorp(1);
		for($i=0;$i<count($rent);$i++):
			$pagevar['floor'][] = $rent[$i]['floor'];
		endfor;
		$pagevar['floor'] = array_unique($pagevar['floor']);
		sort($pagevar['floor']);
		if($pagevar['floor']):
			$pagevar['rent'] = $this->rent->readRentCorpFloor(1,$pagevar['floor'][0]);
			$pagevar['plan'] = base_url('images/plan/'.$this->plan->getPlanImage(1,$pagevar['floor'][0]));
		endif;
		$this->load->view("guests_interface/pages/rent",$pagevar);
	}
	
	public function page(){
		
		$this->load->view("guests_interface/pages/".$this->uri->segment(1));
	}
	
	/******************************************* Авторизация и регистрация ***********************************************/
	
	public function loginIn(){
		
		$this->load->view("guests_interface/pages/sign-in");
	}
	
	public function logoff(){
		
		$this->session->unset_userdata(array('logon'=>'','userid'=>'','backpath'=>''));
		if(isset($_SERVER['HTTP_REFERER'])):
			redirect($_SERVER['HTTP_REFERER']);
		else:
			redirect('');
		endif;
	}
	
	/********************************************************************************************************************/
}