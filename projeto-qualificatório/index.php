<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Qualifiatório</title>
</head>
<body>
    <h1>Cadastre um Produto: </h1>

    <form action="cadastro.php" method="post">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="descricao">Descrição do Produto:</label><br>
        <textarea name="descricao" id="descricao" rows="4" required></textarea>
        <br><br>

        <label for="valor">Valor do Produto:</label><br>
        <input type="number" name="valor" id="valor" required>
        <br><br>

        <label for="disponivel">Disponível para Venda:</label><br>
        <input type="radio" name="disponivel" id="disponivel" value="1" checked>
        <label for="sim">Sim</label>
        <input type="radio" name="disponivel" id="disponivel" value="0">
        <label for="nao">Não</label>
        <br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>
    <br>

    <form action="lista.php">
        <input type="submit" value="Ver Lista de Produtos">
    </form>
</body>
</html>
