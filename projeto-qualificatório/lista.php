<?php
    
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

    $sql = "SELECT nome, valor FROM produtos ORDER BY valor ASC";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nome</th><th>Valor</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["nome"]."</td><td>R$ ".$row["valor"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum produto encontrado.";
    }
    
    $conn->close();
?>