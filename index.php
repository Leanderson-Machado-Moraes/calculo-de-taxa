<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculo de taxa</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TCalculo">Cálculo de taxa da prestação</h1>
  <h1 class="TValores">Insira os valores abaixo!</h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
             Valor da prestação: <input class="inputR" type="number" name="VP" />
            </p>
            <p class="inputN">
             Taxa: <input class="inputR" type="number" name="taxa" />
            </p>
            <p class="inputN">
             Tempo de atraso: <input class="inputR" type="number" name="TA" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['VP']) || isset($_POST['taxa'])  || isset($_POST['TA'])){
        $valorParcela = $_POST['VP'];
        $taxa = $_POST['taxa'];
        $XAtraso = $_POST['TA'];
        $prestação = $valorParcela + ($valorParcela * ($taxa/100)*$XAtraso);

        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>O valor da prestação com $XAtraso dias de atraso será de R$$prestação devido
         a taxa de $taxa%</p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>