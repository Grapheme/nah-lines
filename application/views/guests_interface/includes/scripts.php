<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script type="text/javascript" src="<?=site_url('js/vendor/jquery-1.9.1.min.js');?>"><\/script>')</script>
<script type="text/javascript">
<?php if(uri_string() == ''): ?>
	$("a[data-active='home']").addClass('no-clickable active');
<?php else:?>
	$("a[data-active='<?=$this->uri->segment(1);?>']").addClass('no-clickable active');
<?php endif;?>
</script>