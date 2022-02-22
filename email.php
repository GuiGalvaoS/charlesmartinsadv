<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);
$nome=$_POST["nome"];
$from=$_POST["email"];

$to = "charlesmartinsadv@gmail.com";

$subject = "Enviado através do Site";

$message=$_POST["mensagem"];

$headers = "De: ". $nome;

mail($to, $subject, $message, $headers);

echo "acho q foi né";

?>