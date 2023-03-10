    <h2>intervenant</h2>
    <p><a class="btn btn-primary" href="<?= hlien("intervenant", "edit", "id", 0) ?>">Nouveau intervenant</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Nom</th>
    			<th>Prenom</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($data as $row) { ?>
    			<tr>

    				<td><?= mhe($row['int_id']) ?></td>
    				<td><?= mhe($row['int_nom']) ?></td>
    				<td><?= mhe($row['int_prenom']) ?></td>
    				<td><a class="btn btn-warning" href="<?= hlien("intervenant", "edit", "id", $row["int_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("intervenant", "delete", "id", $row["int_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>