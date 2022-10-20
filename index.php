<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php

        $numero=3;
        $valor = 2;
        echo $numero + $valor;

        echo "<br>";

        $nombre = "Juan";
        $apellido = "Tejo";
        echo $nombre . " " . $apellido;

        echo "<br>";

        //echo $_GET["id"];
        if(isset($_GET["id"])){
            echo $_GET["id"];}

        $lista =[1,2,3,4,5,6,7,8,9,10];
    ?>

    <form method="GET" action="">
        <input type="text" name="id">
        <input type="submit" value="Enviar">
    </form>

    <ul>
        <?php
            foreach($lista as $item){
                echo "<li>" . $item . "</li>";
            }
        ?>

    <h1>aca un cambio cualquiera</h1>
    <h2>cambio numero 2</h2>
</body>
</html>