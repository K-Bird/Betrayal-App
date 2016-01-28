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
        <script src="libs/js/game.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="text-align : center">
            <?php include ('nav/master_nav.php'); ?>
            <?php include ('parts/checkGameStatus.php'); ?>
            <div class="row" style="text-align: center">
                <div class="col-xs-12">
                     <?php if ($gm_status === 'Not Started') { include('parts/game/preGame.php'); } ?>
                     <?php if ($gm_status === 'Started') { include('parts/game/active_game.php'); } ?>
                </div>
            </div>
        </div>
    </body>
</html>