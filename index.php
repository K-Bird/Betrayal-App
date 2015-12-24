<?php
$con = mysql_connect("localhost", 'root', 'Fly0Bird797979');

if (!$con) {
    die('Could not connect!' . mysql_error());
}

mysql_select_db("betrayalapp_db", $con);
?>

<html>
    <head>
        <title>Betrayal App</title>
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="libs/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <script src="libs/js/jquery.js"></script>
        <script src="libs/js/bootstrap.js"></script>
        <script src="libs/js/index.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="text-align : center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Betrayal App</h1>
                    <br><br>
                    <h3>Choose Characters Playing:</h3>
                </div>
            </div>
            <br><br>
            <?php include ('parts/checkActive.php'); ?>
            <div class="row pre-game-setup">
                <div class="col-lg-3">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="1" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf1 === 'Y') {
                echo "disabled";
            } ?>>Darrin "Flash Williams</button>
                        <button id="2" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf2 === 'Y') {
                echo "disabled";
            } ?>>Ox Bellows</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="3" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf3 === 'Y') {
                echo "disabled";
            } ?>>Professor Longfellow</button>
                        <button id="4" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf4 === 'Y') {
                echo "disabled";
            } ?>>Father Rhinehardt</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="5" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf5 === 'Y') {
                echo "disabled";
            } ?>>Madame Zostra</button>
                        <button id="6" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf6 === 'Y') {
                echo "disabled";
            } ?>>Vivian Lopez</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="7" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf7 === 'Y') {
                echo "disabled";
            } ?>>Brandon Jaspers</button>
                        <button id="8" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf8 === 'Y') {
                echo "disabled";
            } ?>>Peter Akimoto</button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row pre-game-setup">
                <div class="col-lg-6">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="9" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf9 === 'Y') {
                echo "disabled";
            } ?>>Zoe Ingstrom</button>
                        <button id="10" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf10 === 'Y') {
                echo "disabled";
            } ?>>Missy Dubourde</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn-group-sm" role="group" aria-label="...">
                        <button id="11" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf11 === 'Y') {
                        echo "disabled";
                    } ?>>Heather Granville</button>
                        <button id="12" type="button" class="btn btn-default addActiveChar" <?php if ($StatusOf12 === 'Y') {
                            echo "disabled";
                        } ?>>Jenny LeClerc</button>
                    </div>
                </div>
            </div>
            <div class="row pre-game-setup">
                <div class="col-lg-12">
                    <button id="resetChar" class="btn btn-warning">Reset Characters</button>
                    &nbsp;
                    <button class="btn btn-primary">Start Game</button>
                </div>
            </div>
            <br><br>
            <div class="row game-in-progress">
                <div class="col-lg-12">
                        <?php $GetActivePlayers = mysql_query("SELECT * FROM `active_characters`", $con); ?>
                    <table class="table table-condensed" style="text-align : center">
                        <tr>
                            <td>Character</td><td>Speed</td><td>Might</td><td>Sanity</td><td>Knowledge</td>
                        </tr>
                        <?php
                        while ($tableRow = mysql_fetch_array($GetActivePlayers)) {
                            $CharID = $tableRow['Character_ID'];
                            $GetCharName = mysql_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'", $con);
                            $valueOfName = mysql_fetch_object($GetCharName);
                            $name = $valueOfName->Persona;

                            $currentSpeedIndex = $tableRow['current_speed'];
                            $getSpeedScale = mysql_query("SELECT * FROM `stat_scale_speed` WHERE Row_ID='{$CharID}'", $con);
                            
                            $currentMightIndex = $tableRow['current_might'];
                            $getMightScale = mysql_query("SELECT * FROM `stat_scale_might` WHERE Row_ID='{$CharID}'", $con);
                            
                            $currentSanityIndex = $tableRow['current_sanity'];
                            $getSanityScale = mysql_query("SELECT * FROM `stat_scale_sanity` WHERE Row_ID='{$CharID}'", $con);
                            
                            $currentKnowledgeIndex = $tableRow['current_knowledge'];
                            $getKnowledgeScale = mysql_query("SELECT * FROM `stat_scale_knowledge` WHERE Row_ID='{$CharID}'", $con);

                            echo '<tr><td>' . $name . '</td>';

                            while ($speedScaleRow = mysql_fetch_array($getSpeedScale)) {

                            echo '<td>
                                  <span '; if ($currentSpeedIndex === '1') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['1'] . '</span>
                                  <span '; if ($currentSpeedIndex === '2') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['2'] . '</span>
                                  <span '; if ($currentSpeedIndex === '3') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['3'] . '</span>
                                  <span '; if ($currentSpeedIndex === '4') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['4'] . '</span>
                                  <span '; if ($currentSpeedIndex === '5') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['5'] . '</span>
                                  <span '; if ($currentSpeedIndex === '6') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['6'] . '</span>
                                  <span '; if ($currentSpeedIndex === '7') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['7'] . '</span>
                                  <span '; if ($currentSpeedIndex === '8') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['8'] . '</span>
                                  <span '; if ($currentSpeedIndex === '9') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $speedScaleRow['9'] . '</span>
                                  <br><br><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                  </td>';
                            }
                            
                            while ($mightScaleRow = mysql_fetch_array($getMightScale)) {
                                
                            echo '<td>
                                  <span '; if ($currentMightIndex === '1') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['1'] . '</span>
                                  <span '; if ($currentMightIndex === '2') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['2'] . '</span>
                                  <span '; if ($currentMightIndex === '3') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['3'] . '</span>
                                  <span '; if ($currentMightIndex === '4') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['4'] . '</span>
                                  <span '; if ($currentMightIndex === '5') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['5'] . '</span>
                                  <span '; if ($currentMightIndex === '6') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['6'] . '</span>
                                  <span '; if ($currentMightIndex === '7') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['7'] . '</span>
                                  <span '; if ($currentMightIndex === '8') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['8'] . '</span>
                                  <span '; if ($currentMightIndex === '9') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $mightScaleRow['9'] . '</span>
                                  <br><br><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                  </td>';      
                                  
                            }
                            
                            while ($sanityScaleRow = mysql_fetch_array($getSanityScale)) {
                                
                            echo '<td>
                                  <span '; if ($currentSanityIndex === '1') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['1'] . '</span>
                                  <span '; if ($currentSanityIndex === '2') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['2'] . '</span>
                                  <span '; if ($currentSanityIndex === '3') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['3'] . '</span>
                                  <span '; if ($currentSanityIndex === '4') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['4'] . '</span>
                                  <span '; if ($currentSanityIndex === '5') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['5'] . '</span>
                                  <span '; if ($currentSanityIndex === '6') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['6'] . '</span>
                                  <span '; if ($currentSanityIndex === '7') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['7'] . '</span>
                                  <span '; if ($currentSanityIndex === '8') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['8'] . '</span>
                                  <span '; if ($currentSanityIndex === '9') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $sanityScaleRow['9'] . '</span>
                                  <br><br><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                  </td>';      
                                  
                            }
                            
                            while ($knowledgeScaleRow = mysql_fetch_array($getKnowledgeScale)) {
                                
                            echo '<td>
                                  <span '; if ($currentKnowledgeIndex === '1') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['1'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '2') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['2'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '3') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['3'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '4') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['4'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '5') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['5'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '6') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['6'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '7') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['7'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '8') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['8'] . '</span>
                                  <span '; if ($currentKnowledgeIndex === '9') { echo 'class="label label-primary"'; } else { echo 'class="label label-default"'; } echo '>' . $knowledgeScaleRow['9'] . '</span>
                                  <br><br><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                  </td>';      
                                  
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="row game-in-progress">
                <div class="col-lg-12">
                    <button class="btn btn-danger">New Game</button>
                </div>
            </div>
        </div>
    </body>
</html>