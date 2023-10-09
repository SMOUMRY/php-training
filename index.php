<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 1</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 1</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ecrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
            <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
            <div class="exercice-sandbox">
            <?php
                $firstname = "Michel";
                $score = 327;

                echo "<p> {$firstname} a obtenu {$score} points à cette partie. "
            ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
            <div class="exercice-sandbox">
            <?php
                $nameProduct1 = "arc";
                $priceProduct1 = 10.30;
                $nameProduct2 = "flèche";
                $priceProduct2 = 2.90;
                $nameProduct3 = "potion";
                $priceProduct3 = 5.20;

                echo "<ol>
                        <li>{$nameProduct1} : {$priceProduct1}</li>
                        <li>{$nameProduct2} : {$priceProduct2}</li>
                        <li>{$nameProduct3} : {$priceProduct3}</li>
                    </ol>";
            ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités ci-dessous et appliquez lui une remise de 10%.</p>
            <div class="exercice-sandbox">
            <?php
                $quantityProduct1 = 1;
                $quantityProduct2 = 10;
                $quantityProduct3 = 4;

                $total = ($priceProduct1 * $quantityProduct1) + ($priceProduct2 * $quantityProduct2) + ($priceProduct3 * $quantityProduct3);
                $discount = $total * 10 / 100;
                $total = $total - $discount;
                echo "<p>Le prix total est de {$total} avec une remise de {$discount}</p>";

            ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
            <div class="exercice-sandbox">
            <?php
                
                echo max($priceProduct1, $priceProduct2, $priceProduct3);

            ?>


            </div>
        </section>

        <!-- QUESTION 5 -->
        <?php

        $text1 = "Le marchand m'a vendu un arc et des flèches.";

        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents dans la phrase : "<?= $text1 ?>"</p>
            <div class="exercice-sandbox">
        <?php
            if (str_contains($text1, $nameProduct1)) echo "<p>Il y a {$quantityProduct1} {$nameProduct1}</p>";
            if (str_contains($text1, $nameProduct2)) echo "<p>Il y a {$quantityProduct2} {$nameProduct2}s</p>";
            if (str_contains($text1, $nameProduct3)) echo "<p>Il y a {$quantityProduct3} {$nameProduct3}s</p>";
        ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50 et 150 points.</p>
            <div class="exercice-sandbox">
            <?php
                $namePlayer1 = "Tim";
                $scorePlayer1 = 67;
                $namePlayer2 = "Morgan";
                $scorePlayer2 = 198;
                $namePlayer3 = "Hamed";
                $scorePlayer3 = 21;
                $namePlayer4 = "Camille";
                $scorePlayer4 = 134;
                $namePlayer5 = "Kevin";
                $scorePlayer5 = 103;

                if ($scorePlayer1 < 150 && $scorePlayer1 > 50) echo "<p>{$namePlayer1}</p>";
                if ($scorePlayer2 < 150 && $scorePlayer2 > 50) echo "<p>{$namePlayer2}</p>";
                if ($scorePlayer3 < 150 && $scorePlayer3 > 50) echo "<p>{$namePlayer3}</p>";
                if ($scorePlayer4 < 150 && $scorePlayer4 > 50) echo "<p>{$namePlayer4}</p>";
                if ($scorePlayer5 < 150 && $scorePlayer5 > 50) echo "<p>{$namePlayer5}</p>";


            ?>
            </div>
        </section>


        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En réutilisant les scores de la question précédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
            <div class="exercice-sandbox">
                <?php
                $scoreMax = max($scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5);
                if ($scoreMax === $scorePlayer1) echo "<p>{$namePlayer1}";
                if ($scoreMax === $scorePlayer2) echo "<p>{$namePlayer2}";
                if ($scoreMax === $scorePlayer3) echo "<p>{$namePlayer3}";
                if ($scoreMax === $scorePlayer4) echo "<p>{$namePlayer4}";
                if ($scoreMax === $scorePlayer5) echo "<p>{$namePlayer5}";

                ?>

            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
            <div class="exercice-sandbox">
                
                <?php
                    $largeNameNumber = max(strlen($namePlayer1), strlen($namePlayer2), strlen($namePlayer3), strlen($namePlayer4), strlen($namePlayer5));
                    if ($largeNameNumber === strlen($namePlayer1)) echo "<p>{$namePlayer1}";
                    if ($largeNameNumber === strlen($namePlayer2)) echo "<p>{$namePlayer2}";
                    if ($largeNameNumber === strlen($namePlayer3)) echo "<p>{$namePlayer3}";
                    if ($largeNameNumber === strlen($namePlayer4)) echo "<p>{$namePlayer4}";
                    if ($largeNameNumber === strlen($namePlayer5)) echo "<p>{$namePlayer5}";
                ?>


            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel contenant toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
            <ul class="exercice-txt">
                <li>Tim : 25 ans</li>
                <li>Morgan : 34 ans</li>
                <li>Hamed : 27 ans</li>
                <li>Camille : 47 ans</li>
                <li>Kevin : 31 ans</li>
            </ul>
            <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
            <div class="exercice-sandbox">
                 <?php
                    $agePlayer1 = 25;
                    $agePlayer2 = 34;
                    $agePlayer3 = 27;
                    $agePlayer4 = 47;
                    $agePlayer5 = 31;

                    $array = [
                                    "$namePlayer1" => ['age' => $agePlayer1, 'score' => $scorePlayer1],
                                    "$namePlayer2" => ['age' => $agePlayer2, 'score' => $scorePlayer2],
                                    "$namePlayer3" => ['age' => $agePlayer3, 'score' => $scorePlayer3],
                                    "$namePlayer4" => ['age' => $agePlayer4, 'score' => $scorePlayer4],
                                    "$namePlayer5" => ['age' => $agePlayer5, 'score' => $scorePlayer5],
                    ];
                        var_dump($array);
                 ?>


            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise HTML P.</p>
            <div class="exercice-sandbox">
                     <?php
                    $stockAge = 100;
                        foreach ($array as $player){
                            if ($player['age'] < $stockAge){
                                $stockAge = $player['age'];
                                $stockNamePlayer = key($array);
                            };
                        
                        };
                    echo "<p> {$stockNamePlayer} est le plus jeune avec un age de {$stockAge} ans</p>";
                        ?>

            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>