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
if ($num == $comb) {
    echo "Enhorabuena, has acertado el número." . '<br>';
} 

else {
    echo "Combinación incorrecta" . '<br>';
        ?>
        Te quedan <?php echo $ops; --$ops; ?> oportunidades para introducir la combinación.<br>
        Introduce la combinación.
        <form action="prueba_2.php" method="post">
        <input type="hidden" name="op" value="<?php echo $ops; ?>">
        <input type="submit" value="Continuar">
        </form>
        <?php
}
?>
</body>
</html>