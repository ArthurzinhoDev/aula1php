<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Verificacao de idade</h2>
    <form method="post">
        digite sua idade: <input type="number" name="idade">
        <input type="submit" value="Verificar">
    </form>
    <?php
        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
            
            if($idade <12){
                echo"voce é uma criança";
            } 
            else if($idade>= 12 && $idade<=17){
                echo"voce é adolescente";
            } else {
                echo"Voce é um adulto.";
            }
        }
?>
</body>
</html>