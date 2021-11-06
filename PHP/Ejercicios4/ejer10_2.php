<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$num = $_POST['num'];
$total = $_POST['total'];
$count = $_POST['count'];
$media = 0;
if ($num >= 0) {
    
    $total += $num;
    ++$count;

    ?>
    <form action="ejer10_1.php" method="post">
    <input type="hidden" name="total" value="<?php echo $total;?>">
    <input type="hidden" name="count" value="<?php echo $count;?>">
    <input type="submit" value="Continuar">
    </form><?php
}

else {

    $media = $total/$count;
    echo "Número negativo introducido, la media es de: ", $total , " entre " , $count , " = " , $media;

}
?>
</body>
</html>