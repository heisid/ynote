<?php
    $page_title = "New Post";
    $style = "newpost.css";
    include "header.php";
    include "navbar.php";
?>
<script src="assets/js/ckeditor/ckeditor.js"></script>

<h1>New Post</h1>
<form action="process.php" method="post">
    <div class="form-group">
        <label for="post-title">Title</label>
        <input name="post-title" class="form-control form-control-lg" id="post-title" type="text" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="post-content">Content</label>
        <textarea name="post-content" id="post-content" row="10" col="80"></textarea>
        <script>
            CKEDITOR.replace("post-content");
        </script>
    </div>
    <div class="form-group">
        <label for="tags">Tags (separate with comma)</label>
        <input name="tags" class="form-control form-control-sm" id="tags" type="text">
    </div>
    <div class="form-group button-group">
        <button type="submit" name="post-submit" value="1" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php include "tail.php" ?>