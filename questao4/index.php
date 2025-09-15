<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>login</h2>
    <form method="post">
        Usuario: <input type="text" name="usuario"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>

    <?php
        if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        if($usuario == "admin"){
            if($senha == "1234"){
                echo"Bem-vindo, admin.";
            }else{
                echo"senha incorreta.";
            }
            }else{
                echo"acesso negado.";
            }
        }
    ?>
</body>
</html>