<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição no Evento</title>
</head>
<body>
    
    <h2>Formulário de Inscrição</h2>

    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>

        Interesse em Participar:
        <select name="interesse" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $interesse = $_POST['interesse'];

            echo "<h3> Olá, $nome! </h3>";
            if ($interesse == "sim") {
                echo "Parabéns! Sua inscrição no evento foi confirmada.";
            } else {
                echo "Que pena! Talvez na próxima você participe...";
            }
        }
    ?>
</body>
</html>
