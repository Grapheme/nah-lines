<table class="main-table">
	<tr>
		<th class="name-table"> № офиса </th>
		<th class="name-table"> Площадь (м<sup>2</sup>) </th>
		<th class="name-table"> Стоимость аренды (руб.) </th>
		<th class="name-table"> Статус </th>
	</tr>
<?php for($i=0;$i<count($rent);$i++):?>
	<tr class="<?=(($i+1)&1)?'odd-tr':'even-tr';?>">
		<td class="number-column"><?=$rent[$i]['office']?></td>
		<th class="area-column"><?=$rent[$i]['square']?></th>
		<th class="price-column">
		<?php if($rent[$i]['price'] > 0):?>
			<?=number_format($rent[$i]['price'],2,'.',' ');?>
		<?php else: ?>
			Договорная
		<?php endif;?>
		</th>
		<td class="status-column"><?=$rent[$i]['status']?></td>
	</tr>
<?php endfor;?>
</table>