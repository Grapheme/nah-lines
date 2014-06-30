<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("guests_interface/includes/head");?>
</head>
<body>
	<div id="wrap">
		<div class="main">
			<?php $this->load->view("guests_interface/includes/header");?>
			<div class="grey_title">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="page-name">
								ИНФРАСТРУКТУРА
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span3 first-row">
						<p><a href="#" class="icon" id="icon1"></a></p>
						<p class="text-icon">
							Безопасность здания и<br>
							прилегающий территории,<br>
							видеонаблюдение и также<br>
							вневедомственная охрана
						</p>
					</div>
					<div class="span3 offset1 first-row">
						<a href="#" class="icon" id="icon2"></a>
						<p class="text-icon">
							Энергоснабжение и<br>
							отопление. Также близкая<br>
							доступность продуктовых<br>
							магазинов.
						</p>
					</div>
					<div class="span3 offset1 first-row">
						<a href="#" class="icon" id="icon3"></a>
						<p class="text-icon">
							Ресторан-бар Нью-Йорк<br>
							доступные по цене ланчи.<br>
							Также близкая доступность<br>
							продуктовых магазинов.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="span3 second-row">
						<a href="#" class="icon" id="icon4"></a>
						<p class="text-icon">
							Близкая доступность<br>
							продуктовых магазинов и<br>
							магазинов с товарами<br>
							первой необходимости
						</p>
					</div>
					<div class="span3 offset1 second-row">
						<a href="#" class="icon" id="icon5"></a>
						<p class="text-icon">
							Соответствие всем нормам<br>
							пожарной безопасности.<br>
							Близкая доступность<br>
							продуктовых магазинов.
						</p>
					</div>
					<div class="span3 offset1 second-row">
						<a href="#" class="icon" id="icon6"></a>
						<p class="text-icon">
							Близкая доступность<br>
							продуктовых магазинов и<br>
							магазинов с товарами<br>
							первой необходимости.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
