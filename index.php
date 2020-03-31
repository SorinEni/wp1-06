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
    echo '<img src="https://images.squarespace-cdn.com/content/v1/5afc558f50a54faa9586e9aa/1536447420193-Y8CFUYEXCRWVN9Z7TOSZ/ke17ZwdGBToddI8pDm48kJUlZr2Ql5GtSKWrQpjur5t7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UfNdxJhjhuaNor070w_QAc94zjGLGXCa1tSmDVMXf8RUVhMJRmnnhuU1v2M8fLFyJw/Old+Bow+and+ArrowM2.jpg" alt="luk"><br>';
} 

elseif ($nails && $woodchunk ) {
    echo '<img src="https://primalconcepts.net/wp-content/uploads/2019/11/FullSizeRender_1.jpeg" alt="pálka"><br>';
}

elseif ($rope && $woodchunk ) {
    echo '<img src="https://www.fighter-shop.cz/69250-large_default/drevena-nunchaku-12-prirodni-drevo-snura.jpg" alt="nunčaky"><br>';
}

elseif ($knife && $woodchunk ) {
    echo '<img src="https://gillsprimitivearchery.com/wp-content/uploads/2018/07/fish-spear-2.jpg" alt="kopí"><br>';
}

else {
    echo "You can't craft anything";
}


?>



</body>
</html>