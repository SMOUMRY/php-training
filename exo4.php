<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>

<?php 
include "includes/_head.php";
require 'includes/_functions.php';
?>



<!-- QUESTION 1 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 1</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
    <div class="exercice-sandbox">
        <?php
        echo turnArrayToHtmlList($arrayA);
        ?>
    </div>
</section>

<!-- QUESTION 2 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 2</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
    <div class="exercice-sandbox">
        <?php
        echo turnArrayToHtmlList(sortEvenValueArray($array));
        ?>
    </div>
</section>

<!-- QUESTION 3 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 3</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
    <div class="exercice-sandbox">
        <?php
        var_dump(getEvenIndexInArray($array));
        ?>
    </div>
</section>

<!-- QUESTION 4 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 4</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
    <div class="exercice-sandbox">
        <?php
        var_dump(doubleArrayValue($array));
        ?>
    </div>
</section>

<!-- QUESTION 4 bis -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 4 bis</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
    <div class="exercice-sandbox">
        <?php
        var_dump(divideValueBy($array, 2));
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

        var_dump(intersectArray($arrayinter1, $arrayinter2));
        ?>
    </div>
</section>

<!-- QUESTION 7 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 7</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
    <div class="exercice-sandbox">
        <?php
        var_dump(diffArray($arrayinter1, $arrayinter2));
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
        ?>
    </div>
</section>

<!-- QUESTION 9 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 9</h2>
    <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
    <div class="exercice-sandbox">
        <?php
        var_dump(displayFirstArrayValue($arrayinter1, 4));
        ?>
    </div>
</section>
</div>
<?php require "includes/_footer.php"; ?>
</body>

</html>