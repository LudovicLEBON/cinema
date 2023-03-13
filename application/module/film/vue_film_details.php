<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="_images/affiches/<?= $fil_affiche ?>" class="card-img-top" alt="affiche">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $fil_titre ?></h5>
                <p class="card-text">Date de sortie : <?= $fil_date_sortie ?></p>
                <div class="card card-body">
                    <h6>Réalisateurs</h6>
                    <?php foreach ($realisateurs as $data) {
                        extract($data);
                        echo "<li>$int_nom $int_prenom</li>";
                    } ?>
                </div>
                <div class="card card-body">
                    <h6>Acteurs</h6>
                    <?php foreach ($acteurs as $data) {
                        extract($data);
                        echo "<li>$int_nom $int_prenom</li>";
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>