<?php

$conta = [ 'titular' => 'Vinicius Dias',
    'saldo' => 100,];


do {
echo "BEM-VINDO AO BANCO \n";
echo "Aqui suas opções\n";
echo "1-sacar\n";
echo "2-depositar\n";
echo "3-visualizar saldo\n";
echo "4-sair\n";

$opcao =(int) fgets(STDIN);

 switch ($opcao) {
    case 1:
        echo "Quanto deseja sacar: ";
        $saque = fgets(STDIN);
        $conta['saldo'] -= $saque;
        break; 
        case 2:
             echo "Quanto deseja depositar: ";
        $deposito = fgets(STDIN);
        $conta['saldo'] += $deposito;
        break; 

        case 3:
            echo 'Seu saldo é de  ' . $conta['saldo'] . "\n";
            break;

        default:
            echo 'inválido';
        };

} while ($opcao != 4);

echo 'Adeus';