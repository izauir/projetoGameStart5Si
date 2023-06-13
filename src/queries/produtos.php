<?php
require_once './config.php';

function getProdutos() {
  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
  // Verifica se ocorreu algum erro na conexão
  if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
  }

  // Consulta na tabela usuarios
  $sql = "SELECT * FROM produto";
  $result = mysqli_query($conn, $sql);

  // Verifica se a consulta foi executada com sucesso
  if ($result === false) {
    die("Erro na consulta: " . mysqli_error($conn));
  }
}


?>