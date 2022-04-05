<?php
       
 
    include 'gera_conexao.inc'; //inclui a conexão
   
    $my_Insert_Statement = $conexao -> prepare('INSERT INTO usuario VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
 
    $my_Insert_Statement -> bind_param('sssississsssssi', $nome, $sobrenome, $data, $cpf, $email, $telefone, $cep, $endereco, $numero, $complemento, $bairro, $cidade,  $senha, $sexo, $newsletter  ) ;
 
    /*cria aqui um select para saber qual é o valor do codigo na tabela de controle.
      Com o valor você soma 1 para fazer o insert e o update. */
 
   
   
    $nome       = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $time   = strtotime($_POST["data"]);
    $data = date('Y-m-d',$time);
    $cpf   = (int)$_POST["cpf"];
    $email   = $_POST["email"];
    $telefone   = $_POST["telefone"];
    $cep   = (int)$_POST["cep"];
    $endereco   = $_POST["endereco"];
    $numero   = $_POST["numero"];
    $complemento   = $_POST["complemento"];
    $bairro   = $_POST["bairro"];
    $cidade   = $_POST["cidade"];
    $senha   = $_POST["senha"];
    $sexo   = $_POST["sexo"];
    $newsletter = $_POST["newsletter"];
    echo $newsletter."<br>";
    if ($newsletter == "on") {
      $newsletter = 1;
    }else{
      $newsletter = 0;
    }
    //$codigo  = $ultimo_codigo + 1;
 
    $sql = " SELECT cpf  as resp_cpf FROM usuario WHERE cpf = $cpf" ;
    echo $sql;
    $resultado = mysqli_query ($conexao,$sql);
    $registro = mysqli_fetch_array($resultado);
    $aux_cpf = $registro['resp_cpf'];
    echo $aux_cpf."<br>";
 
    if ($aux_cpf !=""){
      echo "passei aqui";
      exit();
   }
    $my_Insert_Statement -> execute();
 
    //$my_Update_Statement = $conexao -> prepare('UPDATE controle SET codigo = ? where tabela = ?');
   
    //$my_Update_Statement -> bind_param('is', $codigo, $tabela) ;
 
   // $codigo = $ultimo_codigo + 1;
    //$tabela = 'usuario';
 
   //$my_Update_Statement -> execute();
 
    $linhas = $my_Insert_Statement->affected_rows;
    echo "quantidade de alunos inseridos:".$linhas."<br>";
 
   
    mysqli_close($conexao);
   
?>
