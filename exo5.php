<?php

// Json file
try {
    $fileContent = file_get_contents("datas/series.json");
    $series = json_decode($fileContent, true);
} catch (Exception $e) {
    echo "Something went wrong with json file...";
    exit;
}

?>

<?php include "includes/_head.php";?>


        <section class="exercice">
            Sur cette page un fichier comportant les données de séries télé est importé côté serveur. (voir datas/series.json)
            Les données sont accessibles dans la variable $series.
        </section>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Récupérer dans un tableau puis afficher l'ensemble des plateformes de diffusion des séries. Afficher les par ordre alphabétique.</p>
            <div class="exercice-sandbox">
                <?php
                $arrayAvailableOn = array_map(function ($serie) {
                    return $serie['availableOn'];
                }, $series);
                $arrayAvailableOn = array_unique($arrayAvailableOn);
                sort($arrayAvailableOn);
                var_dump($arrayAvailableOn);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher la liste de toutes les séries avec l'image principale et son titre</p>
            <p class="exercice-txt">Afficher une seule série par ligne sur les plus petits écrans, 2 séries par ligne sur les écrans intermédiaires et 4 séries par ligne sur un écran d'ordinateur.</p>
            <div class="exercice-sandbox">
                <ul class='series'>
                    <?php
                    foreach ($series as $serie) {
                        if (key_exists('style', $_GET) && in_array($_GET['style'], $serie['styles'])) {
                            echo "<li class='serie-link'><a href='?serie={$serie['id']}'><h3 class='serie-title'>{$serie['name']}</h3><img class='serie-img' src={$serie['image']}></a></li>";
                        } else if (!key_exists('style', $_GET)) echo "<li class='serie-link'><a href='?serie={$serie['id']}'><h3 class='serie-title'>{$serie['name']}</h3><img class='serie-img' src={$serie['image']}></a></li>";
                    };
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Ajouter un lien aux séries listées ci-dessus menant à cette page avec en paramètre "serie", l'identifiant de la série</p>
            <div class="exercice-sandbox">

            </div>
        </section>


        <!-- QUESTION 4 -->
        <section id="question4" class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Si l'URL de la page appelée comporte l'identifiant d'une série, alors afficher toutes les informations de la série ci-dessous.</p>
            <p class="exercice-txt">Si l'identifiant ne correspond à aucune série, afficher un message d'erreur.</p>
            <div class="exercice-sandbox">
                <?php

                if (key_exists('serie', $_GET)) {
                    $serieDisplay = array_filter($series, function ($serie) {
                        $serieParam = $_GET['serie'];
                        if ($serieParam == $serie['id']) echo "<li class='serie-link'><a href='?serie={$serie['id']}'><h3 class='serie-title'>{$serie['name']}</h3><img class='serie-img' src={$serie['image']}></a></li>";;
                    });
                } else echo "Aucune série spécifiée";

                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Récupérer dans un tableau l'ensemble des styles de séries dans une liste HTML. Afficher les par ordre alphabétique dans une liste HTML.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    $arrayStyles = [];
                    foreach ($series as $serie) {
                        foreach ($serie['styles'] as $style) {
                            if (!key_exists("$style", $arrayStyles)) $arrayStyles["$style"] = 1;
                            else $arrayStyles["$style"] += 1;
                        };
                    };
                    ksort($arrayStyles);
                    foreach ($arrayStyles as $style => $count) {
                        echo "<li><a href='?style={$style}'>{$style}({$count})</a></li>";
                    };
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Ajoutez après chaque style de la liste ci-dessus, le nombre de séries correspondantes entre parenthèses.</p>
            <div class="exercice-sandbox">

            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Ajoutez un lien à chaque nom de style ci-dessus menant à cette page avec en paramètre "style" le nom du style.</p>
            <div class="exercice-sandbox">

            </div>
        </section>

        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Si l'URL de la page appelée comporte un style, affichez à la Question 2 uniquement les séries de ce style.</p>
            <div class="exercice-sandbox">

            </div>
        </section>

    </div>
    <?php require "includes/_footer.php"; ?>
</body>

</html>