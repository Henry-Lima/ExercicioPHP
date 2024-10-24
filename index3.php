<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" name="form" action="index3.php">
            
            <p>Digite o valor A:</p>
                <input name="num" type="text">
            
            <p>Digite o valor B:</p>
                <input name="num2" type="text">
            
            <input type="submit" value="Enviar">
        </form>
</body>

    <?php 
        $a = $_POST['num'];
        $b = $_POST['num2'];

        if($a > $b) {
            echo 'A maior que B';
        }
        else {
            echo 'A menor que B';
        }
    ?>
</html>