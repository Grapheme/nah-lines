<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("admin_interface/includes/head");?>
</head>
<body>
	<div id="wrap">
		<?php $this->load->view("admin_interface/includes/header");?>
		<div class="container">
			<div class="row">
				<?php $this->load->view("admin_interface/includes/sidebar");?>
				<div class="span9">
					<ul class="breadcrumb">
						<li><a class="no-clickable muted" href="<?=site_url(uri_string());?>">Панель администрирования</a> <span class="divider">/</span></li>
						<li><a href="<?=site_url(ADMIN_START_PAGE);?>">Аренда</a> <span class="divider">/</span></li>
						<li class="active">Добавление</li>
					</ul>
					<div id="div-insert-item">
					<?=$this->load->view('admin_interface/forms/insert-rent')?>
					</div>
					<div id="form-request"></div>
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
</body>
</html>