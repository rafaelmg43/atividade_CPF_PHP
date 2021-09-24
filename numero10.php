<?php

$cpf = $_POST["pri"];
$cpf = preg_replace( '/[^0-9]/is', '', $cpf );
$B = 0;

for($i = 0, $x = 11; $i <= 9; $i++, $x--){
    $B += $cpf[$i] * $x;
}

$somaB = (($B%11) < 2 ) ? 0 : 11-($B%11);
echo "<BR>" . "O SEGUNDO DIGITO É:" . "<BR>" . $somaB;


?>
<br><a href="index.html">VOLTAR</a>