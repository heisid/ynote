<?php
    include_once "config.php";

    if (isset($_GET['id-post'])) {
        $id_post = (int) $_GET['id-post'];
        $sql_post = "SELECT * FROM posts
                    WHERE id_post = '$id_post'";
        $sql_tags = "SELECT tag FROM tags WHERE id_post='$id_post'";
        $result_sql_post = mysqli_query($db_handle, $sql_post);
        $result_sql_tags = mysqli_query($db_handle, $sql_tags);

        $res_post_array = mysqli_fetch_array($result_sql_post);

        $title_post = $res_post_array['title_post'];
        $date_post = $res_post_array['date_post'];
        $content = $res_post_array['content'];

        $tags_array = array();
        while ($row = mysqli_fetch_array($result_sql_tags)) {
            $tags_array[] = $row["tag"];
        }

        $tags_string = implode(",", $tags_array);

    }

    if (isset($id_post)) {
        $page_title = "Edit - ". $title_post;
    } else {
        $page_title = "New Post";
    }
    $style = "posting.css";
    include "header.php";
    include "navbar.php";
?>

<script src="assets/js/ckeditor/ckeditor.js"></script>

<?php
    if(isset($id_post)) {
        echo "<h1>Edit</h1>";
    } else {
        echo "<h1>New Post</h1>";
    }
?>
<form action="process.php" method="post">
    <?php
        if(isset($id_post))
            echo "<input type='hidden' name='id-post' value='$id_post'>";
    ?>
    <div class="form-group">
        <label for="post-title">Title</label>
        <input name="post-title" class="form-control form-control-lg" id="post-title" type="text" 
            <?php
                if(isset($title_post)) echo "value='$title_post'";
            ?>
        >
    </div>
    <div class="form-group">
        <label for="post-content">Content</label>
        <textarea name="post-content" id="post-content">
            <?php 
                if(isset($content)) echo $content; 
            ?>
        </textarea>
        <script>
            $(document).ready(function() {
                CKEDITOR.replace("post-content");
            });
        </script>
    </div>
    <div class="form-group">
        <label for="tags">Tags (separate with comma)</label>
        <input name="tags" class="form-control form-control-sm" id="tags" type="text"
            <?php
                if(isset($tags_string)) echo "value='$tags_string'";
            ?>
        >
    </div>
    <div class="form-group button-group">
        <button type="submit" name="post-submit" value="1" class="btn btn-primary">
            <?php
                if(isset($id_post)) {
                    echo "Save";
                } else {
                    echo "Post";
                }
            ?>
        </button>
    </div>
</form>

<?php include "tail.php" ?>
