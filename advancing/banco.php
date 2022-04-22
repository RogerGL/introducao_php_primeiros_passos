<?php

require 'functions.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=M, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Contas Correntes
    </h2>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){?>
        <dt>
            <h4><?php echo $conta['titular'];?> - <?php echo $cpf;?></h4>
        </dt>
        <dd>
            Saldo: <?php echo $conta['saldo'] ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>




