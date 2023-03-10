    <form method="post" action="<?= hlien("produire", "save") ?>">
        <input type="hidden" name="pro_id" id="pro_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='pro_intervenant'>Intervenant</label>
            <input id='pro_intervenant' name='pro_intervenant' class='form-control'>
            <?= Table::HTMLoptions("select * from intervenant order by int_nom", "int_id", "int_nom", $pro_intervenant) ?>
            </select>
        </div>
        <div class='form-group'>
            <label for='pro_film'>Film</label>
            <input id='pro_film' name='pro_film' class='form-control'>
            <?= Table::HTMLoptions("select * from film order by fil_titre", "fil_id", "fil_titre", $pro_film) ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>