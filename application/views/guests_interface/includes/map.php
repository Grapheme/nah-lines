<div id="map" class="collapsed">
	<div class="container">
		<div class="row">
			<div class="span12 relative">
				<a href="#" id="showmap">ПОКАЗАТЬ КАРТУ <img src="<?=site_url('img/arr_up.png');?>"></a>
			</div>
		</div>
	</div>
	<div id="ymaps-map-id_136162649635457629885" style="width: 100%; height: 100%;"> </div>
	<script type="text/javascript">
		var map = null;
		function fid_136162649635457629885(ymaps) {
			map = new ymaps.Map("ymaps-map-id_136162649635457629885", {
				center : [39.77451859136226, 47.235863204451036],
				zoom : 17,
				type : "yandex#map"
			});
			map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
			map.geoObjects.add(new ymaps.Placemark([39.77438984532955, 47.235044778312805], {
				balloonContent : '"Нахичеванские линии"'
			}, {
				preset : "twirl#darkorangeDotIcon"
			})).add(new ymaps.Placemark([39.77422891278853, 47.23530053810054], {
				balloonContent : 'Ресторан-бар "Нью-Йорк"'
			}, {
				preset : "twirl#whiteDotIcon"
			}));
		};
	</script>
	<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_136162649635457629885"></script>
</div>