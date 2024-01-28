<form action="updatePost.php" method="POST">
    <input type="hidden" name="blogID" value=<?=$_GET['id']?>>
    <h3>Blog Title</h3>
    <input type="text" name="blogTitle" value=<?= $_GET['blogTitle']?>>
    <h3>Blog Description</h3>
    <input type="text" name="blogDescription" value=<?= $_GET['blogDescription']?>>
    <h3>Blog Category</h3>
    <input type="text" name="blogCategory" value=<?= $_GET['blogCategory']?>>
    <br>
    <input type="submit" value="Update">
</form>