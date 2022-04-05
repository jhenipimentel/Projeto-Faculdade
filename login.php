<?php
    include 'gera_conexao.inc';
   
   

    $senha = $_POST["senha"];
    $usuario = $_POST["usuario"];
    $sql = "SELECT 'usuario', 'senha' as resp_up FROM login WHERE senha = '$senha' AND usuario= '$usuario'" ;
    $resultado = mysqli_query ($conexao,$sql);
    $registro = mysqli_fetch_array($resultado);
    $aux_up = $registro['resp_up'];
    if ($aux_up !=""){
      header("Location: menu2.html");
    }else{
      header("Location: index.html");
    }
 
    mysqli_close($conexao);
    
?>