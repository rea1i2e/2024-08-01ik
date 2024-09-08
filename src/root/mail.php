<?php
date_default_timezone_set('Asia/Tokyo');

//パスの定義
define('CONFIG_DIR',dirname(__FILE__).'/config');
define('FUNCTIONS_DIR',dirname(__FILE__).'/functions');
define('API_DIR',dirname(__FILE__).'/api');

require_once CONFIG_DIR . '/mailConfig.php';
require_once FUNCTIONS_DIR . '/convert.php';
require_once FUNCTIONS_DIR . '/createOrderId.php';
require_once FUNCTIONS_DIR . '/createMail.php';
require_once FUNCTIONS_DIR . '/sendMail.php';
require_once FUNCTIONS_DIR . '/validation.php';
require_once API_DIR . '/sendgrid/index.php';

if (isUnauthorizedAccessToMail()) {
    header('Location:index.php');
} else {
    //UTM_系パラメータ
    $utm_source = isset($_REQUEST['utm_source']) ? $_REQUEST['utm_source'] : '';
    $utm_medium = isset($_REQUEST['utm_medium']) ? $_REQUEST['utm_medium'] : '';
    $utm_term = isset($_REQUEST['utm_term']) ? $_REQUEST['utm_term'] : '';
    $utm_content = isset($_REQUEST['utm_content']) ? $_REQUEST['utm_content'] : '';
    $utm_campaign = isset($_REQUEST['utm_campaign']) ? $_REQUEST['utm_campaign'] : '';

    //order_idを生成
    $telephoneNumber = convertTelephoneNumber($_POST['telephone_number']);
    $orderId = createOrderId($telephoneNumber);

    session_start();
    $_SESSION['orderId'] = $orderId;

    //申込者からのメールコンテンツを入力内容に合わせて編集
    $mailConfig = setPostDataSendMail($mailConfig, $telephoneNumber, $orderId);
    $htmlMailConfig = setPostDataSendMail($htmlMailConfig, $telephoneNumber, $orderId);
    //申込者からのメール送信
    $apiResponse = sendEmailBySendgrid($mailConfig, $htmlMailConfig, false);

    if($apiResponse->statusCode() === 200 || $apiResponse->statusCode() === 202) {
      if ($_POST['email_address'] != '') {
          //申込者へのメールコンテンツを入力内容に合わせて編集
          $remailConfig = setPostDataRemail($remailConfig);
          $htmlRemailConfig = setPostDataRemail($htmlRemailConfig);
          //申込者へのメール送信
          $apiResponse = sendEmailBySendgrid($remailConfig, $htmlRemailConfig, true);
      }

      //サンクスページへ遷移
      $thanksParam = sprintf('orderId=%s&utm_source=%s&utm_medium=%s&utm_term=%s&utm_content=%s&utm_campaign=%s', $orderId, $utm_source, $utm_medium, $utm_term, $utm_content, $utm_campaign);
      $thanksPage = 'thanks.php?' . $thanksParam;
      header('Location:' . $thanksPage);
    }else {
      header('Location:error.php');
    }
}