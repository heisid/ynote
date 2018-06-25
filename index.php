<?php
    $page_title = "Y-NOTE?";
    include "header.php";
    include "navbar.php";
    include_once "config.php";

    $sql = "SELECT title_post, date_post, content
            FROM post
            ORDER BY date_post DESC
            LIMIT 5";
    $result_sql = mysqli_query($db_handle, $sql);

?>
<div class="container">
    <h1>LATEST POSTS</h1>

    <?php
        while($row = mysqli_fetch_array($result_sql)) {
            $content_no_html = strip_tags($row['content']);
            $content_crop = substr($content_no_html, 0, 500);
            echo <<<EOD
    <div class="row">
        <div class="col-md-12">
            <h3>{$row['title_post']}</h3>
            <p><em>{$row['date_post']}</em><p>
            <p>{$content_crop}</p>
        </div>
    </div>
EOD;
        };
    ?>

</div>
<?php include "tail" ?>
