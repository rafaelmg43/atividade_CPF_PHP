<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php

$cpf = $_POST["val"];
$cpf = preg_replace( '/[^0-9]/is', '', $cpf );
$digitoA = 0;
$digitoB = 0;
        
for($i = 0, $x = 10; $i <= 8; $i++, $x--){
$digitoA +=  $cpf[$i] * $x;

} 

for($i = 0, $x = 11; $i <= 9; $i++, $x--){

    if(str_repeat($i, 11) == $cpf){//str_repeat e para nao houve numeros repetidos e o valor der verdadeiro...
        return 'false';
    }
    $digitoB +=  $cpf[$i] * $x;//$digitoB recebendo $digitoB + o valor da equação
    
} 
//o valor do digitoA recebe o resto da divisão por 11 se for menor que 2 ele imprime 0. 
$somaA = (($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11); //? operador ternario operadores logicos se o valor for menor que 2 ele transforma em 0 se diferente subitrai 11
$somaB = (($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);
//echo '<BR>' . 'O PRIMEIRO DIGITO É:' . $somaA;
//echo '<BR>' . 'O SEGUNDO DIGITO É:' . $somaB;

if($somaA != $cpf[9] || $somaB != $cpf[10]){
    echo '<br>' . 'CPF INVALIDO:';
}else{
    echo '<br>' . 'PARABENS SEU CPF É VALIDO:';
}

?>
<br><a href="index.html">VOLTAR</a>