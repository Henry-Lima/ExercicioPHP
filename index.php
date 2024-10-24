<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" name="form" action="index.php">
        
        <p>Digite um valor:</p>
        <input name="num" type="text">
        
        <input type="submit" value="Enviar">
    </form>
    
    
</body>
    
    <?php
        $num = $_POST['num'];

        if($num > 0) {
            echo 'Valor positivo';
        }
        elseif( $num < 0) {
            echo 'Valor negativo';
        }
        else {
            echo 'Igual a zero';
        }
        
    
    ?>
</html>