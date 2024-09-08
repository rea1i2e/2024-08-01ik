<?php

function createOrderId($telephoneNumber) {
  if(preg_match('/^\d+(\d{4})$/s', $telephoneNumber, $match)){
		$tel4digit = $match[1];
	}
  return date('YmdHis').$tel4digit;
}