<?php 
require "vendor/autoload.php";

use App\classeregex\ClasseRegex;

$regex = new ClasseRegex();

echo("EXPRESSÕES REGULARES PHP - 04/04/2025");
echo "<br><br>";

$regex->regexData("05/09/1977");
echo "<br>";
$regex->regexHora("04:44");
echo "<br>";
$regex->regexCpf("956.654.987-12");
echo "<br>";
$regex->regexIp("192.168.0.1");
echo "<br>";
$regex->regexEmail("carlos@gmail.com");
echo "<br>";
$regex->regexNumeros("carlos@gmail.com");
echo "<br>";
$regex->regexNomeCaracteresAcento("josé Carlos");
echo "<br>";




