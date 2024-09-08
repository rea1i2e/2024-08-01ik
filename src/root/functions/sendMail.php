<?php

function sendMail($mailContent) {
  // 言語と文字エンコーディングを正しくセット
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  // 宛先情報をエンコード
  $to_name = $mailContent['toName'];
  $to_addr = $mailContent['to'];
  $to_name_enc = mb_encode_mimeheader($to_name, "ISO-2022-JP");
  $to = "$to_name_enc<$to_addr>";
  // 送信元情報をエンコード
  $from_name = $mailContent['fromName'];
  $from_addr = $mailContent['from'];
  $from_name_enc = mb_encode_mimeheader($from_name, "ISO-2022-JP");
  $from = "$from_name_enc<$from_addr>";
  // メールヘッダを作成
  $header = "From: $from\n";
  $header .= "Reply-To: $from";
  // 件名や本文をセット(ここは自動的にエンコードされる)
  $subject = $mailContent['subject'];
  $body = $mailContent['body'];
  // 日本語メールの送信
  mb_send_mail($to, $subject, $body, $header);
}