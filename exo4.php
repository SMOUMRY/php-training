<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
            <?php
                displayArrayInList($arrayA);
                function displayArrayInList($array)
                {
                    foreach ($array as $element) {
                        echo "<li>{$element}</li>";
                    };
                };
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
            <?php
                displayEvenFromArray($array);
                function displayEvenFromArray($array)
                {
                    foreach ($array as $int) {
                        if ($int % 2 === 0) echo "<li> {$int} </li>";
                    };
                };
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
            <?php
                displayEvenIndexFromArray($array);
                function displayEvenIndexFromArray($array)
                {
                    foreach ($array as $index => $element) {
                        if ($index % 2 === 0) echo "<li> {$element} </li>";
                    };
                };
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
                <?php
            doubleArrayValue($array);
                function doubleArrayValue($array)
                {
                    $array = array_map(function ($value) {
                        echo $value * 2 . ' ';
                    }, $array);
                };
                ?>
            </div>
        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
                <?php

                divideValueBy($array, 2);

                function divideValueBy($array, $int)
                {
                    array_map(function ($value) use ($int) {
                        echo ($value / $int) . ' ';
                    }, $array);
                };
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
                <?php

                $arraydouble = [5, 5, 16, 16, 16, 8, 8, 8, 8];
                var_dump(array_unique($arraydouble));

                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
                <?php

                $arrayinter1 = [2, 5, 8, 8, 9, 6, 78, 5];
                $arrayinter2 = [2, 4, 7, 8, 9, 3, 78, 1];

                var_dump(array_intersect($arrayinter1, $arrayinter2));
                ?>
            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
            <?php
                var_dump(array_diff($arrayinter1, $arrayinter2));
                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
                <?php

                arrayDiffUnique($arrayinter1, $arrayinter2, true);

                function arrayDiffUnique($array1, $array2, $bool)
                {
                    if (!$bool) var_dump(array_diff($array1, $array2));
                    else var_dump(array_unique(array_diff($array1, $array2)));
                };
                ?>
            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
            <?php 
                
                displayNFirstValue($arrayinter1, 4);

                function displayNFirstValue($array, $int) {
                    for($i = 0; $i <= $int-1; $i ++) {
                        echo $array[$i].PHP_EOL;
                    };
                };

                ?>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>