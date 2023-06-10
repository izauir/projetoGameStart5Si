<?php
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$dbname = "jogos"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta na tabela usuarios
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi executada com sucesso
if ($result === false) {
  die("Erro na consulta: " . mysqli_error($conn));
}

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
  // Exibe os dados de cada linha
  while ($row = mysqli_fetch_assoc($result)) {
      echo "ID: " . $row["id"] . "<br>";
      echo "Nome: " . $row["nome"] . "<br>";
      echo "Email: " . $row["email"] . "<br>";
      // ... exibir outras colunas da tabela
      echo "<br>";
  }
} else {
  echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      padding: 0;
      margin: 0;
      font-family: arial;
    }
  </style>
  <title>Document</title>
</head>
<body>
  
</body>
</html>