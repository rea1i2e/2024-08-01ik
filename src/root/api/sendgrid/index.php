<?php
require (dirname(__FILE__).'/../../vendor/autoload.php');

function sendEmailBySendgrid($mailConfig, $htmlMailConfig, $isReply) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
  $dotenv->load();

  $postData = $_POST;

  $api_key = $_ENV["API_KEY"];
  $from = $_ENV["FROM"];
  $tos = $isReply == "true" ? $postData["email_address"] : explode(",", $_ENV["TOS"]);
  $replyTo = $isReply == "true" ? explode(",", $_ENV["USER_REPLY_TO"]) : $postData["email_address"];

  $sendgrid = new \SendGrid($api_key, array("turn_off_ssl_verification" => true));
  $email = new \SendGrid\Mail\Mail();

  if ($isReply == "true") {
    $email->addTo($postData["email_address"]);
    $email->setFrom($from, $mailConfig['fromName']);
    $email->setSubject($mailConfig['subject']);
    $email->addContent("text/plain", $mailConfig['body']);
    $email->addContent("text/html", $htmlMailConfig['body']);
    $email->addCategory("signup_dl_reply");
    $email->addHeader("X-Sent-Using", "SendGrid-API");

    if (is_array($replyTo)) {
      foreach ($replyTo as $replyToAddress) {
        $email->setReplyTo($replyToAddress);
      }

    } else {
      $email->setReplyTo($replyTo);
    }

  }else {
    $email->setFrom($from, $mailConfig['fromName']);
    $email->setSubject($mailConfig['subject']);
    $email->addContent("text/plain", $mailConfig['body']);
    $email->addContent("text/html", $htmlMailConfig['body']);
    $email->addCategory("signup_dl");
    $email->addHeader("X-Sent-Using", "SendGrid-API");

    if (is_array($replyTo)) {
      foreach ($replyTo as $replyToAddress) {
        $email->setReplyTo($replyToAddress);
      }

    } else {
      $email->setReplyTo($replyTo);
    }

    if (is_array($tos)) {
      foreach ($tos as $toAddress) {
        $email->addTo($toAddress);
      }

    } else {
      $email->addTo($tos);
    }
  }

  $response = $sendgrid->send($email);
  return $response;
}