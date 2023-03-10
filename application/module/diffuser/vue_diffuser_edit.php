    <form method="post" action="<?= hlien("diffuser", "save") ?>">
        <input type="hidden" name="dif_id" id="dif_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='dif_date_apparition'>Date_apparition</label>
            <input id='dif_date_apparition' name='dif_date_apparition' type='date' size='50' value='<?= mhe($dif_date_apparition) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='dif_date_disparition'>Date_disparition</label>
            <input id='dif_date_disparition' name='dif_date_disparition' type='date' size='50' value='<?= mhe($dif_date_disparition) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='dif_film'>Film</label>
            <select id='dif_film' name='dif_film' class='form-control'>
                <?= Table::HTMLoptions("select * from film order by fil_titre", "fil_id", "fil_titre", $dif_film) ?>
            </select>
        </div>
        <div class='form-group'>
            <label for='dif_cinema'>Cinema</label>
            <select id='dif_cinema' name='dif_cinema' class='form-control' s>
                <?= Table::HTMLoptions("select * from cinema order by cin_libelle", "cin_id", "cin_libelle", $dif_cinema) ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>