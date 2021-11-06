<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$ops = $_POST['oportunidades'];
$num = $_POST['numeroIntroducido'];
$comb = 1234;

if ($ops == 0) {
    
    echo $ops .' oportunidades restantes. Bloqueando caja fuerte.';
}

else {
    

    if ($num == $comb) {
        echo "Abriendo caja fuerte" . '<br>';
    } 

    else {
        echo "Combinación incorrecta" . '<br>';
            ?>
            Te quedan <?php echo $ops-1; --$ops; ?> oportunidades para introducir la combinación.<br>
            Introduce la combinación.
            <form action="ejer7_1.php" method="post">
            <input type="hidden" name="op" value="<?php echo $ops; ?>">
            <input type="submit" value="Continuar">
            </form>
            <?php
    }
}
?>
</body>
</html>