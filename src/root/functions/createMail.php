<?php

function setPostDataSendMail($mailConfig, $telephoneNumber, $orderId) {
  $mailConfig['from'] = str_replace('[email_address]', $_POST['email_address'], $mailConfig['from']);
  $mailConfig['fromName'] = str_replace('[applicant_name]', $_POST['applicant_name'], $mailConfig['fromName']);
  $mailConfig['body'] = str_replace('[send_time]', date('Y年m月d日 H時i分', time()), $mailConfig['body']);
  $mailConfig['body'] = str_replace('[order_id]', $orderId, $mailConfig['body']);
  $mailConfig['body'] = str_replace('[corporate_name]', $_POST['corporate_name'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[consideration]', $_POST['consideration'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[applicant_name]', $_POST['applicant_name'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[furigana]', $_POST['furigana'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[telephone_number]', $telephoneNumber, $mailConfig['body']);
  $mailConfig['body'] = str_replace('[email_address]', $_POST['email_address'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[message]', $_POST['message'], $mailConfig['body']);
  //utm
  $mailConfig['body'] = str_replace('[utm_source]', $_POST['utm_source'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[utm_medium]', $_POST['utm_medium'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[utm_term]', $_POST['utm_term'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[utm_content]', $_POST['utm_content'], $mailConfig['body']);
  $mailConfig['body'] = str_replace('[utm_campaign]', $_POST['utm_campaign'], $mailConfig['body']);

  return $mailConfig;
}

function setPostDataRemail($remailConfig) {
  $remailConfig['to'] = str_replace('[email_address]', $_POST['email_address'], $remailConfig['to']);
  $remailConfig['toName'] = str_replace('[applicant_name]', $_POST['applicant_name'], $remailConfig['toName']);
  $remailConfig['body'] = str_replace('[furigana]', $_POST['furigana'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[telephone_number]', $_POST['telephone_number'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[corporate_name]', $_POST['corporate_name'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[email_address]', $_POST['email_address'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[consideration]', $_POST['consideration'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[message]', $_POST['message'], $remailConfig['body']);
  $remailConfig['body'] = str_replace('[applicant_name]', $_POST['applicant_name'], $remailConfig['body']);
  return $remailConfig;
}