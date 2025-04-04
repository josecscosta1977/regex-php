<?php

namespace App\classeregex;

class ClasseRegex {
    public function __construct() {
    }

    public function regexData($data) {
        $padrao = "/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/";
        if(preg_match($padrao, $data)){
            echo "Data válida: $data";
        }else{
            echo "ERRO!: Data inválida.";
        }
    }

    public function regexHora($hora) {
        $padrao = "/^(2[0-3]|[01]?[0-9]):([0-5]?[0-9])$/";
        if(preg_match($padrao, $hora)){
            echo "Hora válida: $hora";
        }else{
            echo "ERRO!: Hora inválida.";
        }
    }

    public function regexCpf($cpf) {
        $padrao = "/^\d{3}\.\d{3}\.\d{3}-\d{2}$/";
        if(preg_match($padrao, $cpf)){
            echo "Cpf válido: $cpf";
        }else{
            echo "ERRO!: Cpf inválido.";
        }
    }

    public function regexIp($ip) {
        $padrao = "/^(25[0-5]|2[0-4]\d|1\d{2}|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d{2}|[1-9]?\d)){3}$/";
        if(preg_match($padrao, $ip)){
            echo "Ip válido: $ip";
        }else{
            echo "ERRO!: Ip inválido.";
        }
    }

    public function regexEmail($email) {
        $padrao = "/^[\w\.\-]+@([\w\-]+\.)+[a-zA-Z]{2,}$/";
        if(preg_match($padrao, $email)){
            echo "Email válido: $email";
        }else{
            echo "ERRO!: Email inválido.";
        }
    }

    public function regexNumeros($numeros) {
        $padrao = "/^[\w\.\-]+@([\w\-]+\.)+[a-zA-Z]{2,}$/";
        if(preg_match($padrao, $numeros)){
            echo "Números válido: $numeros";
        }else{
            echo "ERRO!: Números inválido.";
        }
    }

    public function regexNomeCaracteresAcento($nome) {
        $padrao = "/^[A-Za-zÀ-ÖØ-öø-ÿ' -]+$/u";
        if(preg_match($padrao, $nome)){
            echo "Nome válido: $nome";
        }else{
            echo "ERRO!: Nome inválido.";
        }
    }
}

