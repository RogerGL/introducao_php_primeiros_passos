<?php
    $age = 21;
    $accompanied = 1;

    echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;
if($age>=18){
       echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($age >= 16 && $accompanied > 1) {
    echo "Você tem $age anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $age anos. Você não pode entrar";
}