<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- OpenSans font -->
    <link rel="stylesheet" href="assets/css/OpenSans.css">
    <?php 
        if(isset($style)) {
            echo "<link rel='stylesheet' href='assets/css/".$style."'>";
        } else {
            echo "<link rel='stylesheet' href='assets/css/index.css'>";
        }
    ?>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <title>
        <?php echo $page_title ?>
    </title>

</head>

<body>
    <div class="container">