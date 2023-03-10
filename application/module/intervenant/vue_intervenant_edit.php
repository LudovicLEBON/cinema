    <form method="post" action="<?= hlien("intervenant", "save") ?>">
        <input type="hidden" name="int_id" id="int_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='int_nom'>Nom</label>
            <input id='int_nom' name='int_nom' type='text' size='50' value='<?= mhe($int_nom) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='int_prenom'>Prenom</label>
            <input id='int_prenom' name='int_prenom' type='text' size='50' value='<?= mhe($int_prenom) ?>' class='form-control' />
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>