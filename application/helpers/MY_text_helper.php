<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	function blog_limiter($content){
		
		if(!empty($content)):
			$pattern = "/\<cut text\=\"(.+?)\">/i";
			$replacement = "<a href=\"#\" class=\"none advanced muted\">\$1</a> <cut>";
			return preg_replace($pattern, $replacement,$content);
		else:
			return '';
		endif;
	}
	
	function getStatus($userID,$status){
		
		$html = '<div class="btn-group" data-toggle="buttons-radio" data-account="'.$userID.'">';
		if($status):
			$html .= '<button type="button" class="event-status btn btn-mini btn-success active">ДА</button><button type="button" class="event-status btn btn-mini">НЕТ</button>';
		else:
			$html .= '<button type="button" class="event-status btn btn-mini">ДА</button><button type="button" class="event-status btn btn-mini btn-danger active">НЕТ</button>';
		endif;
		return $html .= '</div>';
	}
?>