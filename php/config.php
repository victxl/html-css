<?php
$dbHost ='Localhost';
$dbUsername = 'root';
$dbPassword = 'acegvzKO98IJK';
$dbName = 'form_cadastro';

$conexao = new mysqli(dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo"erro";
}
else{
    echo"conexão efetuado com suceço"
}
?>