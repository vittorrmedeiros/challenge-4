<?php

    if($_POST){
        $letra = $_POST['letra'];

        if($letra == "A" || $letra == "a" || $letra == "E" || $letra == "e" || $letra == "I" || $letra == "i" || $letra == "O" || $letra == "o" || $letra == "U" || $letra == "u"){
            $resultado = "A letra é uma vogal";
        }else {
            $resultado = "A letra é uma consoante";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
</head>
<body>
    <form method="POST">
        <p>
            <label for="letra">Letra</label>
            <input type="text" maxlength="1" name="letra" placeholder="A,B,C..." id="letra">
        </p>
        <input type="submit" value="Enviar">
    

    <p>
        <?php
            if($_POST){
                echo $resultado;
            }
        ?>
    </p>
    </form>

</body>
</html>