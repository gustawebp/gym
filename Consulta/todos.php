<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym System </title>
    

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

    body{
    font-family: 'Open Sans', sans-serif;
    background-color: #4C5958; ;
    color: white;
    
} 


h1{
    text-align: center;
}

.encontrado{
    text-align: center;
    border: 1px solid white;
    width: 90%;
    padding: 5px 10px;
    margin: auto;
}
.back{

border: 1px solid white;
color: black;
font-size: 16pt;
border-radius: 10px;
margin: 0 auto;
padding: 5px;
text-align: center;
}

td{

    border: 1px solid white;
    padding: 5px;
    text-align:center;
    
}

th{
    color: WHITE;
}
table{
    text-align: center;
    margin: 0 auto;
padding: 5px 10px;
    
}

</style>
<body>

<h1>Todos os Alunos Cadastrados</h1>
<button onclick="voltar()" class="back">Voltar</button>
<br>  <br> <br>
<div class="encontrado">

<?php
    include_once('config.php');

    $query = "SELECT id,nome,data_nasc,cpf,sexo,telefone,endereco,altura,peso,nivel FROM usuarios";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo '<table>';
        echo '<thead>';
        echo '<tr><th>ID Matrícula</th><th>Nome</th><th>Data de nascimento</th><th>CPF</th><th>Sexo</th><th>Telefone</th><th>Endereço</th>';
        echo '</thead>';
        echo '<tbody>';

        while ($linha = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $linha['id'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['data_nasc'] . '</td>';
            echo '<td>' . $linha['cpf'] . '</td>';
            echo '<td>' . $linha['sexo'] . '</td>';
            echo '<td>' . $linha['telefone'] . '</td>';
            echo '<td>' . $linha['altura'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'Erro na consulta SQL: ' . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>







<script>function voltar() {
    location.href = '/gym/consulta/index.html';

        }</script>
</div>

    
</body>
</html>