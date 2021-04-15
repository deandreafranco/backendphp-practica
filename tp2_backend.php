  <!DOCTYPE html>

  <html lang="es" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>practica 2 php</title>

    <style>

  h1{
        color: red;
        font-family: Tahoma
      }
  h2{
            color: blue;
            font-family: Tahoma
          }

    </style>


  </head>

  <body>

    <h1>tp2_backend</h1>

<!-- Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:
1. Crear una variable n y validar que sea un número positivo.
2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.-->

    <?php

//ejercicio 1

echo "<h2>Ejercicio 1</h2>";

$n=5;

echo "<h3>La variable es $n</h3>";

if ($n>0) {

  echo" <h3> $n Es positivo</h3>";

} else {

  echo " <h3> $n no es positivo</h3> ";

}

//ejercicio 2

echo "<h2>Ejercicio 2</h2>";

$n2=12;

echo "<h3>La variable es $n2</h3>";


  if ($n2>1 && $n2<10 ) {

  echo"<h3>$n2 Esta entre 1 y 10</h3>";

} else {

  echo "<h3>$n2 No esta entre 1 y 10</h3>";

}

//ejercicio 3

echo "<h2>Ejercicio 3</h2>";

$n3=15;

echo "<h3>La variable es $n3</h3>";


  if ($n3>10 || $n3<2 ) {

  echo"<h3>$n3 Es menor que 2 y mayor que 10</h3>";

} else {

  echo "<h3>$n3 No es menor que 2 y mayor que 10</h3>";

}

//ejercicio 4

echo "<h2>Ejercicio 4</h2>";

echo "<h3>Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta.</h3>";
echo "<h3>Si numero2 es mayor a numero1,mostrar por pantalla la multiplicación, la división entera y el resto de la división.</h3>";
echo "<h3>Si numero1 y numero2 son iguales, mostrar el siguiente mensaje Los números ingresados son iguales</h3>";

$numero1=4;
$numero2=10;

echo "<h3>La variable numero1 es $numero1</h3>";
echo "<h3>La variable numero2 es $numero2</h3>";


  if ($numero1>$numero2) {

 $suma=$numero1+$numero2;
 $resta=$numero1-$numero2;

  echo"<h3>La suma es $suma</h3>";
  echo"<h3>La resta es $resta</h3>";

} if ($numero2>$numero1) {

  $mult=$numero1*$numero2;
  $div=$numero2/$numero1;
  $mod=$numero2%$numero1;

  echo"<h3>La multiplicación es $mult</h3>";
  echo"<h3>La división $numero2/$numero1 es $div</h3>";
  echo"<h3>El resto de la división es $mod</h3>";

}else  {

  echo "<h3>Los números ingresados son iguales</h3>";

}
  ?>

  </body>

  </html>
