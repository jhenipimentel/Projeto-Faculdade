<?php
include 'gera_conexao.inc';

$p_nome = $_GET["nome"];
$qtdde_linhas = 0;

if ($p_nome == ""){

    $sql = "SELECT * FROM usuario";
}
if ($p_nome != ""){
    $sqlcont = "SELECT COUNT(*) as qtdde_regs FROM usuario WHERE nome='$p_nome'";
    $result_qtdde = mysqli_query($conexao, $sqlcont) or die("que sacooooooo aaaaaaa  >:( pq nao ta conectandooooo");
    $registro_qtdde = mysqli_fetch_array($result_qtdde);
    $qtdde_linhas = $registro_qtdde["qtdde_regs"];
    $sql = "SELECT * FROM usuario where nome = '$p_nome'";
}

//$sql = "SELECT * FROM usuario";

$resultado = mysqli_query($conexao, $sql) or die("que sacooooooo aaaaaaaaaaaa  >:( pq nao ta conectandooooo");
 

$registro = mysqli_fetch_array($resultado);
$nome = $registro["nome"];
$sobrenome = $registro["sobrenome"];
$data_nascimento = $registro["data_nascimento"];
$cpf = $registro["cpf"];
$email = $registro["email"];
$telefone = $registro["telefone"];
$cep = $registro["cep"];
$endereco = $registro["endereco"];
$numero = $registro["numero"];
$complemento = $registro["complemento"];
$bairro = $registro["bairro"];
$cidade = $registro["cidade"];
$senha = $registro["senha"];
$sexo = $registro["sexo"];
$newsletter = $registro["newsletter"];


echo "<style>table.minimalistBlack {
    border: 3px solid #000000;
    width: 100%;
    text-align: left;
    border-collapse: collapse;
  }
  table.minimalistBlack td, table.minimalistBlack th {
    border: 1px solid #000000;
    padding: 5px 4px;
  }
  table.minimalistBlack tbody td {
    font-size: 13px;
  }
  table.minimalistBlack thead {
    background: #CFCFCF;
    background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
    background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
    background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
    border-bottom: 3px solid #000000;
  }
  table.minimalistBlack thead th {
    font-size: 15px;
    font-weight: bold;
    color: #000000;
    text-align: left;
  }
  table.minimalistBlack tfoot {
    font-size: 14px;
    font-weight: bold;
    color: #000000;
    border-top: 3px solid #000000;
  }
  table.minimalistBlack tfoot td {
    font-size: 14px;
  }</style>";
  
  
  echo"<table class='minimalistBlack'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Nome</th>";
  echo "<th>Sobrenome</th>";
  echo "<th>Data de nascimento</th>";
  echo "<th>CPF</th>";
  echo "<th>Email</th>"; 
  echo "<th>Telefone</th>";
  echo "<th>CEP</th>";
  echo "<th>Endereço</th>";
  echo "<th>Número</th>";
  echo "<th>Complemento</th>";
  echo "<th>Bairro</th>";
  echo "<th>Cidade</th>";
  echo "<th>Senha</th>";
  echo "<th>Sexo</th>";
  echo "<th>Newsletter</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tfoot>";
  echo "</tfoot>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td>" . $nome . "</td>";
  echo "<td>" . $sobrenome . "</td>";
  echo "<td>" . $data_nascimento . "</td>";
  echo "<td>" . $cpf . "</td>";
  echo "<td>" . $email . "</td>";
  echo "<td>" . $telefone . "</td>";  
  echo "<td>" . $cep . "</td>";
  echo "<td>" . $endereco . "</td>";
  echo "<td>" . $numero . "</td>";
  echo "<td>" . $complemento . "</td>";
  echo "<td>" . $bairro . "</td>";
  echo "<td>" . $cidade . "</td>";
  echo "<td>" . $senha . "</td>";
  echo "<td>" . $sexo . "</td>";
  echo "<td>" . $newsletter . "</td>";
  echo "</tr>";
  echo "</tbody>";


 if ($p_nome == "" or $qtdde_linhas > 1) {
    while ($registro = mysqli_fetch_array($resultado)) { 
        echo "<td>".$registro["nome"]."</td>";
        echo "<td>".$registro["sobrenome"]."</td>";
        echo "<td>".$registro["data_nascimento"]."</td>";
        echo "<td>".$registro["cpf"]."</td>";
        echo "<td>".$registro["email"]."</td>";
        echo "<td>".$registro["telefone"]."</td>";
        echo "<td>".$registro["cep"]."</td>";
        echo "<td>".$registro["endereco"]."</td>";
        echo "<td>".$registro["numero"]."</td>";
        echo "<td>".$registro["complemento"]."</td>";
        echo "<td>".$registro["bairro"]."</td>";
        echo "<td>".$registro["cidade"]."</td>";
        echo "<td>".$registro["senha"]."</td>";
        echo "<td>".$registro["sexo"]."</td>";
        echo "<td>".$registro["newsletter"]."</td>";
        echo "</tr>";
 
    }
}
  
echo "</table>";
 
 /*while ($registro = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>".$registro["nome"]."</td>";
        echo "<td>".$registro["sobrenome"]."</td>";
        echo "<td>".$registro["data_nascimento"]."</td>";
        echo "</tr>";
 }*/
 

 
mysqli_close($conexao);
 
 
?>
 
<html>
 
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="consulta.css" />
</head>
 
<body>

    <br><br>
    <center>
    <a href="http://localhost/projeto/consulta.html" class="botao"> Realizar outra consulta  </a>
    <br>
    <br>
    <br>
    <br>
    <a href="http://localhost/projeto/menu2.html" class="botao"> Voltar ao menu </a>
</center>  
         
            