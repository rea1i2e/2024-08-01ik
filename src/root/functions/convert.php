<?php

function convertTelephoneNumber($tel) {
  return str_replace(array('-', 'ー', '−', '―', '‐'), '', $tel);
}