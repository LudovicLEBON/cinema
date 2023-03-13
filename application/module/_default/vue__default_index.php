<h1>Film à l'affiche</h1>
<div>
    <form method="post" action='<?= hlien("_default", "liste") ?>'>
        <p><label for="ville">Choisir sa ville</label>
            <select id="vil_id" name="vil_id" class='form-control'>
                <?= Table::HTMLoptions("select * from ville order by vil_nom", "vil_id", "vil_nom", $vil_id) ?>
            </select>

            <input class="btn btn-success" type="submit" name="valider" id="valider" value="Rechercher">
        </p>
    </form>
</div>