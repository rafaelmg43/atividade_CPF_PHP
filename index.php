<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php


$cpf = $_POST["valida"];
$cpf = preg_replace( '/[^0-9]/is', '', $cpf );
//print 'CPF Sem digito:' . "<br>" . $cpf;
$digitoA = 0;
$digitoB = 0;
        
for($i = 0, $x = 10; $i <= 8; $i++, $x--){
$digitoA +=  $cpf[$i] * $x;

} 

for($i = 0, $x = 11; $i <= 9; $i++, $x--){

    if(str_repeat($i, 11) == $cpf){
        return 'false';
    }
    $digitoB +=  $cpf[$i] * $x;
    
} 

$somaA = (($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11);
$somaB = (($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);
echo '<BR>' . 'O PRIMEIRO DIGITO É:' . $somaA;
echo '<BR>' . 'O SEGUNDO DIGITO É:' . $somaB;

if($somaA != $cpf[9] || $somaB != $cpf[10]){
    echo '<br>' . 'CPF INVALIDO:';
}else{
    echo '<br>' . 'CPF VALIDO:';
}

?>
<br><a href="index.html">VOLTAR</a>