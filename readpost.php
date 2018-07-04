<?php
    include_once "config.php";    
    if (isset($_GET['id-post'])) {
        $id_post = (int) $_GET['id-post'];
    }

    $sql_post = "SELECT * FROM posts WHERE id_post = '$id_post'";
    $sql_tags = "SELECT tag FROM tags
                INNER JOIN posts ON tags.id_post = posts.id_post 
                WHERE posts.id_post = '$id_post'";
    $result_sql_post = mysqli_query($db_handle, $sql_post);
    $result_sql_tags = mysqli_query($db_handle, $sql_tags);
    $res_sql_post_array = mysqli_fetch_array($result_sql_post);

    $title_post = $res_sql_post_array['title_post'];
    $date_post = $res_sql_post_array['date_post'];

    if (!is_null($res_sql_post_array['date_modified'])) {
        $date_modified = $res_sql_post_array['date_modified'];
    }

    $content = $res_sql_post_array['content'];

    $style = "readpost.css";
    $page_title = $title_post;
    include "header.php";
    include "navbar.php";

    echo "<h1>$title_post</h1>";
    echo "<p><em>$date_post</em><p>";
    if (isset($date_modified)) {
        echo "<p><em>(Last Modified $date_modified)</em></p>";
    }
    echo "<hr>";
    
    echo "<p>Tags: ";
    while ($tag = mysqli_fetch_array($result_sql_tags)) {
        echo $tag["tag"].", ";
    }
    echo "</p>";

    echo $content;
    echo "<hr>";
    ?>

    <a href="posting.php?id-post=<?php echo $id_post; ?>" class="btn btn-primary">Edit</a>
    <form class="form-delete" action="process.php" method="post">
        <button id="delete" class="btn btn-danger" type="submit" name="delete-post" value="<?php echo $id_post; ?>">Delete</button>
    </form>

    <script>
        $(document).ready(function () {
            $("#delete").click(function (event) {
                if (!confirm('Are you sure want to delete this post?')) {
                    event.preventDefault();
                }
            });
        });
    </script>

    <?php include "tail.php"; ?>