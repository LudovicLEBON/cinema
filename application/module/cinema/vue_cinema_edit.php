    <form method="post" action="<?= hlien("cinema", "save") ?>">
        <input type="hidden" name="cin_id" id="cin_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='cin_libelle'>Libelle</label>
            <input id='cin_libelle' name='cin_libelle' type='text' size='50' value='<?= mhe($cin_libelle) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='cin_ville'>Ville</label>
            <select id='cin_ville' name='cin_ville' class='form-control'>
                <?= Table::HTMLoptions("select * from ville order by vil_nom", "vil_id", "vil_nom", $cin_ville) ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>