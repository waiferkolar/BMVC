<?php partial("layout/header.php"); ?>
<?php partial("layout/nav.php"); ?>


<h3 class="text-center my-3 text-info">All Posts</h3>

<!--Post Table Start-->

<div class="container">
    <a href="<?php url("post/create"); ?>" class="btn btn-primary btn-sm mb-2">Create <i class="fa fa-plus"></i></a>
    <table class="table table-bordered">
        <thead>
        <tr class="bg-dark text-white">
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($params as $post) : ?>
            <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $post->title; ?></td>
                <td><img src="<?php asset("imgs/$post->image") ?>" alt="" width="50" height="50"></td>
                <td width="40%">@<?php echo substr($post->description,0,100); ?></td>
                <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!--Post Table End-->


<?php partial("layout/footer.php"); ?>


