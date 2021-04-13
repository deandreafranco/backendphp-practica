<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<h1>1 - Hola mundo!</h1>";
    $saludo="2 - Hola mundo!!";
    echo "<h1>$saludo</h1>";
    $ent1=15;
    $ent2=5;
    echo "<h1>3 - Operaciones con dos variables enteras, ent1= 15 y ent2= 5</h1>";
    $suma=$ent1+$ent2;
    echo "<h1>Suma</h1>";
    echo "<h1>$suma</h1>";
    $resta=$ent1-$ent2;
    echo "<h1>Resta</h1>";
    echo "<h1>$resta</h1>";
    $resta=$ent1-$ent2;
    echo "<h1>Multiplicacion</h1>";
    $mult=$ent1*$ent2;
    echo "<h1>$mult</h1>";
    echo "<h1>División</h1>";
    $div=$ent1/$ent2;
    echo "<h1>$div</h1>";
    echo "<h1>Resto de la división (módulo)</h1>";
    $mod=$ent1%$ent2;
    echo "<h1>$mod</h1>";
    echo "<h1>4 - Celsius a Fahrenheit para 20º</h1>";
    $cels="20";
    $farh = $cels*9/5+32;
    echo "<h1>$farh</h1>";
    echo "<h1>5 - Cálculo de rectángulo y circulo</h1>";
    echo "<h1>a - Calculo del perimetro y área para un rectangulo con base de 18cm y altura 12cm</h1>";
    $base="18";
    $altura="12";
    $perimr= 2*$base+2*$altura;
    $arear=$base*$altura;
    echo "<h1>El perimetro del rectángulo es:</h1>";
    echo "<h1>$perimr</h1>";
    echo "<h1>El área del rectangulo es:</h1>";
    echo "<h1>$arear</h1>";
    echo "<h1>b - Calculo del perimetro y área de un circulo de 30cm de radio</h1>";
    $rad="30";
    $perimc= 2*pi()*$rad;
    echo "<h1>El perimetro del circulo es:</h1>";
    echo "<h1>$perimc</h1>";
    $perimc= 2*pi()*$rad;
    echo "<h1>El área del circulo es:</h1>";
    $areac= pi()*pow($rad, 2);
    echo "<h1>$areac</h1>";
     ?>
  </body>
</html>
