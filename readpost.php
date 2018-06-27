<?php
    include_once "config.php";    
    if (isset($_GET['id-post'])) {
        $id_post = (int) $_GET['id-post'];
    }

    $sql = "SELECT * FROM posts WHERE id_post = '$id_post'";
    $result_sql = mysqli_query($db_handle, $sql);
    $res_sql_array = mysqli_fetch_array($result_sql);

    $title_post = $res_sql_array['title_post'];
    $date_post = $res_sql_array['date_post'];
    $content = $res_sql_array['content'];

    $page_title = $title_post;
    include "header.php";
    include "navbar.php";

    echo "<h1>$title_post</h1>";
    echo "<p><em>$date_post</em><p>";
    echo $content;

    echo "<a href='posting.php?id-post=$id_post' class='btn btn-primary'>Edit</a>";

    include "tail.php";