<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $disponivel = $_POST['disponivel'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projeto-qual";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO produtos (nome, descricao, valor, disponivel) VALUES ('$nome', '$descricao', '$valor', '$disponivel')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Produto cadastrado com sucesso!</p>";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }

    $conn->close();
}
?>
