<?php

require_once __DIR__ . '/systemUser/SystemUserProxy.php';

$user = new SystemUserProxy('Michel', 'michelcssoliveira');
var_export('Isso vai levar 2 segundos');
var_export($user->getAddresses());

echo PHP_EOL;
var_export('Isso vai se repetir');
echo PHP_EOL;
for ($i=0; $i < 4; $i++) { 
  var_export($user->getAddresses());
}

