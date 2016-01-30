<?php
include ('libs/db/db_functions.php');
?>

<html>
    <head>
        <title>Betrayal App - Setup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="libs/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="libs/css/appTheme.css" rel="stylesheet" type="text/css">
        <script src="libs/js/jquery.js"></script>
        <script src="libs/js/bootstrap.js"></script>
        <script src="libs/js/setup.js"></script>
    </head>
    <body id="setupPage">
        <div class="container-fluid" style="text-align : center">
        <?php include ('nav/master_nav.php'); ?>
        <?php include ('parts/checkGameStatus.php'); ?>
            <div class="row">
                <div class="col-xs-12">
                    <h2><span class="label label-default">Betrayal App: Game Setup</span></h2>
                    <br><br>
                    <h3 <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>><span class="label label-default">Choose Characters Playing:</span></h3>
                    <?php if ($gm_status === 'Started') { 
                      echo '<h3><span class="label label-default">Game In Progress</span></h3>';
                      if ($haunt_status === 'Y') {
                         echo '<span class="label label-default">Haunt Started: </span>&nbsp;<input id="hauntCheck" checked type="checkbox"><br><br>';
                        }
                        if ($haunt_status === 'N') {
                             echo '<h3><span class="label label-default">Haunt Started: &nbsp;<input id="hauntCheck" type="checkbox"></span></h3><br><br>';
                        }
                        echo '<button id="newGameBtn" class="btn btn-danger">New Game</button><br>';
                        }
                    ?>
                </div>
            </div>
            <br><br>
            <?php include ('parts/checkActive.php'); ?>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-6" style = "text-align : left">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <img src="libs/images/1.png" height="60" width="60"></img>
                        <button id="1" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf1 === 'Y') { echo "disabled"; } ?>>Darrin "Flash Williams</button>
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <img src="libs/images/2.png" height="60" width="60"></img>
                        <button id="2" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf2 === 'Y') { echo "disabled"; } ?>>Ox Bellows</button>
                    </div>
                 </div>
                 <div class="col-xs-6"  style = "text-align : right">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="3" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf3 === 'Y') { echo "disabled"; } ?>>Professor Longfellow</button>
                        <img src="libs/images/3.png" height="60" width="60"></img>
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <button id="4" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf4 === 'Y') { echo "disabled"; } ?>>Father Rhinehardt</button>
                        <img src="libs/images/4.png" height="60" width="60"></img>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-6" style = "text-align : left">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <img src="libs/images/5.png" height="60" width="60"></img>
                        <button id="5" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf5 === 'Y') { echo "disabled"; } ?>>Madame Zostra</button>
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <img src="libs/images/6.png" height="60" width="60"></img>
                        <button id="6" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf6 === 'Y') { echo "disabled"; } ?>>Vivian Lopez</button>
                    </div>
                </div>
                <div class="col-xs-6" style = "text-align : right">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="7" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf7 === 'Y') { echo "disabled"; } ?>>Brandon Jaspers</button>
                        <img src="libs/images/7.png" height="60" width="60"></img>                       
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <button id="8" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf8 === 'Y') { echo "disabled"; } ?>>Peter Akimoto</button>
                        <img src="libs/images/8.png" height="60" width="60"></img>
                    </div>                
                </div>
            </div>
            <br>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-6" style = "text-align : left">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <img src="libs/images/9.png" height="60" width="60"></img>
                        <button id="9" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf9 === 'Y') { echo "disabled"; } ?>>Zoe Ingstrom</button>
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <img src="libs/images/10.png" height="60" width="60"></img>
                        <button id="10" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf10 === 'Y') { echo "disabled"; } ?>>Missy Dubourde</button>
                   </div>
                </div>
                <div class="col-xs-6" style = "text-align : right">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="11" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf11 === 'Y') { echo "disabled"; } ?>>Heather Granville</button>
                        <img src="libs/images/11.png" height="60" width="60"></img>
                        <br>
                        <kbd>or</kbd>
                        <br>
                        <button id="12" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf12 === 'Y') { echo "disabled"; } ?>>Jenny LeClerc</button>
                        <img src="libs/images/12.png" height="60" width="60"></img>
                    </div>  
                </div>
            </div>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-12">
                    <br>
                    <button id="resetChar" class="btn btn-warning">Reset All Characters</button>
                    &nbsp;
                    <button id="startGameBtn" class="btn btn-primary">Start Game</button>
                </div>
            </div>
            <br><br>
            <div class="row" <?php if ($gm_status === 'Started') { echo 'style="display: none"'; } ?>>
                <div class="col-xs-12">
                        <?php $GetActivePlayers = db_query("SELECT * FROM `active_characters`"); ?>
                    <table class="table table-condensed" style="text-align : center; color: white">
                        <tr>
                            <td colspan="2"> <h2><span class="label label-default">Characters Added To Game</span></h2></td>
                        </tr>
                        <?php
                        while ($activePlayerRow = $GetActivePlayers->fetch_assoc()) {
                            $CharID = $activePlayerRow['Character_ID'];
                            $GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
                            $valueOfName = $GetCharName->fetch_assoc();
                            $name = $valueOfName['Persona'];

                            echo '<tr><td style="text-align: right"> <h4><span class="label label-default">'.$name.'</span></h4></td><td style="text-align: left"><button class="btn btn-danger btn-sm removeCharGm" data-id="'.$CharID.'" >Remove '.$name.'</tr>';
                                  
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="text-align: center">
                <?php if ($gm_status === 'Started') { 
                }
                     ?>
            </div>
        </div>
    </body>
</html>