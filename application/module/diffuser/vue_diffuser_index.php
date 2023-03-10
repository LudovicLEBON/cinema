    <h2>diffuser</h2>
    <p><a class="btn btn-primary" href="<?= hlien("diffuser", "edit", "id", 0) ?>">Nouveau diffuser</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Date_apparition</th>
    			<th>Date_disparition</th>
    			<th>Film</th>
    			<th>Cinema</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($data as $row) { ?>
    			<tr>

    				<td><?= mhe($row['dif_id']) ?></td>
    				<td><?= mhe($row['dif_date_apparition']) ?></td>
    				<td><?= mhe($row['dif_date_disparition']) ?></td>
    				<td><?= mhe($row['fil_titre']) ?></td>
    				<td><?= mhe($row['cin_libelle']) ?></td>
    				<td><a class="btn btn-warning" href="<?= hlien("diffuser", "edit", "id", $row["dif_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("diffuser", "delete", "id", $row["dif_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>