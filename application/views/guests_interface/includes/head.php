<?php require_once(PATH_PAGE_VARIABLE);
if($this->uri->uri_string() == ''):
	$uri = 'home';
else:
	$uri = to_underscore($this->uri->uri_string());
endif;?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?=(isset($head_variable[$uri]['title']))?$head_variable[$uri]['title']:'Личный кабинет';?></title>
<meta name="description" content="<?=(isset($head_variable[$uri]['description']))?$head_variable[$uri]['description']:'';?>" />
<meta name="author" content="<?=(isset($head_variable[$uri]['author']))?$head_variable[$uri]['author']:'';?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="google-site-verification" content="y0ts8VFSpYzeWpCqbBDAvu-a738y0kK980tRV8QgLCk" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=site_url('css/bootstrap.css');?>" />
<link rel="stylesheet" type="text/css" href="<?=site_url('css/style.css');?>" />