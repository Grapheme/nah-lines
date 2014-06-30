<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("guests_interface/includes/head");?>
</head>
<body>
	<div id="wrap">
		<div class="main" id="main-contacts">
		<?php $this->load->view("guests_interface/includes/header");?>
			<div class="grey_title">
				<div class="container">
					<div class="row">
						<div class="span24">
							<div class="page-name">
								КОНТАКТЫ
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span4">
						<div class="contacts-block">
							<div class="blue-font bold">
								АДРЕС
							</div>
							<div class="contacts-font">
								г. Ростов-на-Дону, ул. 40-я линия, 5/64
							</div>
						</div>
						<div class="contacts-block">
							<div class="blue-font bold">
								ТЕЛЕФОНЫ
							</div>
							<div class="contacts-font">
								(863) 261-33-15, 270-49-42
							</div>
						</div>
						<div class="contacts-block">
							<div class="blue-font bold">
								E-MAIL
							</div>
							<div class="contacts-font green-link">
								<?=safe_mailto('n_links@donpac.ru','n_links@donpac.ru');?>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="contacts-block">
							<div class="blue-font bold">
								ДИРЕКТОР
							</div>
							<div class="contacts-font">
								Малыхина Наталья Владимировна<br>
								тел. (863) 270-49-42
							</div>
						</div>
					</div>
					<div class="span3">
						<!--
						<div class="contacts-block">
							<div class="blue-font" id="show-way">
								ПОКАЗАТЬ МАРШРУТЫ:
							</div>
							<ul class="way-list">
								<li><a href="" class="active-way" id="way-center">Из центра</a></li>
								<li><a href="" id="way-aleks">Из пос. Александровка</a></li>
								<li><a href="" id="way-shol">С пр. Шолохова</a></li>
							</ul>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/map");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
	<script>
		$(document).ready(function(){
			$("#showmap").click(function(){
				$("#map").toggleClass('collapsed');
				if(!$("#map").hasClass('collapsed')){
					$("#map").animate({height:'400px', bottom: '430px'},100,function(){
						try {
							map.container.fitToViewport();
						} catch(err) { }
						$('#showmap').html('ЗАКРЫТЬ КАРТУ <img src="<?=site_url('img/arr_down.png');?>">');
						$("html, body").animate({ scrollTop: $(document).height() }, 500);
					});
				}else{
					$("#map").animate({height:'0', bottom: '30px'}, 300, function(){
						map.container.fitToViewport();
						$('#showmap').html('ПОКАЗАТЬ КАРТУ <img src="<?=site_url('img/arr_up.png');?>">');
					});
				}
			});
			$("#showmap").click();
		})
	</script>
</body>
</html>
