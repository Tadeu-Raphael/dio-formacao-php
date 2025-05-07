<?php

    declare(strict_types=1);

    namespace Projeto;

    class ContaBancaria{

        public string $banco = "Itau";
        public string $nomeTitular = "Tadeu Raphael";
        public string $agencia = "1234";
        public string $numero = "123456";
        public float $saldo = 100.2; 

        public function exibirDadosBancarios(): array {
            return [
                'banco' => $this->banco,
                'nomeTitular' => $this->nomeTitular,
                'agencia' => $this->agencia,
                'numero' => $this->numero,
                'saldo' => $this->saldo
            ];
        }

    }