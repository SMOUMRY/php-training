<?php include "includes/_head.php";?>

<!-- QUESTION 1 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 1</h2>
    <p class="exercice-txt">Ecrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
    <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
    <div class="exercice-sandbox">
        <?php
        $firstname = "Michel";
        $score = 327;

        echo "<p>$firstname a obtenu $score points à cette partie.</p>"
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
        echo '<ul>
                <li>' . ucfirst($nameProduct1) . ' : ' . "{$priceProduct1}</li>
                <li> " . ucfirst($nameProduct2) . ' : ' . "{$priceProduct2}</li>
                <li> " . ucfirst($nameProduct3) . ' : ' . "{$priceProduct3}</li>
                </ul>"
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
        $total = $quantityProduct1 * $priceProduct1 + $quantityProduct2 * $priceProduct2 + $quantityProduct3 * $priceProduct3;
        echo "Le montant total est de {$total} €. Avec la remise de 10% appliquée : " . $total * 0.90 . ' €';
        ?>
    </div>
</section>


<!-- QUESTION 4 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 4</h2>
    <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
    <div class="exercice-sandbox">
        <?= max($priceProduct1, $priceProduct2, $priceProduct3) ?>
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
        <ul>
            <?php
            if (str_contains($text1, $nameProduct1)) echo "<li>{$nameProduct1}</li>";
            if (str_contains($text1, $nameProduct2)) echo "<li>{$nameProduct2}</li>";
            if (str_contains($text1, $nameProduct3)) echo "<li>{$nameProduct3}</li>";
            ?>
        </ul>
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

        $nameArray = array($namePlayer1, $namePlayer2, $namePlayer3, $namePlayer4, $namePlayer5);
        $scoreArray = array($scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5);

        echo 'Les joueurs ayant obtenu un score entre 50 et 150 points sont : ';

        for ($i = 0; $i < sizeof($nameArray); $i++) {
            if ($scoreArray[$i] >= 50 && $scoreArray[$i] <= 150) echo "{$nameArray[$i]} ";
        };

        ?>
    </div>
</section>


<!-- QUESTION 7 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 7</h2>
    <p class="exercice-txt">En réutilisant les scores de la question précédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
    <div class="exercice-sandbox">
        <?php
        $winnerScore = max($scoreArray);
        $winnerName = $nameArray[array_search($winnerScore, $scoreArray)];
        echo 'Le joueur ayant le plus grand score est : ' . $winnerName;
        ?>
    </div>
</section>


<!-- QUESTION 8 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 8</h2>
    <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
    <div class="exercice-sandbox">
        <?php
        $maxlen = 0;
        $longestName = '';
        foreach ($nameArray as $name) {
            if (strlen($name) > $maxlen || $maxlen === 0) {
                $maxlen = strlen($name);
                $longestName = $name;
            };
        };
        echo 'Le joueur qui a le nom le plus long est : ' . $longestName;
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
            "$namePlayer1" => [
                "score" => $scorePlayer1,
                "age" => $agePlayer1
            ],
            "$namePlayer2" => [
                "score" => $scorePlayer2,
                "age" => $agePlayer2
            ],
            "$namePlayer3" => [
                "score" => $scorePlayer3,
                "age" => $agePlayer3
            ],
            "$namePlayer4" => [
                "score" => $scorePlayer4,
                "age" => $agePlayer4
            ],
            "$namePlayer5" => [
                "score" => $scorePlayer5,
                "age" => $agePlayer5
            ]
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

        $minAge = 100;
        foreach ($array as $player) {
            if ($player["age"] < $minAge) {
                $minAge = $player["age"];
                $youngestPlayer = key($array);
            };
        };
        echo "Le joueur le plus jeune est : {$youngestPlayer}. Il a {$minAge} ans.";

        ?>
    </div>
</section>
</div>
<?php require "includes/_footer.php"; ?>
</body>

</html>