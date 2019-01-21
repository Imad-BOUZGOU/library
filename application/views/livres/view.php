<?php include_once(ROOT . DS . 'application' . DS . 'views' . DS . 'header.php');?>

<div class="container" style="opacity:0.9">

    <div class="col-sm-3 col-md-3 " >
        <div class="thumbnail">
            <img style="height: 200px" src="<?php echo URL_BASE.'public/img/'.$livre['image']?>" alt="...">
            <div class="caption">
                <h3><?php echo $livre['titre']?></h3>
                <h5><?php echo $livre['genre']?></h5>
                <h5><?php echo $livre['reference']?></h5>
                <h5><?php echo $livre['auteur']?></h5>
                <a class="big" href="../../../livres/delete/<?php echo $livre['id']?>">
	<span class="item">
	Supprimer ce livre
	</span>
                </a>

            </div>
        </div>
    </div>

</div>





<?php include_once  (ROOT . DS . 'application' . DS . 'views' . DS . 'footer.php');?>
