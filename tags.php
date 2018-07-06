<?php
    $page_title = "Browse by Tags";
    include "header.php";
    include "navbar.php";
    include_once "config.php";

    if (isset($_GET['tag'])) {
        $tag = $_GET['tag'];
        $sql = "SELECT id_post FROM tags where tag = '$tag' ";
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
        echo "<li><a href='#'>".$row['tag']."</a></li>";
    }
    echo "</ul>";

    include "tail.php";