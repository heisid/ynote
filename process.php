<?php
include_once "config.php";

function redirect() {
    header("Location: index.php");
    die();
}

if (isset($_POST["post-submit"])) {
    $post_title = mysqli_real_escape_string($db_handle, $_POST["post-title"]);
    $post_content = mysqli_real_escape_string($db_handle, $_POST["post-content"]);
    $tags = mysqli_real_escape_string($db_handle, $_POST["tags"]);
    $tags_array = explode(",", $tags);
    
    if ($_POST["id-post"]) {
        $id_post = $_POST["id-post"];
        $sql = "UPDATE posts SET date_modified=NOW(), title_post='$post_title', content='$post_content'
        WHERE id_post='$id_post';";
        $sql .= "DELETE FROM tags WHERE id_post='$id_post';";
        foreach ($tags_array as $tag) {
            $sql .= "INSERT INTO tags (id_post, tag) VALUES ('$id_post', '$tag');";
        }
    } else {
        $sql = "INSERT INTO posts (id_post, date_post, date_modified, title_post, content)
        VALUE (NULL, NOW(), NULL, '$post_title', '$post_content');";
        foreach ($tags_array as $tag) {
            $sql .= "INSERT INTO tags (id_post, tag) VALUES (LAST_INSERT_ID(), '$tag');";
        }
    }


    if (mysqli_multi_query($db_handle, $sql)) {
        redirect();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
        echo "<a href='posting.php' class='btn btn-primary'>Back</a>";
    }

} elseif (isset($_POST["delete-post"])) {
    $id_post = $_POST["delete-post"];
    $sql = "DELETE FROM posts WHERE id_post='$id_post'";

    if (mysqli_query($db_handle, $sql)) {
        redirect();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
        echo "<a href='readpost.php?id-post=$id_post' class='btn btn-primary'>Back</a>";
    }

    redirect();

} else {
    redirect();
}
