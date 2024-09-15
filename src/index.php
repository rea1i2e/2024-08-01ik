<?php
date_default_timezone_set('Asia/Tokyo');

//パスの定義
define('TEMPLATE_DIR', dirname(__FILE__) . '/template');
define('CONFIG_DIR', dirname(__FILE__) . '/config');
define('UTIL_DIR', dirname(__FILE__) . '/util');
require_once UTIL_DIR . '/common.php';
?>

<?php include(TEMPLATE_DIR . '/_header.php'); ?>
<main>
  <?php include(TEMPLATE_DIR . '/_mv.php'); ?>
  <div class="u-bg1">
    <?php include(TEMPLATE_DIR . '/_problems.php'); ?>
    <?php include(TEMPLATE_DIR . '/_service.php'); ?>
  </div>
    <?php include(TEMPLATE_DIR . '/_feature.php'); ?>
    <?php include(TEMPLATE_DIR . '/_flow.php'); ?>
    <?php include(TEMPLATE_DIR . '/_faq.php'); ?>
  <?php include(TEMPLATE_DIR . '/_contact.php'); ?>
</main>




<?php include(TEMPLATE_DIR . '/_footer.php'); ?>