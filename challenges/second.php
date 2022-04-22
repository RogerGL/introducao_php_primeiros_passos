<?php

//desafio de criar uma tabuada com qualquer numero
$number = 2;
echo "Essa é a tabuada do $number" . PHP_EOL;
for ($i=1; $i < 11 ; $i++) { 
   
   echo $number . ' x ' . $i . ' = ' . $number * $i . PHP_EOL;
}