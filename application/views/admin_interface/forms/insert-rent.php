<div class="row">
	<div class="span9">
		<h2>Добавление помещения</h2>
		<?=form_open('admin/rent/insert',array('id'=>'insert-rent-form')); ?>
			<div class="control-group">
				<select class="span2" name="corps">
					<option value="1">Корпус 1</option>
					<option value="2">Корпус 2</option>
				</select>
				<input type="text" class="span2 valid-required" name="floor" placeholder="Номер этажа" <?=TOOLTIP_FIELD_BLANK;?> value=""/>
				<input type="text" class="span2 valid-required" name="office" placeholder="Номер офиса" <?=TOOLTIP_FIELD_BLANK;?> value="">
			</div>
			<div class="control-group">
				<input type="text" class="span2 valid-required" name="square" placeholder="Площадь (м2)" <?=TOOLTIP_FIELD_BLANK;?> value="">
				<input type="text" class="span2 valid-required" name="price" placeholder="Стоимость" <?=TOOLTIP_FIELD_BLANK;?> value="">
			</div>
			<div class="control-group">
				<input type="text" class="span4 valid-required" name="status" placeholder="Статус" <?=TOOLTIP_FIELD_BLANK;?> value="">
			</div>
			<div class="clear"></div>
			<div class="control-group">
				<textarea rows="3" class="span6" placeholder="Описание" name="note"></textarea>
			</div>
			<div class="div-form-operation">
				<button type="submit" id="btn-submit-rent" value="" name="submit" class="btn btn-primary btn-medium">Добавить помещение</button>
			</div>
			<div class="wait-request hidden"><img src="<?=site_url('img/loading.gif');?>" alt="" /></div>
		<?= form_close(); ?>
	</div>
</div>