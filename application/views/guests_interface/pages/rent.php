<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("guests_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/jquery.fancybox.css');?>">
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
								АРЕНДА
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="page-name-small ">
							<a href="">Свободные площади</a>
						</div>
					</div>
					<div class="span6">
						<div class="page-name-small page-name-small-active">
							<a id="fancybox-manual" class="a-building-plan" href="<?=$plan;?>">План здания</a>
						</div>
					</div>
					<div class="span3">
						<div class="page-name-small rent-payment">
							Условия аренды
						</div>
					</div>
				</div>
			</div>
			<div class="container with-margin-top">
				<div class="row">
					<div class="span3">
						<div class="for-table">
							<table class="table-building" id="table-select-corps">
								<tr>
									<th class="active-table-building"><a class="select-corps" data-item="1" href="">Корпус 1</a></th>
									<th><a class="select-corps" data-item="2" href="">Корпус 2</a></th>
								</tr>
							</table>
							<div id="div-table-select-floor">
								<table class="table-floor" id="table-floor-list">
									<tr><th class="dark-grey">Этажи</th></tr>
								<?php for($i=0;$i<count($floor);$i++):?>
									<tr>
										<th<?=($i == 0)?' class="active-table-floor"':'';?>>
											<a class="select-floor" data-item="<?=$floor[$i];?>" href=""><?=$floor[$i];?></a>
										</th>
									</tr>
								<?php endfor;?>
								</table>
							</div>
						</div>
					</div>
					<div class="span6" id="table-rent-list">
						<?php $this->load->view('guests_interface/html/rent_table');?>
					</div>
					<div class="span3">
						<p class="rent-payment">
							Арендная плата – от 450 руб. за <span class="underlined">1 м<sup>2</sup> с НДС</strong></span>,
							включает в себя: охрану, парковку, вывоз мусора,
							уборку и обслуживание мест общего пользования,
							энергию и водоснабжение мест общего пользования,
							аренду телефонных линий.
						</p>
						<p class="rent-payment" id="ask-rent">
							Задать вопрос или уточнить информацию вы можете по телефону:
						</p>
						<div id="rent-tel">
							+7 (863) 261-33-15, 270-49-42
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<h1 class="h">Аренда офисов в Ростове</h1> 
						<p>
							Офисный центр «Нахичеванские линии» предлагает офисы в аренду в Ростове 
							по более низкой стоимости, чем у конкурентов. Мы являемся собственником 
							технических помещений, которые сдаем. Поэтому если вам интересна аренда 
							офисов без посредников, мы рады вам предложить идеальное сочетание 
							цены арендуемых помещений и целого спектра  преимуществ торгово-офисного 
							центра «Нахичеванские линии»- это удобное месторасположение, качество, 
							и развитая инфраструктура.
						</p> 
						<h2 class="h">Район аренда</h2>
						<p>
							«Нахичеванские линии» расположены на 40 линии. Удобная транспортная 
							доступность до основных магистралей Ростова-на-Дону. Для тех, кому 
							интересна аренда Александровка, аренда Шолохова, аренда Нахичевань 
							и аренда Сельмаш.	
						</p>
						<p>
							Очень важным фактором является выгодное расположение бизнес центра: 
							он находится и не в центре и не на окраине Ростова-на-Дону, что 
							доказывает, что до него будет легко добраться как работникам, 
							так и партнерам компании. К тому же нахичеванский район является 
							одним из самых экологически чистых и зеленых зон города.	
						</p>  
						<h3 class="h">Аренда под офис</h3>
						<p>
							Бизнес центр имеет 4-5 этажей, Все предлагаемые помещения с отличной 
							отделкой из высококачественных строительных материалов, имеют 
							современный дизайн. Офисы светлые, с высокими потолками, готовы к въезду.
						</p> 
						<h4 class="h">Условия аренды</h4>
						<p>
							Арендная плата – от 450 руб. за 1 м2 с НДС, включает в себя: охрану, 
							парковку, вывоз мусора, уборку и обслуживание мест общего пользования, 
							энергию и водоснабжение мест общего пользования, аренду телефонных линий.
						</p>
						<p>
							Задать вопрос или уточнить информацию вы можете по телефону: <br/> 
							+7 (863) 261-33-15, 270-49-42 	<br/><br/>
						</p> 
					</div>
				</div>
			</div>
			<!--
			<div class="container">
				<div class="row">
					<div class="span1">
						<a class="page-up" href="#top">наверх</a>
					</div>
				</div>
			</div>
			-->
		</div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>	
	<script type="text/javascript" src="<?=site_url('js/vendor/base.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/cabinet/guest.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/vendor/jquery.fancybox.pack.js');?>"></script>
	<script type="text/javascript">
			$("#fancybox-manual").fancybox({});	
	</script>
</body>
</html>