<?php partial("layout/header.php"); ?>
<?php partial("layout/nav.php"); ?>
    <h3 class="text-center text-info my-5"><?php echo $params->title; ?></h3>

    <div class="container">
        <div class="col-md-8 offset-md-2">
            <img src="<?php asset("imgs/$params->image"); ?>" alt="" class="img-fluid">
            <p class="mt-5"><?php echo $params->content; ?></p>
        </div>
    </div>
<?php partial("layout/footer.php"); ?>