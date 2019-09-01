<?php partial("layout/header.php"); ?>
<?php partial("layout/nav.php"); ?>
<h1 class="text-center text-info my-5"> Create Post Page</h1>

<!--Form Start-->
<div class="container mb-5">
    <div class="col-md-8 offset-md-2">
        <form method="post" action="<?php url("post/create"); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cat">Category</label>
                <select class="form-control" id="cat" name="cat">
                    <option value="1">PHP</option>
                    <option value="2">Java</option>
                    <option value="3">Android</option>
                    <option value="4">IOS</option>
                    <option value="5">Python</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm float-right">Post</button>
        </form>
    </div>
</div>
<!--Form End -->


<?php partial("layout/footer.php"); ?>


