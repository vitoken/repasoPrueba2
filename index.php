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
        <div id="uno"></div>
        <div id="dos"></div>
        <input id="btnuno" class="btn btn-primary" type="button" value="Cambia UNO"/>
        <input id="btndos" class="btn btn-secondary" type="button" value="Cambia DOS"/>
        <hr></hr>
        <form method="POST" action="contenido/procesaclave.php">
            <input name="usuario" type="text" placeholder="ingrese su usuairo">
            <input name="clave" type="password" placeholder="ingrese su password">
            <input type="submit" value="enviar" />
            
        </form>
    
    
    
    
    </body>
    
    
    <script>
        $("#btnuno").click(function (event) {
            $("#uno").html("<h1>Titulo UNO</h1>");
            $("#uno").addClass("alert alert-primary");
        });
    </script>
    
    <script>
        $("#btndos").click(function (event) {
            $("#dos").html("<h1>Titulo DOS</h1>");
            $("#dos").addClass("alert alert-secondary");
        });
    </script>
</html>
