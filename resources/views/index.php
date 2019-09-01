<?php require_once("layout/header.php"); ?>
<?php require_once("layout/nav.php"); ?>
<div class="container mt-5">
    <div class="row">
        <?php foreach ($params as $post) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?php asset("imgs/$post->image"); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post->title; ?></h5>
                        <p class="card-text"><?php echo substr($post->description, 0, 100); ?></p>
                        <a href="<?php url("post/detail/$post->id"); ?>" class="btn btn-primary">Detail <i
                                    class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php require_once("layout/footer.php") ?>

