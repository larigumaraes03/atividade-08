<?php 

$codigo = $_POST['codigo'];
$cidade = $_POST['cidade'];
$peso = $_POST['peso'];
$destinatario = $_POST['destinatario'];

echo "Código: " . $codigo . "<br>";
echo "Destinatário: " . $destinatario . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Peso: " . $peso;

?>