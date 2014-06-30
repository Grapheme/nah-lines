<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb');
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b');
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');
define('PATH_PAGE_VARIABLE',					getcwd().'/variables/page_variables.php');
define('PATH_SMILEYS',							getcwd().'/img/smileys');

define('TOOLTIP_FIELD_BLANK',					'data-trigger="focus" data-placement="right" role="tooltip" data-original-title="Поле не заполнено"');
define('TOOLTIP_FIELD_IMAGE_UPLOAD',			'data-trigger="hover" data-placement="top" role="tooltip" data-original-title="Нажмите для загрузки фотографии"');
define('TOOLTIP_BUTTON_EDIT',					'data-trigger="hover" data-placement="bottom" role="tooltip" data-original-title="Редактировать"');
define('TOOLTIP_BUTTON_DELETE',					'data-trigger="hover" data-placement="bottom" role="tooltip" data-original-title="Удалить"');

define('ADMIN_START_PAGE',						'admin/rent');