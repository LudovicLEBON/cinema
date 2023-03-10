<?php
require("../include/inc_config.php");

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require("../include/inc_head.php"); ?>
</head>

<body>
    <!-- lien de navigation pour lecteur d'écran -->
    <a href="#main" class="sr-only">aller au contenu principal</a>
    <!-- En-tête de page -->
    <header>
        <?php require("../include/inc_header.php"); ?>
    </header>

    <!-- menu de navigation -->
    <nav>
        <?php require("../include/inc_menu.php"); ?>
    </nav>

    <!-- contenu principal de la page -->
    <main id="main">
        <h1>Génération des données</h1>
        <?php
        //génération des Villes
        $_ville = ["Paris", "Marseille", "Lyon", "Toulouse", "Nice", "Nantes", "Montpellier", "Strasbourg", "Bordeaux", "Lille", "Rennes", "Reims", "Préfecture", "Saint-Étienne", "Le Havre", "Grenoble", "Dijon", "Angers", "Saint-Denis", "Villeurbanne", "Nîmes", "Clermont-Ferrand", "Aix-en-Provence", "Le Mans", "Brest", "Tours", "Amiens", "Limoges", "AnnecyNote", "Boulogne-Billancourt", "Perpignan", "Metz", "Besançon", "Orléans", "Saint-Denis", "Rouen", "Montreuil", "Argenteuil", "Mulhousee", "Caen", "Nancy", "Saint-Paul", "Roubaix", "Tourcoing", "Nanterre", "Vitry-sur-Seine", "Nouméa11", "Créteil", "Avignon", "Poitiers", "Aubervilliers"];

        $nbv = count($_ville);
        $tab = [];
        foreach ($_ville as $nom) {
            $tab[] = "(null,'$nom')";
        }
        $sql = "insert into ville values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération de $nbv ville</p>";

        //génération des cinema : 2 par ville
        $nbc = 2;
        $tab = [];
        for ($i = 1; $i <= $nbv; $i++) {
            for ($j = 1; $j <= $nbc; $j++) {
                $tab[] = "(null,'cinema $j-v$i','$i')";
            }
        }
        $sql = "insert into cinema values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération de $nbc cinema par ville</p>";

        //génération des matchs et des films: 10 films par semaine (total=500)
        $nbf = 0;
        $nbfmax = 500;
        $sem = 1;
        $tab = [];
        $date_sortie=[];
        for ($i = 1; $i <= 51; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $nbf++;
                $d = date("Y-m-d", mktime(0, 0, 0, 1, 1 * $sem, 2022));
                $date_sortie[]=mktime(0, 0, 0, 1, 1 * $sem, 2022);
                $y=$i+$j;
                $tab[] = "(null,'film $nbf','$d','Affiche $nbf')";
            };
            $sem = $sem + 7;
        }
        $sql = "insert into film values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération de $nbfmax film avec une fréquance de $nbf par semaine</p>";

        //génération des intervenats : 1000 intervenant
        $nbi = 1000;
        $tab = [];
        for ($i = 1; $i <= $nbi; $i++) {
            $tab[] = "(null,'Nom $i','Prenom $i')";
        }
        $sql = "insert into intervenant values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération de $nbi intervenants</p>";

        //génération des productions : 1 film est produit par 1 à 3 producteurs

        $tab = [];
        for ($i = 1; $i <= $nbfmax; $i++) {
            $nbprod =mt_rand(1,10)<2 ? 2 : 1;
            $t = range(1, 1000);
            shuffle($t);
            for ($j = 1; $j <= $nbprod; $j++) {

                $tab[] = "(null,'$t[$j]','$i')";
            }
        }
        $sql = "insert into produire values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération des producteurs des films/p>";

        //génération des participants : 1 film à 1 à 30 participants

        $tab = [];
        for ($i = 1; $i <= $nbfmax; $i++) {
            $nbpart = mt_rand(1, 30);
            $t = range(1, 1000);
            shuffle($t);
            for ($j = 1; $j <= $nbpart; $j++) {

                $tab[] = "(null,'$t[$j]','$i')";
            }
        }
        $sql = "insert into participer values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération des participant aux film</p>";
$c=$date_sortie[1];
$c2=$date_sortie[1]+1;
echo "<pre>";
print_r($c);
print_r($c2);
echo "</pre>";
        //grénaration des diffusions; 1 film est diffusé dans un cinéma pandant 4 semaine et dans 1 à 10 cinéma
        $tab = [];
        for ($i = 1; $i <= $nbfmax; $i++) {
            $nbcin = mt_rand(1, 40);
            $t = range(1, 100);
            shuffle($t);
            for ($j = 1; $j <= $nbcin; $j++) {
                $tmp=60*60*24*30;
                $date1 = date("Y-m-d",$date_sortie[$i]);
                $date2 =date("Y-m-d",$date_sortie[$i]+$tmp);
                $tab[] = "(null,'$date1','$date2','$i','$t[$j]')";
            }
        }
        $sql = "insert into diffuser values " . implode(",", $tab);
        mysqli_query($link, $sql);
        echo "<p>génération de 500 séance de cinéma</p>";

        



        ?>
    </main>

    <!-- pied de page -->
    <footer>
        <?php require("../include/inc_footer.php"); ?>
    </footer>
</body>

</html>