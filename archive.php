<?php
    $page_title = "Archive";
    include "header.php";
    include "navbar.php";
    include_once "config.php";

    $sql = "SELECT id_post, date_post, title_post FROM posts ORDER BY date_post DESC";
    $result_sql = mysqli_query($db_handle, $sql);

    echo "<h1>Post Archive</h1>";
    while($row = mysqli_fetch_array($result_sql)) {
        echo <<<EOD
    <div class="row">
        <div class="col-md-2">
            <em>{$row['date_post']}</em>
        </div>
        <div class="col-md-10">
            <a href="readpost.php?id-post={$row['id_post']}">{$row['title_post']}</a>
        </div>
    </div>
EOD;
    }

    include "tail.php";