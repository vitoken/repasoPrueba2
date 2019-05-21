<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>

        <?php
        $usuario = "juan";
        $pwd = "123";

        if ($_POST["usuario"] == $usuario && $_POST["clave"] == $pwd) {
            echo '<h1 class="alert alert-primary"> Perfecto usuario y clave son perfectos</h1>';
        }
        ?>

        <a href="www.google.cl">Ahora puede dirigir a la siguiente pagina</a>

    </body>
</html>