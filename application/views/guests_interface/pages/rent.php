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
						<h1 class="h">Нахичеванские линии: аренда</h1> 
						<p>
							Аренда офиса Сельмаш — это то, что интересует каждого начинающего и опытного предпринимателя при открытии бизнеса. 
							Не все имеют возможность строительства собственных офисных помещений и от того, где и по какой цене будет снят офис, зависит немалая часть успешного развития. 
							Аренда офисов без посредников в этом случае будет идеальным выбором, ведь собственник площади чаще всего сдает помещения по вполне приемлемым ценам. 
							Недорогая аренда офисов — это необязательно аренда в самых дальних районах города! Яркий пример выгодной аренды офиса в Ростове — бизнес-центр «Нахичеванские линии». 
							Здание расположено в одном из самых зеленых и экологически благоприятных районов Ростова-на-Дону, на удобной транспортной развязке, позволяющей быстро добраться в любой пункт города. 
							Те, кого интересует аренда офисов в Александровке, аренда Сельмаш или аренда офисов на пр. Шолохова, несомненно, должны остановить свой выбор на «Нахичеванских линиях». 
							Аренда офиса от собственника в этом случае будет отличным и выгодным решением. Четырехэтажный корпус здания имеет офисы различной площади — от 8 до 110 кв.м. 
							При необходимости бизнес-центр в аренду предлагает и складские помещения.
						</p>
						<img style="float:right;" width="400" src="<?=base_url('img/pages/rent.png');?>" alt="" />
						<h2 class="h">Аренда офисов Нахичеванские линии</h2>
						<p>
							Общая площадь предлагаемого в аренду здания — 5704 кв.м, цена одного кв.м — 450 рублей, при этом в стоимость входит охраняемая парковка, охрана, вывоз мусора, обслуживание и уборка мест общего пользования, 
							аренда телефонных линий, водоснабжение и электроснабжение мест общего пользования. Среди преимуществ бизнес-центра «Нахичеванские линии» - наличие видеонаблюдения, 
							собственная парковка, система кондиционирования и автономное энергоснабжение.	
						</p>
						<p>
							Здание бизнес-центра недавно отремонтировано, все офисные помещения отличаются тщательно продуманным эргономичным дизайном. 
							В отделке офисов использовались только качественные стройматериалы, не оказывающие вредного воздействия на человека. Развитая инфраструктура района, 
							его приближенность к крупным магистралям делает аренду офисов в «Нахичеванских линиях» весьма привлекательной с точки зрения экономичности и удобства. 
							Рядом с бизнес-центром находятся продуктовые магазины и магазины товаров первой необходимости, а на первом этаже здания — ресторан <a href="http://newyork-bar.ru/">New York</a>, 
							в котором можно провести деловую встречу или бизнес-ланч. Еще одно преимущество — наличие удобного и быстрого выезда в центр города, на трассу М4 и на пр. Шолохова.
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