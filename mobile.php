<?php
include ('libs/db/db_functions.php');
?>
<html>
    <head>
        <title>Betrayal App - Mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="libs/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <script src="libs/js/jquery.js"></script>
        <script src="libs/js/bootstrap.js"></script>
        <script src="libs/js/mobile.js"></script>
    </head>
    <body>
        <?php include ('parts/checkGameStatus.php'); ?>
        <div class="row" style="text-align: center">
            <div class="col-xs-12">
                 <?php if ($gm_status === 'Not Started') { include('parts/mobile/mobile_preGame.php'); } ?>
                 <?php if ($gm_status === 'Started') { include('parts/mobile/mobile_game.php'); } ?>
            </div>
        </div>
    </body>
</html>