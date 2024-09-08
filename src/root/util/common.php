<?php
//UTF8で出力するよう明示的に書き換え
header("Content-Type:text/html;charset=UTF-8");

//ユーザエージェントによって、PCかSPの切り分け
require_once 'ua.php';