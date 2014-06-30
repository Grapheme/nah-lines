<form action="<?=site_url('admin/sign-in');?>" method="POST" class="form-signin" id="form-sign-in">
	<h4 class="form-signin-heading text-center">Авторизация</h4>
	<input type="text" name="email" class="input-block-level valid-required valid-email" <?=TOOLTIP_FIELD_BLANK;?> placeholder="Email address">
	<input type="password" name="password" class="input-block-level valid-required" <?=TOOLTIP_FIELD_BLANK;?> placeholder="Password">
	<div class="text-center div-form-operation">
		<div class="text-error form-request"></div>
		<button class="btn input-block-level btn-primary" type="submit" value="send" name="submit-sign-in">Вход на сайт</button>
	</div>
	<div class="wait-request hidden"></div>
</form>