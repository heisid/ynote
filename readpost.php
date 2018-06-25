<?php
    include_once "config.php";    
    if (isset($_GET['id-post'])) {
        $id_post = (int) $_GET['id-post'];
    }

    $sql = "SELECT * FROM post WHERE id_post = '$id_post'";
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

    include "tail.php";