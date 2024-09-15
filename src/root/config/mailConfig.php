<?php
/*
【使い方】
[]で囲われた部分が入力値や送信日時、受付番号に後の処理で置きかわりますので形式を維持し、配置してください。
その他は自由に修正できます。（宛先はじめ、メール中の文言や体裁など）

※注意
'fromName'=> のような部分を削除したり編集されますとプログラムが動かなくなりますので、ご注意ください。
=>`` のシングルクォーテーションで囲われた中身だけを変更してください。
[]で囲われた部分の形式や文言も変更しないでください。 例：[order_id]
*/

$mailConfig = array(
  'fromName'=>'ドーピング禁止物質分析事務局',
  'subject'=>'【ドーピング禁止物質分析】お問い合わせを受け付けました',
  'body'=>'
[send_time]に、
ドーピング禁止物質分析へのお問い合わせを受け付けました。

-------------------------------------------------

■ 受付番号
[order_id]

■ お名前
[applicant_name]

■ ふりがな
[furigana]

■ 会社名
[corporate_name]

■ 電話番号
[telephone_number]

■ メールアドレス
[email_address]

■ 検討内容
[consideration]

■ お問い合わせ内容
[message]

■ utm_source
[utm_source]

■ utm_medium
[utm_medium]

■ utm_term
[utm_term]

■ utm_content
[utm_content]

■ utm_campaign
[utm_campaign]


-------------------------------------------------
'
);

$remailConfig = array(
  'fromName'=>'ドーピング禁止物質分析事務局',
  'subject'=>'【ドーピング禁止物質分析】お問い合わせいただきましてありがとうございました。',
  'body'=>'
この度はドーピング禁止物質分析へお問い合わせいただきまして、誠にありがとうございました。以下の内容にて送信いたしました。

お名前：[applicant_name]
ふりがな：[furigana]
貴社名：[corporate_name]
電話番号：[telephone_number]
メールアドレス：[email_address]
検討内容：[consideration]
お問い合わせ内容：[message]


担当営業より3営業日以内に、ご連絡させていただきます。
よろしくお願いいたします。
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
合同会社イルホープ
Mail:info@ilhope.co.jp
Tel: 03-6892-4074
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

'
);


/*
sendgridではhtmlメールも送信するため、htmlのメールテンプレートも用意する必要があります。

【便利な使い方の紹介】
以下のサイトで上記のテキストメールをhtmlに変換してあげて、コピペすると楽です。

http://sei-street.sakura.ne.jp/page/doujin/site/doc/tool_text2html/index.html

*/

$htmlMailConfig = array(
  'fromName'=>'ドーピング禁止物質分析事務局',
  'subject'=>'【ドーピング禁止物質分析】お問い合わせを受け付けました',
  'body'=>'
[send_time]に、<br>
ドーピング禁止物質分析へのお問い合わせを受け付けました。<br>
<br>
-------------------------------------------------<br>
<br>
■ 受付番号<br>
[order_id]<br>
<br>
■ お名前<br>
[applicant_name]<br>
<br>
■ ふりがな<br>
[furigana]<br>
<br>
■ 会社名<br>
[corporate_name]<br>
<br>
■ 電話番号<br>
[telephone_number]<br>
<br>
■ メールアドレス<br>
[email_address]<br>
<br>
■ 検討内容<br>
[consideration]<br>
<br>
■ お問い合わせ内容<br>
[message]<br>
<br>
■ utm_source<br>
[utm_source]<br>
<br>
■ utm_medium<br>
[utm_medium]<br>
<br>
■ utm_term<br>
[utm_term]<br>
<br>
■ utm_content<br>
[utm_content]<br>
<br>
■ utm_campaign<br>
[utm_campaign]<br>
<br>
<br>
-------------------------------------------------
'
);


$htmlRemailConfig = array(
  'fromName'=>'ドーピング禁止物質分析事務局',
  'subject'=>'【ドーピング禁止物質分析】お問い合わせいただきましてありがとうございました。',
  'body'=>'
この度はドーピング禁止物質分析へお問い合わせいただきまして、誠にありがとうございました。以下の内容にて送信いたしました。<br>
<br>
お名前：[applicant_name]<br>
ふりがな：[furigana]<br>
貴社名：[corporate_name]<br>
電話番号：[telephone_number]<br>
メールアドレス：[email_address]<br>
検討内容：[consideration]<br>
お問い合わせ内容：[message]<br>
<br>
<br>
担当営業より3営業日以内に、ご連絡させていただきます。<br>
よろしくお願いいたします。<br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
合同会社イルホープ<br>
Mail:info@ilhope.co.jp<br>
Tel: 03-6892-4074<br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>

'
);