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
						<li class="active">Аренда</li>
					</ul>
					<a href="<?=site_url('admin/rent/add')?>" class="btn btn-medium btn-info">Добавить помещение</a>
				<?php if($rent):?>
					<select class="span2 rent-filter" autocomplete="off" name="corps" id="filter-corps">
						<option value="0">Номер корпуса</option>
					<?php for($i=0;$i<count($corps);$i++):?>
						<option value="<?=$corps[$i];?>"><?=$corps[$i];?></option>
					<?php endfor;?>
					</select>
					<select class="span2 rent-filter" autocomplete="off" name="floor" id="filter-floor">
						<option value="0">Номер этажа</option>
					<?php for($i=0;$i<count($floor);$i++):?>
						<option value="<?=$floor[$i];?>"><?=$floor[$i];?></option>
					<?php endfor;?>
					</select>
					<table class="table table-hover" id="table-rent-list">
						<thead>
							<tr>
								<th class="span1">Копрус</th>
								<th class="span1">Этаж</th>
								<th class="span1">Офис</th>
								<th class="span1">Площадь</th>
								<th class="span1">Стоимость</th>
								<th class="span2">Статус</th>
								<th class="span2">&nbsp;</th>
							</tr>
						</thead>
						<tbody">
						<?php for($i=0;$i<count($rent);$i++):?>
							<tr class="table-tr-rent" data-corps="<?=$rent[$i]['corps'];?>" data-floor="<?=$rent[$i]['floor'];?>">
								<td><?=$rent[$i]['corps'];?></td>
								<td><?=$rent[$i]['floor'];?></td>
								<td><?=$rent[$i]['office'];?></td>
								<td><?=$rent[$i]['square'];?></td>
								<td><?=$rent[$i]['price'];?></td>
								<td><?=$rent[$i]['status'];?></td>
								<td>
									<nobr>
										<a href="<?=site_url(ADMIN_START_PAGE.'/edit/'.$rent[$i]['id'])?>" class="btn">Редак.</a>
										<a class="btn link-operation-account" href="#confirm-user" data-toggle="modal" data-src="<?=$rent[$i]['id'];?>" data-url="<?=site_url(ADMIN_START_PAGE.'/delete');?>">Удал.</a>
									</nobr>
								</td>
							</tr>
						<?php endfor;?>
						</tbody>
					</table>
				<?php else:?>
					<h3>Список пуст</h3>
				<?php endif;?>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin_interface/modal/confirm-user");?>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
</body>
</html>