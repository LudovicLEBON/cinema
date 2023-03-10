    <form method="post" action="<?= hlien("participer", "save") ?>">
        <input type="hidden" name="par_id" id="par_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='par_intervenant'>Intervenant</label>
            <select id='par_intervenant' name='par_intervenant' class='form-control'>
                <?= Table::HTMLoptions("select * from intervenant order by int_nom", "int_id", "int_nom", $par_intervenant) ?>
            </select>
        </div>
        <div class='form-group'>
            <label for='par_film'>Film</label>
            <select id='par_film' name='par_film' class='form-control'>
                <?= Table::HTMLoptions("select * from film order by fil_titre", "fil_id", "fil_titre", $par_film) ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>