<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	/******************************************** guests interface *******************************************************/
	public function loginIn(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'Ошибка при авторизации!<br/>Неверный логин или пароль','path'=>base_url());
		$postdata = $this->input->post();
		if($postdata):
			$user = $this->users->auth_user($postdata['email'],$postdata['password']);
			if($user):
				if($user['active']):
					$this->session->set_userdata(array('logon'=>md5($postdata['email']),'userid'=>$user['id']));
					$json_request['path'] .= ADMIN_START_PAGE;
					$json_request['status'] = TRUE;
				else:
					$json_request['message'] = 'Ошибка при авторизации!<br/>Аккаунт не активирован';
				endif;
			endif;
		endif;
		echo json_encode($json_request);
	}
	
	public function sendFeedBack(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'Сообщенеи не отправлено');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user-name','','required|trim|xss_clean');
		$this->form_validation->set_rules('user-email','','required|trim|valid_email|xss_clean');
		$this->form_validation->set_rules('user-content','','required|trim|xss_clean');
		if($this->form_validation->run()):
			ob_start();?>
<p>Здравствуйте, <em>Администратор</em></p>
<p>Вам сообщение от <?=$_POST['user-name']?></p>
<p>Email адрес пользователя: <?=$_POST['user-email']?></p>
<p>Сообщение от пользователя:<br/><?=$_POST['user-content']?></p>
			<?php $mailtext = ob_get_clean();
			$this->send_mail('info@sk-stroikov.ru',$_POST['user-email'],$_POST['user-name'],'Форма обратной связи Solnechny-club.ru',$mailtext);
			$json_request['status'] = TRUE;
			$json_request['message'] = 'Сообщение отправлено';
		else:
			$json_request['message'] = 'Неверно заполнены поля';
		endif;
		echo json_encode($json_request);
	}
	
	public function loadCorpsFloor(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$corps = $this->input->post('corps');
		if($corps):
			$this->load->model('rent');
			$floor = $this->rent->readFloorCorp($corps);
			?>
			<table class="table-floor" id="table-floor-list">
				<tr><th class="dark-grey">Этажи</th></tr>
			<?php for($i=0;$i<count($floor);$i++):?>
				<tr>
					<th<?=($i == 0)?' class="active-table-floor"':'';?>>
						<a class="select-floor" data-item="<?=$floor[$i]['floor'];?>" href=""><?=$floor[$i]['floor'];?></a>
					</th>
				</tr>
			<?php endfor;?>
			</table>
			<?
		endif;
	}
	
	public function loadFloorRent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'tablerent'=>'','planlink'=>'#');
		if($this->input->post('floor') !== FALSE && $this->input->post('corps') !== FALSE):
			$this->load->model('rent');
			if($rent = $this->rent->readRentCorpFloor($this->input->post('corps'),$this->input->post('floor'))):
				$json_request['tablerent'] = $this->load->view('guests_interface/html/rent_table',array('rent'=>$rent),TRUE);
				$this->load->model('plan');
				$json_request['planlink'] = base_url('images/plan/'.$this->plan->getPlanImage($this->input->post('corps'),$this->input->post('floor')));
				$json_request['status'] = TRUE;
			endif;
		endif;
		echo json_encode($json_request);
	}
	
	/*********************************************** rent **********************************************************/
	
	public function insertRent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'');
		$insert = $this->input->post();
		if($insert):
			$this->load->model('rent');
			$rentID = $this->rent->insert_record($insert);
			if($rentID):
				$text = '<img src="'.site_url('images/check.png').'" alt="" /> Помещение добавлено<hr/>';
				$text .= '<ul><li><a href="'.site_url(ADMIN_START_PAGE.'/add').'">Добавить помещение</a></li>';
				if($rentID):
					$text .= '<li><a href="'.site_url(ADMIN_START_PAGE.'/edit/'.$rentID).'">Редактировать созданное помещение</a></li>';
					$text .= '<li><a href="'.site_url('rent').'" target="_blank">Просмотреть созданное помещение</a></li>';
				endif;
				$text .= '<li><a href="'.site_url(ADMIN_START_PAGE).'">К списку помещений</a></li></ul>';
				$json_request['message'] = $text;
				$json_request['status'] = TRUE;
			endif;
		endif;
		echo json_encode($json_request);
	}
	
	public function updateRent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'');
		$update = $this->input->post();
		if($update && $this->session->userdata('current_item')):
			$this->load->model('rent');
			$update['id'] = $this->session->userdata('current_item');
			$this->rent->update_record($update);
			$this->session->unset_userdata('current_item');
			$text = '<img src="'.site_url('images/check.png').'" alt="" /> Помещение сохранено<hr/>';
			$text .= '<ul><li><a href="'.site_url('rent').'" target="_blank">Просмотреть помещение</a></li>';
			$text .= '<li><a href="'.site_url(ADMIN_START_PAGE).'">К списку помещений</a></li></ul>';
			$json_request['message'] = $text;
			$json_request['status'] = TRUE;
		else:
			$json_request['message'] = '<img src="'.site_url('images/no-check.png').'" alt="" /> Ошибка при сохранении<hr/>';
		endif;
		echo json_encode($json_request);
	}
	
	public function deleteRent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$rent = $this->input->post('parameter');
		$json_request = array('status'=>FALSE);
		if($rent):
			$this->load->model('rent');
			$this->rent->delete_record($rent,'rent');
			$json_request['status'] = TRUE;
		endif;
		echo json_encode($json_request);
	}
	
}