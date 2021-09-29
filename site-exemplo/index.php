<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aprofundando PHP!</title>
        
    </head>
    <body>
        <?php 
            if (isset($_POST["enviar-form"])):
                echo "Enviou <br>";
                var_dump($_POST);
            endif;
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Idade: <input type="text" name="idade"><br>
            Email: <input type="text" name="email"><br>
            Peso: <input type="text" name="peso"><br>
            IP: <input type="text" name="ip"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="enviar-form"> Enviar</button><br>
        </form>
    </body>
</html>