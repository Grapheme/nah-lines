<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<?=anchor(ADMIN_START_PAGE,'SOLNECHNY CLUB',array('class'=>'brand'));?>
				<div class="nav-collapse collapse">
				<?php $this->load->view("header_blocks/admin");?>
				</div>
			</div>
		</div>
	</div>
</header>