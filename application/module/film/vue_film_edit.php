    <form method="post" action="<?= hlien("film", "save") ?>">
        <input type="hidden" name="fil_id" id="fil_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='fil_titre'>Titre</label>
            <input id='fil_titre' name='fil_titre' type='text' size='50' value='<?= mhe($fil_titre) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='fil_date_sortie'>Date_sortie</label>
            <input id='fil_date_sortie' name='fil_date_sortie' type='date' size='50' value='<?= mhe($fil_date_sortie) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='fil_affiche'>Affiche</label>
            <input id='fil_affiche' name='fil_affiche' type='text' size='5000' value='<?= mhe($fil_affiche) ?>' class='form-control' />
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>