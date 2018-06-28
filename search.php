<?php
    include_once "config.php";
    $page_title = "Search Result";
    include "header.php";
    include "navbar.php";

    if (isset($_GET["search"])) {
        $search = mysqli_real_escape_string($db_handle, $_GET["search"]);
        
        $sql = "SELECT * FROM posts
            WHERE 
            title_post LIKE '%$search%' OR
            content LIKE '%$search%'";
        $result_sql = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result_sql) == 0) {
            echo "<h3>No results found :(</h3>";
        }

        while($row = mysqli_fetch_array($result_sql)) {
            echo <<<EOD
            <h3>Search result for posts contains "<em>{$search}</em>"</h3>
            <div class="row">
                <div class="col-md-2">
                    <p><em>{$row['date_post']}</em><p>
                </div>
                <div class="col-md-10">
                    <a href="readpost.php?id-post={$row['id_post']}">{$row['title_post']}</a>
                </div>
            </div>
EOD;
        }
    }
?>
