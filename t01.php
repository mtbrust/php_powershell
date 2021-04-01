<?php

/**
 * INCLUI NO HTTPD.CONF
 * BRUST
 ** LoadModule authnz_sspi_module modules/mod_authnz_sspi.so
 */







header('Content-Type: text/html; charset=utf-8');

if($_POST){
  $user = $_POST['user'];
  $msg = $_POST['msg'];
  $r = shell_exec("MSG $user /V /W $msg");
  //print_r($r);
  if(!$r)
    echo '<h4>Erro no envio. Verifique os caracteres</h4>';
    else
    echo '<h4>Usuário respondeu.</h4>';
}

$output = '';
// $output = shell_exec('ipconfig'); //OK
// $output = shell_exec('MSG /SERVER:127.0.0.1 /TIME:05 * HELLO WORLD'); //OK
// $output = shell_exec('MSG /SERVER:DESV-01 * Mensagem corrida! chão é'); //OK
// $output = shell_exec('MSG brust * Mensagem corrida! chão é'); //OK
// $output = shell_exec('time'); //OK
// $output = shell_exec('msg /server192168.1.3 desv-01 "ola"'); // ERRO
// $output = shell_exec('echo %username%'); // ok
echo "<pre>$output</pre>";
// echo Shell_Exec ('powershell.exe -executionpolicy bypass -NoProfile -Command "Get-Process | ConvertTo-Html"'); // Demora um pouco.





error_reporting(-1);
ini_set('display_errors', '1');
ini_set('default_charset', 'utf-8');
date_default_timezone_set('America/Sao_Paulo');

ini_set('html_errors', '1');

//var_dump($_SERVER);

echo '<hr>';
echo 'Comandos:<br>';
echo "shell_exec('MSG brust * Mensagem corrida! chão é')<br>";
echo "shell_exec('MSG /SERVER:127.0.0.1 /TIME:05 * HELLO WORLD')<br>";
echo "shell_exec('MSG /SERVER:DESV-01 * Mensagem corrida! chão é')<br>";
echo "/V Exibe mensagem.<br>";
echo "/W Aguarda retorno.<br>";
echo "<br>";

echo '<hr>';
echo 'REMOTE_USER:<br>';
printf($_SERVER['REMOTE_USER']);

echo '<hr>';
echo 'PHP_AUTH_USER:<br>';
echo $_SERVER['PHP_AUTH_USER'];

// Obtem usuário atual.
$user_name = shell_exec('echo %username%');

?>
<hr>
<h5>Formulário de envio de mensagem.</h5>
<form action="" method="POST">
<span>Usuário</span><br>
<input name="user" type="text" placeholder="user" value="<?php echo $user_name; ?>">
<br><br>
<span>Mensagem</span><br>
<textarea name="msg" id="" cols="30" rows="10"></textarea>
<br><br>
<button type="submit">Enviar</button>
<p>Aguarde a resposta do usuário.</p>
</form>
