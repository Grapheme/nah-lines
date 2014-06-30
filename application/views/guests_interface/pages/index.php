<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("guests_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/jquery.fancybox.css');?>">
</head>
<body>
	<div id="wrap">
		<div class="main clearfix">
			<?php $this->load->view("guests_interface/includes/header");?>
			<div class="main-block-with-backgr clearfix">
				<div class="arrow-bg">
					<div class="container">
						<div class="text-block">
							<span class="text-blue">ПЛОЩАДЬ ЗДАНИЯ</span>5704 м<sup>2</sup>
						</div>
						<div class="text-block">
							<span class="text-blue">ОФИСНЫЕ ПОМЕЩЕНИЯ</span>5704 м<sup>2</sup> ОТ 8 ДО 110 м<sup>2</sup>
						</div>
						<div class="text-block">
							<span class="text-blue">АРЕНДНАЯ ПЛАТА</span>ОТ 450 РУБ. ЗА 1м<sup>2</sup>
						</div>
						<div id="orange-1">
							<div class="text-white">
								<a href="<?=site_url('rent');?>">СВОБОДНЫЕ ПЛОЩАДИ <img class="small-arrow" src="<?=site_url('img/arr_right.png');?>"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="main-block-info clearfix">
						<div class="row">
							<div class="span7 black-block">
								<div class="black-block-text" id="first-text">
									Автономное энергоснабжение и отопление<hr>
								</div>
								<div class="black-block-text">
									Здание обеспечено кондиционированием<hr>
								</div>
								<div class="black-block-text">
									Видеонаблюдение и вневедомственная охрана<hr>
								</div>
								<div class="black-block-text">
									Охраняемая парковка<hr>
								</div>
								<div class="black-block-text">
									Развитая инфраструктура<hr>
								</div>
								<div class="black-block-text">
									Здание соответствует всем нормам пожарной безопасности<hr>
								</div>
								<div class="black-block-text">
									Складские помещения на соседней территории
								</div>
								<div class="orange" id="orange-2">
									<div class="text-white" id="text-white-2">
										<a id="photos" href="#">ФОТОГРАФИИ <img class="small-arrow" src="<?=site_url('img/arr_right.png');?>"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-block clearfix">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="main-text" id="first-main-text">
								<h1>Бизнес-центр «Нахичеванские линии». Аренда офисов Ростов.</h1>
							</div>
							<div class="main-text">
								<p>
									«Нахичеванские линии»- это торгово-офисный центр, расположенный на оживленной 
									транспортной развязке нахичеванского района г. Ростова-на-Дону. Удобный выезд из 
									Александровки в центр города, на пр.Шолохова (Аэропорт) и на трассу м.4. 
									Имеется свободный подъезд как легкового, так и грузового транспорта.
								</p>
							</div>
							<div class="main-text" id="last-main-text">
								<p>
									Офисный центр имеет современный вид: 4-5 этажный корпус после реконструкции с 
									евроремонтом. Офисные помещения отличаются продуманным функциональным дизайном 
									и отличной отделкой из высококачественных строительных материалов.
								</p>
							</div>
							<div class="big-text">
								Адрес:
								<div class="addr">
									40-я линия, 5/64
								</div>
								Ростов-на-Дону
							</div>
						</div>
						<div class="span12">
							<div class="main-text" id="first-main-text">
								<h2>Аренда в Александровке и Нахичевани</h2>
							</div>
							<div class="main-text">
								<p>
									Бизнес-центр «Нахичеванские линии» предлагает своим арендаторам выгодные условия и 
									преимущества для тех, кому интересна аренда помещений в Ростове, а также для тех, 
									кто заинтересован снять офис именно в нахичеванском районе. Находящийся на 40 линии, 
									бизнес центр занимает первую линию домов в зеленом и экологичном районе Ростова. 
								</p>
								<p>
									Центр имеет аккуратный строгий репрезентабельный внешний вид. На первом этаже 
									здания находится ресторан-бар «<a href="http://newyork-bar.ru/" target="_blank" class="green-link">New York</a>», 
									где можно недорого пообедать и провести деловую встречу.
								</p>
							</div>
							<div class="main-text">
								<p>
									Аренда офиса в бизнес центре «Нахичеванские линии»  несомненно укрепит авторитет 
									и поднимет репутацию вашей организации. «Нахичеванские линии» это идеальное 
									сочетание цены арендуемых помещений, качества и инфраструктуры. 
									<a class="green-link show-seo-infoblock-content" href="<?=site_url('arenda_ofisov_rostov');?>">Аренда офисов.</a>
								</p>
							</div>
						</div>
						<div class="span12">
							<?=$this->load->view('guests_interface/pages/seo-block');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/map");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
	<script type="text/javascript" src="<?=site_url('js/vendor/base.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/cabinet/guest.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/vendor/jquery.fancybox.pack.js');?>"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#showmap").click(function(){
				$("#map").toggleClass('collapsed');
				if(!$("#map").hasClass('collapsed')){
					$("#map").animate({height:'400px', bottom: '430px'},100,function(){
						map.container.fitToViewport();
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
			$(".show-seo-infoblock-content").click(function(){
				$(".hidden-seo-infoblock-content").slideToggle('slow');
			});
			
			$('#photos').click(function(e){
				$.fancybox.open([
			        {
			            href : '<?=site_url('images/photos/40line-2.jpg');?>',                
			            title : 'Офисное помещение в первом корпусе центра'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-9.jpg');?>',                
			            title : 'Коридорное пространство между офисами'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-3.jpg');?>',                
			            title : 'Фасад здания со стороны парковки'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-4.jpg');?>',                
			            title : 'Охраняемая парковка в закрытом дворе центра'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-1.jpg');?>',                
			            title : 'Холл первого корпуса центра'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-5.jpg');?>',                
			            title : 'Турникет на входе в бизнес-центр'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-6.jpg');?>',                
			            title : 'Контрольно-пропускной пункт'
			        },
			        {
			            href : '<?=site_url('images/photos/40line-8.jpg');?>',                
			            title : 'Холл центра с пунктом охраны'
			        }
			    ], {
			        padding : 0
			    });
			    
			    return false;
			});
		})
	</script>
</body>
</html>
