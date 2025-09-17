<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body >
    <form method="post" action="">
        <h1>Calcule aqui</h1>

        <input type="number" name="a" placeholder="Numero A" required>
        <input type="number" name="b" placeholder="Numero B" required>

        <select name="operacao" required>
            <option value="soma">Somar</option>
            <option value="subtracao">Subtrair</option>
            <option value="multiplicacao">Multiplicar</option>
            <option value="divisao">Dividir</option>
        </select>

         <button type="submit">Calcular</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $a = $_POST["a"];
      $b = $_POST["b"];
      $op = $_POST["operacao"];
      $resultado = "";

      switch($op) {
        case "soma": 
          $resultado = $a + $b; 
          break;
        case "subtracao": 
          $resultado = $a - $b; 
          break;
        case "multiplicacao": 
          $resultado = $a * $b; 
          break;
        case "divisao": 
          $resultado = ($b != 0) ? $a / $b : "Erro: divisão por zero"; 
          break;
      }

      echo "<div class='resultado'>";
      echo "<p>Resultado: <strong>$resultado</strong></p>";
      echo "<a href='index.php' class='retornar'>Retornar</a>";
      echo "</div>";
    }
  ?>

    </form>
</body>
</html>