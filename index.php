<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php

$cpf = $_POST["des"];
$cpf = preg_replace( '/[^0-9]/is', '', $cpf );
$A = 0;

for($i = 0, $x = 10; $i <= 8; $i++, $x--){ /*$i indice que inicia de 0~8*(0~8=1~9)$x inica em 10~2*/
/*echo $cpf[$i]. " x " . $x. " = " . $cpf[$i] * $x;*/

$A += $cpf[$i] * $x; /* + operador matematico que soma todos os numeros*/ 
/*echo '<br>';*/ 
}

$somaA = (($A%11) < 2 ) ? 0 : 11-($A%11); /*calculo do modulo*/
echo "O VALOR DO PRIMEIRO DIGITO SERA: " . $somaA;


?>
<br><a href="index.html">VOLTAR</a>