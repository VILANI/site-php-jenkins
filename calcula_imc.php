<?php

echo "Aqui esta o seu índice de massa corpória!</p>";

$imc = 0;
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$idade = $_POST['idade'];
$altura2= $altura*$altura;

$imc=$peso/$altura2;

echo $imc."</p>";


if($idade < 21)
{
	if($imc < 10)
	{
		echo "ABAIXO DO PESO";
	}
	elseif($imc < 85)
	{
		echo "PESO NORMAL";
	}
	elseif($imc < 95)
	{
		echo "SOBREPESO";
	}
	elseif($imc > 95)
	{
		echo "OBESIDADE";
	}
}

else 
{
	if ($imc < 17)
	{
		echo "MUITO ABAIXO DO PESO";
	}
	elseif($imc < 18.50)
	{
		echo "ABAIXO DO PESO";
	}
	elseif($imc < 25)
	{
		echo "PESO NORMAL";
	}

	elseif($imc < 30)
	{
		echo "ACIMA DO PESO";
	}
	
	elseif($imc < 35)
	{
		echo "OBESIDADE I";
	}
	
	elseif($imc < 40)
	{
		echo "OBESIDADE II (SEVERA)";
	}	
	elseif ($imc>40)
	{
		echo "OBESIDADE III (MORBIDA)";
	}
}

?>