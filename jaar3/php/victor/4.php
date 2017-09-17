<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI / Background color</title>
</head>

<body bgcolor="<?php echo ($_GET['color']) ? $_GET['color'] : $_COOKIE['4-background-color']; ?>">

    <form method="post" action="">
        Lengte(m): <input type="text" name="length"><br/>
        Gewicht(kg): <input type="text" name="weight"><br/>
        <button type="submit">Submit</button>
    </form>

    <?php

        // BMI
        function weight($length, $weight) {
            echo "BMI: " . number_format($weight / ($length * $length), 2);
        };

        weight($_POST['length'], $_POST['weight']);

        // Background color
        echo '<form method="get" action="">';
            echo '<select name="color">';
                echo '<option value="yellow">Geel</option>';
                echo '<option value="green">Groen</option>';
                echo '<option value="red">Rood</option>';
                echo '<option value="blue">Blauw</option>';
            echo '</select>';
            echo '<button type="submit">Pick color</button>';
        echo '</form>';

        if (isset($_GET['color'])) {
            setcookie("4-background-color", $_GET['color'], time() + 9999999999);
        }

    ?>

</body>
</html>