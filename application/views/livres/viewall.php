<?php include_once(ROOT . DS . 'application' . DS . 'views' . DS . 'header.php');?>
<div class="container">

    <div class="col-md-2 right">

        <form method="post" action="../livres/exportcsv" align="center">
            <input type="submit" name="export" value="CSV Export" class="btn btn-success" />
        </form>



    </div>

	<div class="row">
		<div class=" col-xs-8 col-xs-offset-2">
			<div class="panel " style="padding: 5px 5px 5px 5px;" >

				<form class="form-horizontal" enctype="multipart/form-data" action="../livres/add" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="titre">Titre:</label>
						<div class="col-sm-10">
							<input name= "titre" type="text" class="form-control" id="titre" placeholder=" titre" required>
						</div>
					</div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="reference">Reference:</label>
                        <div class="col-sm-10">
                            <input name = "reference" type="text" class="form-control" id="reference" placeholder=" la reference" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="genre" >Genre:</label>
                        <div class="col-sm-10">

                            <select name="genre" class="form-control" id="exampleFormControlSelect1">
                                <option value="Histoire">Histoire</option>
                                <option value="Geographie">Geographie</option>
                                <option value="Langues">Langues</option>
                                <option value="Littérature">Littérature</option>
                                <option value="Sciences">Sciences</option>
                                <option value="Arts">Arts</option>
                                <option value="Enseignement">Enseignement</option>
                                <option value="Manga">Manga</option>
                            </select>
                        </div>
                    </div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="auteur">Auteur:</label>
						<div class="col-sm-10">
							<input name = "auteur" type="text" class="form-control" id="auteur" placeholder=" l'auteur" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="image">Image: </label>

						<div class="col-sm-10">
							<input name= "image" type="file" class="form-control" id="image" placeholder=" " required>
                            Size_max 1MO

                        </div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-alert" value="add">Ajouter</button>
						</div>
					</div>
				</form>
			</div>


		</div>

			<?php $number = 0?>
			<?php foreach ($livres as $livre):?>

				<div class="col-sm-3 col-md-3 col-xs-12">
					<div class="thumbnail">
						<img style="height: 200px" src="<?php echo URL_BASE.'public/img/'.$livre['image']?>" alt="...">
						<div class="caption">
							<h3><?php echo $livre['titre']?></h3>
                            <h5><?php echo $livre['genre']?></h5>
                            <h5><?php echo $livre['reference']?></h5>
                            <h5><?php echo $livre['auteur']?></h5>

							<a href="../livres/view/<?php echo $livre['id']?>/<?php echo strtolower(str_replace(" ","-",$livre['titre']))?>" class="btn btn-danger" role="button">Supprimer</a></p>
						</div>
					</div>
				</div>

			<?php endforeach?>




	</div>

</div>




<?php include_once  (ROOT . DS . 'application' . DS . 'views' . DS . 'footer.php');?>










