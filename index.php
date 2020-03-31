<?php
$wood = true;
$rope = true;
$nails = true;
$knife = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Batoh </h1>
    
    <?php

if ($wood) {
    echo "Máš dřevo <br>";
} else {
    echo "Nemáš dřevo <br>";
}

if ($rope) {
    echo "Máš provaz <br>";
} else {
    echo "Nemáš provaz <br>";
}

if ($nails) {
    echo "Máš hřebíky <br>";
} else {
    echo "Nemáš hřebíky <br>";
}

if ($knife) {
    echo "Máš nůž <br>";
} else {
    echo "Nemáš nůž <br>";
}

    ?>

<h2> Výroba </h2>

<?php

if ($rope && $knife && $wood) {
    echo "<img src="bow.jpg" alt="Luk">";
} if ($nails && $wood) {
    echo "<img src="bwn.jpg" alt="Pálka s hřebíky"><br>";
} if ($rope && $wood) {
    echo "<img src="nun.jpg" alt="Nunchaky"><br>";
} if ($knife && $wood) {
    echo "<img src="spear.png" alt="Kopí"><br>";
}

?>
</body>
</html>