<?php
date_default_timezone_set('Asia/Tokyo');

//パスの定義
define('TEMPLATE_DIR',dirname(__FILE__).'/template');
define('CONFIG_DIR',dirname(__FILE__).'/config');
define('UTIL_DIR',dirname(__FILE__).'/util');

require_once UTIL_DIR.'/common.php';

$bodyOption = 'ontouchstart=""';
if ($isPC) {
  $bodyOption = '';
}

include(TEMPLATE_DIR.'/_header.php');
include(TEMPLATE_DIR.'/_error-content.php');
include(TEMPLATE_DIR.'/_footer.php');