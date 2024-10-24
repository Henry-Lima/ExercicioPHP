<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" name="form" >
            
            <p>Digite o valor do ângulo A:</p>
                <input name="num" type="text">
            
            <p>Digite o valor do ângulo B:</p>
                <input name="num2" type="text">

            <p>Digite o valor do ângulo C:</p>
                <input name="num3" type="text">
            
            <input type="submit" value="Enviar">
        </form>
</body>

    <?php 
    $a = $_POST['num'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];
    
    if($a + $b > $c and $a + $c > $b and $b + $c > $a ) {
        echo 'Forma um triângulo';
    }
    else {
        echo ' Não forma um triangulo';
    }

    if ($a == $b == $c) {
        echo ' Forma um triângulo equilátero';
    }
     
    elseif ($a == $b != $c or $b == $c != $a or $a == $c != $b) {
        echo 'Forma um triângulo isósceles ';
    }
    
    elseif ( $a != $b != $c) {
        echo 'Forma um triângulo escaleno';
    }

    ?>
</html>