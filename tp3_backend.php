  <!DOCTYPE html>

  <html lang="es" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>tp3_backend.php</title>

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

    <h1>Estructuras de control: Parte 2</h1>

<!--
1. Mostrar los números del 1 al 100.
2. Mostrar los números del 100 al 1.
3. Mostrar los números pares del 1 al 100.
4. Mostrar los números impares del 1 al 100.
5. Mostrar la suma de los números de 1 a 20.
6. Mostrar la suma de números pares de 1 a 20.-->

    <?php

//ejercicio 1

echo "<h2>1. Mostrar los números del 1 al 100</h2>";

for ($i=1; $i <= 100; $i++) {
  echo "<h3>$i</h3>";
}

//ejercicio 2

echo "<h2>2. Mostrar los números del 100 al 1</h2>";

for ($i=100; $i >= 1; $i--) {
  echo "<h3>$i</h3>";
}

//ejercicio 3

echo "<h2>3. Mostrar los números pares del 1 al 100</h2>";
for ($i=1; $i <= 100; $i++) {
while ($i%2==0) {
  echo "<h3>$i</h3>";
  $i++;
                }
}

//ejercicio 4

echo "<h2>4. Mostrar los números impares del 1 al 100</h2>";

for ($i=1; $i <= 100; $i++) {
  while ($i%2!=0) {
    echo "<h3>$i</h3>";
    $i++;
                  }
  }

  //ejercicio 5

  echo "<h2>5. Mostrar la suma de los números del 1 a 20</h2>";
  $suma=0;
  for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
print "<h3>La suma de los números del 1 a 20 es $suma.<h3>\n";

//ejercicio 6

echo "<h2>6. Mostrar la suma de números pares del 1 a 20</h2>";

$suma=0;

for ($i = 1; $i <= 20; $i++) {

  while ($i%2==0) {

        $suma += $i;
        $i++;

}

  }

print "<h3>La suma de los números pares del 1 a 20 es $suma.<h3>\n";


     ?>

     </body>

     </html>
