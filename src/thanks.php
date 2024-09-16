<?php
date_default_timezone_set('Asia/Tokyo');

//パスの定義
define('TEMPLATE_DIR',dirname(__FILE__).'/template');
define('CONFIG_DIR',dirname(__FILE__).'/config');
define('UTIL_DIR',dirname(__FILE__).'/util');
define('FUNCTIONS_DIR', dirname(__FILE__) . '/functions');

require_once UTIL_DIR.'/common.php';
require_once FUNCTIONS_DIR . '/validation.php';

if (isUnauthorizedAccessToThanksPage()) {
  header('Location:index.php');
}

include(TEMPLATE_DIR.'/_header.php');
?>
<div class="u-bg2"></div>
<?php
include(TEMPLATE_DIR.'/_thanks-content.php');
include(TEMPLATE_DIR.'/_footer.php');