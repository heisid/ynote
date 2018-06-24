<?php
    $page_title = "New Post";
    $style = "newpost.css";
    include "header.php";
    include "navbar.php";
?>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="assets/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#post-content',
    menubar: 'edit view format',
    height: '300px',
    branding: false
  });
</script>

<h1>New Post</h1>
<form action="process.php" method="post">
    <div class="form-group">
        <label for="post-title">Title</label>
        <input name="post-title" class="form-control form-control-lg" id="post-title" type="text" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="post-content">Content</label>
        <textarea name="post-content" id="post-content"></textarea>
    </div>
    <div class="form-group button-group">
        <button type="submit" name="post-submit" value="1" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php include "tail.php" ?>