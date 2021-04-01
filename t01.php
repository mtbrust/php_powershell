<?php

/**
 * INCLUI NO HTTPD.CONF
 * BRUST
 ** LoadModule authnz_sspi_module modules/mod_authnz_sspi.so
 */







header('Content-Type: text/html; charset=utf-8');
$output = '';
// $output = shell_exec('ipconfig'); //OK
// $output = shell_exec('MSG /SERVER:127.0.0.1 /TIME:05 * HELLO WORLD'); //OK
// $output = shell_exec('MSG /SERVER:DESV-01 * Mensagem corrida! chão é'); //OK
// $output = shell_exec('time'); //OK
//$output = shell_exec('msg /server192168.1.3 desv-01 "ola"');
echo "<pre>$output</pre>";
// echo Shell_Exec ('powershell.exe -executionpolicy bypass -NoProfile -Command "Get-Process | ConvertTo-Html"'); // Demora um pouco.





error_reporting(-1);
ini_set('display_errors', '1');
ini_set('default_charset', 'utf-8');
date_default_timezone_set('America/Sao_Paulo');

ini_set('html_errors', '1');

var_dump($_SERVER);

echo '<hr>';

printf($_SERVER['REMOTE_USER'], $_SERVER['PHP_AUTH_USER']);