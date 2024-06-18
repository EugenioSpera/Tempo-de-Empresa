<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PeriodoEmpregado.php</title>
</head>

<body>



  <form action="resultado.php" method="POST">

  <h1>Calcular Tempo de trabalho na empresa:</h1>

    <div class="select_area">
      <label for="admissao">Informe sua data de admissão:</label>
      <input type="date"  id="admissao" placeholder="Digite a sua data de admissao" name="admissao" required>
      </input>
      <label for="demissao">Informe sua data de demissão:</label>
      <input type="date"  id="demissao" placeholder="Digite a sua data de demissao" name="demissao" required>
      </input>
      <button class="button-area" type="submit">Verificar</button>
    </div>

  </form>

<link rel="stylesheet" href="./style.css">
</body>

</html>