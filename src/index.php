<?php
date_default_timezone_set('Asia/Tokyo');

//パスの定義
define('TEMPLATE_DIR',dirname(__FILE__).'/template');
define('CONFIG_DIR',dirname(__FILE__).'/config');
define('UTIL_DIR',dirname(__FILE__).'/util');
require_once UTIL_DIR.'/common.php';
?>

<?php include(TEMPLATE_DIR.'/_header.php'); ?>
<main>
  <?php include(TEMPLATE_DIR.'/_mv.php'); ?>
  <?php include(TEMPLATE_DIR.'/_contact.php'); ?>
</main>
<?php include(TEMPLATE_DIR.'/_footer.php'); ?>