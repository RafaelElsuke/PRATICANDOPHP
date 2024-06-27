<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidade média</title>
</head>
<style>
        .verde {
            color: green;
        }
        .amarelo {
            color: yellow;
        }
        .vermelho {
            color: red;
        }
    </style>
<body>
    <h1>Sinal de trânsito</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="velo">Velocidade média:</label>
        <input type="number" id="velo" name="velo">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $veloMedia = $_POST['velo'];
        
        if ($veloMedia <= 60) {
            echo "<span class='verde'>Velocidade permitida</span>";
        } elseif ($veloMedia > 60 && $veloMedia <= 80) {
            echo "<span class='amarelo'>Diminua Velocidade</span>";
        } elseif ($veloMedia > 80) {
            echo "<span class='vermelho'>Velocidade: 80</span>";
    }
}
    ?>
</body>
</html>
