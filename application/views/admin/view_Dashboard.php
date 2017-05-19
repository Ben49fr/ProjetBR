<div class='container'>
    <div class="panel panel-default">
    	<div class="panel-info">
	  		<div class="panel-heading"><b>Liste des galeries</b></div>
	            <table class='table-hover table-bordered table-condensed'>
					<tr>
						<th>id</th>
						<th>Photo de galerie</th>
						<th>Nom de la galerie</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
	                <?php foreach($galleries as $gallery) { ?>
	                 <tr>
	    				<td><?=$gallery->id?></td>
	    				<td><img class='imgmini' src="<?=$gallery->getGaleriePicture()?>" alt=""/></td>
	    				<td><?=$gallery->name?></td>
	    				<td><?=$gallery->shortDescription?></td>
	    				<td>
	    					<a class='btn btn-danger' href="<?=base_url()?>admin/galeries/supprimer?galleryId=<?=$gallery->id?>">Supprimer</a>
	    					<a class='btn btn-info' href="<?=base_url()?>admin/galeries/modifier?galleryId=<?=$gallery->id?>">Modifier</a>
	    				</td>
	    			</tr>
	                    <?php } ?>
					<tr>
						<td>
							<a class='btn btn-success' href="<?=base_url()?>admin/galeries/ajouter">Créer une nouvelle galerie</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
