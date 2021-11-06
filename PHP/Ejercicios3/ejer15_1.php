<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      $puntos = 0;
          
        foreach($_POST as $respuesta) {
          $puntos += $respuesta;
          }


        if ( $puntos <= 10 ) {
          echo $puntos ." puntos. " . "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
        }

        if ( ($puntos > 11 ) && ($puntos <= 22) ) {
          echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
        }

        if ( $puntos >= 22 ) {
          echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
        }

    ?>
  </body>
</html>