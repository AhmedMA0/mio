<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
</form>
    <?php 
        $a = $_GET['numero'];
        $b = 'empty';
        switch($a) {
            case 1:
            $b='Lunes'; 
            echo $b;
            break;

            case 2:
            $b='Martes'; 
            echo $b;
            break;

            case 3:
            $b='Miercoles';
            echo $b;
            break;

            case 4:
            $b='Jueves';     
            echo $b;
            break;

            case 5:
            $b='Viernes';     
            echo $b;
            break;

            case 6:
            $b='Sabado';     
            echo $b;
            break;

            case 7:
            $b='Domingo'; 
            echo $b;
            break;

            default:
            $b='El numero introducido no esta entre 1 y 7';
            echo $b;
            break;
        }

    ?>
</body>
</html>