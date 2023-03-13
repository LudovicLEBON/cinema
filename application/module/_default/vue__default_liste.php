<h1>Film à l'affiche</h1>
<div>
    <form method="post" action="<?= hlien("_default", "liste") ?>">
        <p><label for="vil_id">Choisir sa ville</label>
            <select id="vil_id" name="vil_id" class='form-control'>
                <?= Table::HTMLoptions("select * from ville order by vil_nom", "vil_id", "vil_nom", $vil_id) ?>
            </select>
            <input type="submit" id="valider" value="Rechercher" class="btn btn-success">

        </p>
    </form>
</div>
<div>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>

                <th> Cinéma </th>
                <th> film </th>
                <th> diffusé </th>
                <th> détaille </th>

            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST["valider"])) {

                foreach ($data as $row) { ?> <tr>

                        <td> <?= mhe($row['cin_libelle']) ?> </td>
                        <td> <?= mhe($row['fil_affiche']) ?><br /> <?= mhe($row['fil_titre']) ?> </td>
                        <td> <?= mhe($row['nbjour']) ?> jours </td>
                        <td>
                            <a class="btn btn-warning" href="<?= hlien("film", "details", "id", $row["fil_id"]) ?>"> Détails </a>
                        </td>

                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>