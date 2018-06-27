<?php
include_once "config.php";

if (isset($_POST["post-submit"])) {
    $post_title = mysqli_real_escape_string($db_handle, $_POST["post-title"]);
    $post_content = mysqli_real_escape_string($db_handle, $_POST["post-content"]);
    
    if ($_POST["id-post"]) {
        $id_post = $_POST["id-post"];
        $sql = "UPDATE posts SET title_post='$post_title', content='$post_content'
        WHERE id_post='$id_post'";

    } else {
        $sql = "INSERT INTO posts (id_post, date_post, title_post, content)
        VALUE (NULL, NOW(), '$post_title', '$post_content')";
    }

    if (mysqli_query($db_handle, $sql)) {
        header("Location: index.php");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
        echo "<a href='newpost.php' class='btn btn-primary'>Back</a>";
    }

    mysqli_close($db_handle);
}
