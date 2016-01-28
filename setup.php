<?php
include ('libs/db/db_functions.php');
?>

<html>
    <head>
        <title>Betrayal App - Setup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="libs/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <script src="libs/js/jquery.js"></script>
        <script src="libs/js/bootstrap.js"></script>
        <script src="libs/js/setup.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="text-align : center">
        <?php include ('nav/master_nav.php'); ?>
        <?php include ('parts/checkGameStatus.php'); ?>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Betrayal App: Game Setup</h2>
                    <h3 <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>Choose Characters Playing:</h3>
                </div>
            </div>
            <br><br>
            <?php include ('parts/checkActive.php'); ?>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-12">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="1" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf1 === 'Y') { echo "disabled"; } ?>>Darrin "Flash Williams</button>
                        <kbd>or</kbd>
                        <button id="2" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf2 === 'Y') { echo "disabled"; } ?>>Ox Bellows</button>
                    </div>
                    <br>
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="3" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf3 === 'Y') { echo "disabled"; } ?>>Professor Longfellow</button>
                        <kbd>or</kbd>
                        <button id="4" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf4 === 'Y') { echo "disabled"; } ?>>Father Rhinehardt</button>
                    </div>
                    <br>
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="5" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf5 === 'Y') { echo "disabled"; } ?>>Madame Zostra</button>
                        <kbd>or</kbd>
                        <button id="6" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf6 === 'Y') { echo "disabled"; } ?>>Vivian Lopez</button>
                    </div>
                    <br>
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="7" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf7 === 'Y') { echo "disabled"; } ?>>Brandon Jaspers</button>
                        <kbd>or</kbd>
                        <button id="8" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf8 === 'Y') { echo "disabled"; } ?>>Peter Akimoto</button>
                    </div>
                    <br>
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="9" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf9 === 'Y') { echo "disabled"; } ?>>Zoe Ingstrom</button>
                        <kbd>or</kbd>
                        <button id="10" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf10 === 'Y') { echo "disabled"; } ?>>Missy Dubourde</button>
                    </div>
                    <br>
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="11" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf11 === 'Y') { echo "disabled"; } ?>>Heather Granville</button>
                        <kbd>or</kbd>
                        <button id="12" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf12 === 'Y') { echo "disabled"; } ?>>Jenny LeClerc</button>
                    </div>
                </div>
            </div>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-12">
                    <br>
                    <button id="resetChar" class="btn btn-warning">Reset Characters</button>
                    &nbsp;
                    <button id="startGameBtn" class="btn btn-primary">Start Game</button>
                </div>
            </div>
            <br><br>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-12">
                        <?php $GetActivePlayers = db_query("SELECT * FROM `active_characters`"); ?>
                    <table class="table table-condensed" style="text-align : center">
                        <tr>
                            <td colspan="2">Characters For Game</td>
                        </tr>
                        <?php
                        while ($activePlayerRow = $GetActivePlayers->fetch_assoc()) {
                            $CharID = $activePlayerRow['Character_ID'];
                            $GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
                            $valueOfName = $GetCharName->fetch_assoc();
                            $name = $valueOfName['Persona'];

                            echo '<tr><td>'.$name.'</td><td><button class="btn btn-danger removeCharGm" data-id="'.$CharID.'" >Remove '.$name.'</tr>';
                                  
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <?php if ($gm_status === 'Started') { 
                    if ($haunt_status === 'Y') {
                         echo '<label>Haunt Started: </label>&nbsp;<input id="hauntCheck" checked type="checkbox"><br><br>';
                    }
                    if ($haunt_status === 'N') {
                         echo '<label>Haunt Started: </label>&nbsp;<input id="hauntCheck" type="checkbox"><br><br>';
                    }
                    echo '<button id="newGameBtn" class="btn btn-danger">New Game</button><br>';
                    echo '<h1>Game In Progress</h1><br>';
                    } ?>
            </div>
        </div>
    </body>
</html>