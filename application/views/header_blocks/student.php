<ul class="nav">
	<li class="dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown"><?=$this->user['name']?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><?=anchor(STUDENT_START_PAGE,'Личный кабинет');?></li>
			<li><?=anchor(STUDENT_START_PAGE.'/profile','Мой профиль');?></li>
			<li><?=anchor(STUDENT_START_PAGE.'/settings','Мои настройки');?></li>
		</ul>
	</li>
	<li><?=anchor('log-off','Выйти',array('class'=>'exit'));?></li>
</ul>