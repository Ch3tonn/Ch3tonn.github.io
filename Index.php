<!DOCTYPE html>
<html>
<head>
	<title>Fuerzas</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<body>
    <form method="post" action="index.php">
    	<h1>Introduce la cantidad de fuerzas que tienes</h1>
        <input type="text" name="txtcant" placeholder="Cantidad de fuerzas">
    	<input type="submit" />
    </form> 
    <?php
    if($_POST) {
        $cant = trim($_POST['txtcant']);
	    $i = 1;
        ?>
        <form method="post" action="calcular.php">
            <H2>INTRODUCE EL VALOR DE LAS FUERZAS Y SUS ANGULOS</H2>
        <?php
        while ($i<=$cant){
            ?>
            <p>Fuerza <?php print $i ?>
            <input type="text" placeholder="Fuerza" name="txtF<?php print $i?>">
            Angulo
            <input type="text" placeholder="Angulo" name="txtA<?php print $i?>">
            <?php
            $i++;
        }
        ?>
        <input type="submit" value="calcular" />
        </form>
        <?php
    }
    
    ?>  
    
</body>
</html>