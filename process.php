<?php
include_once "config.php";

if ($_POST["post-submit"]) {
    $post_title = mysqli_real_escape_string($db_handle, $_POST["post-title"]);
    $post_content = mysqli_real_escape_string($db_handle, $_POST["post-content"]);

    $sql = "INSERT INTO post (id_post, date_post, title_post, content)
    VALUE (NULL, NOW(), '$post_title', '$post_content')";

    if (mysqli_query($db_handle, $sql)) {
        echo "Post success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
    }

    mysqli_close($db_handle);
}