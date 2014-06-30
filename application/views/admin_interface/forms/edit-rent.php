<div class="row">
	<div class="span9">
		<h2>Редактирование помещения</h2>
		<?=form_open('admin/rent/update',array('id'=>'update-rent-form')); ?>
			<div class="control-group">
				<select class="span2" name="corps">
					<option value="1" <?=($rent['corps'] == 1)?'selected="selected"':'';?>>Корпус 1</option>
					<option value="2" <?=($rent['corps'] == 2)?'selected="selected"':'';?>>Корпус 2</option>
				</select>
				<input type="text" class="span2 valid-required" name="floor" placeholder="Номер этажа" <?=TOOLTIP_FIELD_BLANK;?> value="<?=$rent['floor'];?>"/>
				<input type="text" class="span2 valid-required" name="office" placeholder="Номер офиса" <?=TOOLTIP_FIELD_BLANK;?> value="<?=$rent['office'];?>">
			</div>
			<div class="control-group">
				<input type="text" class="span2 valid-required" name="square" placeholder="Площадь (м2)" <?=TOOLTIP_FIELD_BLANK;?> value="<?=$rent['square'];?>">
				<input type="text" class="span2 valid-required" name="price" placeholder="Стоимость" <?=TOOLTIP_FIELD_BLANK;?> value="<?=$rent['price'];?>">
			</div>
			<div class="control-group">
				<input type="text" class="span4 valid-required" name="status" placeholder="Статус" <?=TOOLTIP_FIELD_BLANK;?> value="<?=$rent['status'];?>">
			</div>
			<div class="clear"></div>
			<div class="control-group">
				<textarea rows="3" class="span6" placeholder="Описание" name="note"><?=$rent['note'];?></textarea>
			</div>
			<div class="div-form-operation">
				<button type="submit" id="btn-submit-rent" value="" name="submit" class="btn btn-primary btn-medium">Сохранить</button>
				<a href="<?=site_url(ADMIN_START_PAGE);?>" class="btn btn-inverse btn-medium">Отмена</a>
			</div>
			<div class="wait-request hidden"><img src="<?=site_url('img/loading.gif');?>" alt="" /></div>
		<?= form_close(); ?>
	</div>
</div>