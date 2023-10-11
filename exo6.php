<?php 
include "includes/_head.php";
require 'includes/_functions.php'
?>


        <section class="exercice">
            Les questions suivantes ont pour vocation a faire évoluer et à généraliser la structure du code de ce mini-site d'exercice.
        </section>

        <!-- QUESTION 1 -->
        <section id="question1" class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Créez un tableau listant toutes les pages du site et contenant toutes les données qui leurs sont associées.</p>
            <p class="exercice-txt">Afficher l'intégralité du tableau sur la page.</p>
            <div class="exercice-sandbox">
                <?php
                // Json file
                try {
                    $fileContent = file_get_contents("datas/sitemap.json");
                    $sitenav = json_decode($fileContent, true);
                } catch (Exception $e) {
                    echo "Something went wrong with json file...";
                    exit;
                };

                var_dump($sitenav);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section id="question2" class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Implémenter une fonction qui génére le code HTML du menu de navigation du site.</p>
            <p class="exercice-txt">Utiliser cette fonction pour afficher le menu sur l'ensemble des pages du site.</p>
            <div class="exercice-sandbox">
                <?php

                displayNav();

                function displayNav()
                {
                    try {
                        $fileContent = file_get_contents("datas/sitemap.json");
                        $sitenav = json_decode($fileContent, true);
                    } catch (Exception $e) {
                        echo "Something went wrong with json file..." . $e;
                        exit;
                    }
                    echo "<nav class='main-nav'>";
                    echo "<ul class='main-nav-list'>";
                    foreach ($sitenav as $item) {
                        echo "<li><a class='main-nav-link' href='{$item['href']}'>{$item['link-content']}</a></li>";
                    };
                    echo "</ul>";
                    echo "</nav>";
                }
                ?>

            </div>
        </section>

        <!-- QUESTION 3 -->
        <section id="question3" class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Placez tout le code en commun en entête de toutes les pages dans un fichier spécifique.</p>
            <p class="exercice-txt">Utiliser ce fichier pour afficher l'entête de chaque page.</p>
            <div class="exercice-sandbox">

            </div>
        </section>

        <!-- QUESTION 4 -->
        <section id="question4" class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Effectuez la même opération que la question précédente pour le footer des pages.</p>
            <div class="exercice-sandbox">

            </div>
        </section>
    </div>

    <?php require "includes/_footer.php"; ?>

</body>

</html>