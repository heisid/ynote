<?php
    $page_title = "Browse by Tags";
    include "header.php";
    include "navbar.php";
    include_once "config.php";

    $sql = "SELECT DISTINCT tag FROM tags";
    $result_sql = mysqli_query($db_handle, $sql);

    echo "<h1>Browse by Tags</h1>";
    echo "<ul>";
    while($row = mysqli_fetch_array($result_sql)) {
        echo "<li><a href='#'>".$row['tag']."</a></li>";
    }
    echo "</ul>";

    include "tail.php";