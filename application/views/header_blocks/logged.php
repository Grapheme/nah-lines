<ul class="nav">
	<li class="dropdown">
		<a href="" class="no-clickable dropdown-toggle" data-toggle="dropdown"><?=$this->user['name']?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<?php if($this->user['class'] == 1):?>
			<li><?=anchor(ADMIN_START_PAGE,'Панель управления');?></li>
		<?php elseif($this->user['class'] == 4):?>
			<li><?=anchor(STUDENT_START_PAGE,'Личный кабинет');?></li>
		<?php endif;?>
		</ul>
	</li>
	<li><?=anchor('log-off','Выйти',array('class'=>'exit'));?></li>
</ul>