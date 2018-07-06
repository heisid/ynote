<?php
    $page_title = "Browse by Tags";
    include "header.php";
    include "navbar.php";
    include_once "config.php";

    if (isset($_GET['tag'])) {
        $tag = $_GET['tag'];
        $sql = "SELECT tags.id_post AS id_post, posts.title_post AS title_post
                FROM tags
                INNER JOIN posts ON posts.id_post = tags.id_post
                WHERE tags.tag = '$tag' ";
        $result_sql = mysqli_query($db_handle, $sql);
    } else {
        $sql = "SELECT DISTINCT tag FROM tags";
        $result_sql = mysqli_query($db_handle, $sql);
    }

    if (isset($tag)) {
        echo "<h1>Post With Tag ".$tag." </h1>";
    } else {
    echo "<h1>Browse by Tags</h1>";
    }
    
    echo "<ul>";
    while($row = mysqli_fetch_array($result_sql)) {
        if (isset($tag)) {
            $list_content = $row['title_post'];
            $link = "readpost.php?id-post=" . $row[id_post];
        } else {
            $list_content = $row['tag'];
            $link = "tags.php?tag=" . $list_content;
        }
        echo "<li><a href='$link'>".$list_content."</a></li>";
    }
    echo "</ul>";

    include "tail.php";