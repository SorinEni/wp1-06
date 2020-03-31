<?php
$woodchunk = true;
$knife = true;
$rope = true;
$nails = true;











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Inventory</h1>
<?php


if ($rope) {
    echo '<img src="https://images-na.ssl-images-amazon.com/images/I/61UNP0w1FfL._AC_SX522_.jpg" alt="lano">';
}

if ($woodchunk) {
    echo '<img src="https://www.publicdomainpictures.net/pictures/220000/nahled/a-woodchuck-1494989253kXz.jpg" alt="dřevo"><br>';
}

if ($knife) {
    echo '<img src="https://lh3.googleusercontent.com/proxy/Itwe6c1tmvVt03R-VaHcKuJWBbztAzgn9F-0cH-StDbU5SawgQZw-4RFcuMRRvbMB7ROgLbQE8XctAiciAmjA62RezVPCypbrPiuEoobYR_uLjflGri1" alt="nůž">';
}

if ($nails) {
    echo '<img src="https://www.landsmann.cz/haspl-242-hrebik-stavebni-delka-100-mm-pr-4-mm-cena-za-1-kg-_ie69406.jpg" alt="hřebíky"><br>';
}   

?>
<h1>Crafting table</h1>
<?php

if ($rope && $knife && $woodchunk ) {
    echo "Bow<br>";
} 

elseif ($nails && $woodchunk ) {
    echo "Nail bat<br>";
}

elseif ($rope && $woodchunk ) {
    echo "Nunchucks<br>";
}

elseif ($knife && $woodchunk ) {
    echo "Spear<br>";
}

else {
    echo "You can't craft anything";
}


?>



</body>
</html>