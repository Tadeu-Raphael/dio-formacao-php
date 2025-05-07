<?php 

    require __DIR__ . '/../vendor/autoload.php';

    use Projeto\ContaBancaria;

    $conta = new ContaBancaria();
    var_dump($conta->banco);