<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
$isPC = true;
$isIE11 = false;
//タブレットはSPとする
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
  $isPC = false;
}

//IE11を含むIE判定
if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) {
  $isIE11 = true;
}