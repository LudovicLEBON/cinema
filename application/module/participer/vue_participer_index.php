    <h2>participer</h2>
    <p><a class="btn btn-primary" href="<?= hlien("participer", "edit", "id", 0) ?>">Nouveau participer</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Intervenant</th>
    			<th>Film</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($data as $row) { ?>
    			<tr>

    				<td><?= mhe($row['par_id']) ?></td>
    				<td><?= mhe($row['int_nom']) ?> <?= mhe($row['int_prenom']) ?></td>
    				<td><?= mhe($row['fil_titre']) ?></td>
    				<td><a class="btn btn-warning" href="<?= hlien("participer", "edit", "id", $row["par_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("participer", "delete", "id", $row["par_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>