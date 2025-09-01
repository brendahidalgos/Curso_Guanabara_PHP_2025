<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógica</title>
</head>
<body>
    <?php
        $idade = 25;
        $temCarteira = true;
        if($idade >= 18 && $temCarteira){
            echo "Pode dirigir";
        }else{
            echo "Faça a sua carteira!";
        }
    ?>
</body>
</html>