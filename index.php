<?php 
require "vendor/autoload.php";

use App\classeregex\ClasseRegex;

$regex = new ClasseRegex();






echo("EXPRESSÕES REGULARES PHP - 03/04/22");
echo "<br><br>";

$nome = "02/06/2022";
$padrao = "/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{2,4}$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Data: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "01:53";
$padrao = "/^[0-9]{2}:[0-9]{2}$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Hora: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "95039415611";
$padrao = "/^[0-9]{11}$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Cpf: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "192.168.1.100";
$padrao = "/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! IP: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "25,65";
$padrao = "/^[0-9]{1,3}[.,][0-9]{2}$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Valores com ponto ou vírgula: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "carlos@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|com.br|org|net|net.br)$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Email: ";
    echo $nome;
}else{
    echo "ERRO!";
}

echo "<br>";

$nome = "C@rlos";
$padrao = "/^[a-zA-Z]+$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Caracteres especiais: ";
    echo $nome;
}else{
    echo "ERRO! ";
    echo $nome;
}

echo "<br>";

$nome = "99";
$padrao = "/^[2-9][0-9]$/";

if(preg_match($padrao, $nome)){

    echo "VÁLIDO! Idade: ";
    echo $nome;
}else{
    echo "ERRO!";
}
//Continua...
?>
