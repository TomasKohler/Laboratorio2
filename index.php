<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            text-align: center;
        }



        #content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>



    <div id="content">
        <?php
        echo "<h1>Hola Tera!</h1>";
        echo "<p>Servidor: " . gethostname() . "</p>";
        echo "<p>Servidor web #" . $_SERVER['SERVER_ADDR'] . "</p>";
        ?>
    </div>

</body>
</html>
