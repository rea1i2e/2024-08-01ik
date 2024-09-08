<?php

function isUnauthorizedAccessToMail() {
  $mailErrorCount = 0;
  if(!isset($_POST['applicant_name'], $_POST['furigana'], $_POST['email_address'], $_POST['corporate_name'], $_POST['consideration'])) {
    $mailErrorCount++;
  }
  if($mailErrorCount === 0) {
    if(isEmpty($_POST['applicant_name'])) {
      $mailErrorCount++;
    }
    if(isEmpty($_POST['furigana'])) {
      $mailErrorCount++;
    }
    if(isEmpty($_POST['email_address'])) {
      $mailErrorCount++;
    }
    if(isEmpty($_POST['corporate_name'])) {
      $mailErrorCount++;
    }
    if(isEmpty($_POST['consideration'])) {
      $mailErrorCount++;
    }
  }
  return $mailErrorCount < 1 ? false : true;
}

function isUnauthorizedAccessToThanksPage() {
  session_start();
  $result = !isset($_SESSION['orderId']);
  session_unset();
  session_destroy();
  return $result;
}

function isEmpty($targetValue) {
  return $targetValue === '' ? true : false;
}