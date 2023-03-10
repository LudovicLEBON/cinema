    <h2>ville</h2>
    <p><a class="btn btn-primary" href="<?= hlien("ville", "edit", "id", 0) ?>">Nouveau ville</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Nom</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($data as $row) { ?>
    			<tr>

    				<td><?= mhe($row['vil_id']) ?></td>
    				<td><?= mhe($row['vil_nom']) ?></td>
    				<td><a class="btn btn-warning" href="<?= hlien("ville", "edit", "id", $row["vil_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("ville", "delete", "id", $row["vil_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>