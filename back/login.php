<?php

require 'conexao.php';



$usuario = $_POST ['matricula'];
$senha = $_POST ['senha'];



$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'  ");

if(mysqli_num_rows($sql) <= 0){
    echo "Login negado";
}else{
    echo "Login realizado com sucesso";
}

?>