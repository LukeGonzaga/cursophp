<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //Config. TIMEZONE  #BR
        echo "Hoje é dia " . date("d/m/y");
        echo " e a hora atual é " . date ("G:i:s")
    ?>
</body>
</html>