    <form method="post" action="<?= hlien("ville", "save") ?>">
        <input type="hidden" name="vil_id" id="vil_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='vil_nom'>Nom</label>
            <input id='vil_nom' name='vil_nom' type='text' size='50' value='<?= mhe($vil_nom) ?>' class='form-control' />
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>