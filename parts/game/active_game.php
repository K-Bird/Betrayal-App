<br>
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Character <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
     <?php
            $GetActivePlayers = db_query("SELECT * FROM `active_characters`");
             while ($activePlayerRow = $GetActivePlayers->fetch_assoc()) {
                $CharID = $activePlayerRow['Character_ID'];
                $IsPlayedBy = $activePlayerRow['PlayedBy'];
                $GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
                $valueOfName = $GetCharName->fetch_assoc();
                $name = $valueOfName['Persona'];
                if (!empty($IsPlayedBy)) {
                    echo '<li class="viewGameChar" data-id="'.$CharID.'"><a href="#">'.$name.' : '.$IsPlayedBy.'</a></li>';
                } else {
                    echo '<li data-toggle="modal" data-target="#claimCharacter'.$CharID.'" ><a>'.$name.' : Not Claimed</a></li>';
                }
             }
        ?>
  </ul>
</div>
<br><br>
<?php

$GetSelectedPlayer = db_query("SELECT * FROM `active_characters`");
 
while ($playerRow = $GetSelectedPlayer->fetch_assoc()) {
$CharID = $playerRow['Character_ID'];
$PlayedBy = $playerRow['PlayedBy'];
if (empty($PlayedBy)) {
    $PlayedBy = "Player Not Yet In App";
}
$GetCharName = db_query("SELECT `Persona` FROM `characters_list` WHERE Row_ID='{$CharID}'");
$valueOfName = $GetCharName->fetch_assoc();
$name = $valueOfName['Persona'];

$currSpeed = $playerRow['current_speed'];
$currMight = $playerRow['current_might'];
$currSanity = $playerRow['current_sanity'];
$currKnowledge = $playerRow['current_knowledge'];

if ($currSpeed === '1' || $currMight === '1' || $currSanity === '1' || $currKnowledge === '1' ) {
  
  echo ' <h2 id="charDead'.$CharID.'" class="deadLabel"><span class="label label-danger">'.$name.' is Dead</span></h2>';
 
} else {
 
 echo '<table style="color: white; text-align: center; border : none" id="charTable'.$CharID.'" class="table table-condensed" style="text-align : center">
 <tr>
 <td>
 <h2><img src="libs/images/'.$CharID.'.png" height="60" width="60"></img><span class="label label-default">'. $name ." : ". $PlayedBy .'</span></h2>
 </td>
 </tr>
 
 <tr>';
 
 $currentSpeedIndex = $playerRow['current_speed'];
 $getSpeedScale = db_query("SELECT * FROM `stat_scale_speed` WHERE Row_ID='{$CharID}'");
 $speedScaleRow = $getSpeedScale->fetch_assoc();
 
 echo '<td><kbd>Speed</kbd><br>';
 if ($currentSpeedIndex === '1') {
  echo '<button class="btn btn-lg btn-danger" disabled> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>';
 } else {
  echo '<button class="btn btn-lg btn-danger attrChg" data-attr="speed" data-id="'.$CharID.'" data-chg="down"> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button>';
 }
 echo '
 <div class="btn-group btn-group-lg" role="group">
  <button '; if ($currentSpeedIndex === '1') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default deadBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="1"'; } echo '><img src="libs/images/skull.png" height="23px" width="20px"></img></button>
  <button '; if ($currentSpeedIndex === '2') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="2"'; } echo '>' . $speedScaleRow['2'] . '</button>
  <button '; if ($currentSpeedIndex === '3') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="3"'; } echo '>' . $speedScaleRow['3'] . '</button>
  <button '; if ($currentSpeedIndex === '4') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="4"'; } echo '>' . $speedScaleRow['4'] . '</button>
  <button '; if ($currentSpeedIndex === '5') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="5"'; } echo '>' . $speedScaleRow['5'] . '</button>
  <button '; if ($currentSpeedIndex === '6') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="6"'; } echo '>' . $speedScaleRow['6'] . '</button>
  <button '; if ($currentSpeedIndex === '7') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="7"'; } echo '>' . $speedScaleRow['7'] . '</button>
  <button '; if ($currentSpeedIndex === '8') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="8"'; } echo '>' . $speedScaleRow['8'] . '</button>
  <button '; if ($currentSpeedIndex === '9') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="speed" data-attrnum="9"'; } echo '>' . $speedScaleRow['9'] . '</button>
 </div>';
 if ($currentSpeedIndex === '9') {
  echo '&nbsp;<button class="btn btn-lg btn-success" disabled> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 
 } else {
  echo '&nbsp;<button class="btn btn-lg btn-success attrChg" data-attr="speed" data-id="'.$CharID.'" data-chg="up"> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 }
 echo '</tr>
 
 <tr>';
 
 $currentMightIndex = $playerRow['current_might'];
 $getMightScale = db_query("SELECT * FROM `stat_scale_might` WHERE Row_ID='{$CharID}'");
 $mightScaleRow = $getMightScale->fetch_assoc();
 
 echo '<td><kbd>Might</kbd><br>';
 if ($currentMightIndex === '1') {
 echo '<button class="btn btn-lg btn-danger" disabled> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 } else {
 echo '<button class="btn btn-lg btn-danger attrChg" data-attr="might" data-id="'.$CharID.'" data-chg="down"> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 }
 echo
 '<div class="btn-group btn-group-lg" role="group">
  <button '; if ($currentMightIndex === '1') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default deadBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="1"'; } echo '><img src="libs/images/skull.png" height="23px" width="20px"></img></button>
  <button '; if ($currentMightIndex === '2') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="2"'; } echo '>' . $mightScaleRow['2'] . '</button>
  <button '; if ($currentMightIndex === '3') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="3"'; } echo '>' . $mightScaleRow['3'] . '</button>
  <button '; if ($currentMightIndex === '4') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="4"'; } echo '>' . $mightScaleRow['4'] . '</button>
  <button '; if ($currentMightIndex === '5') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="5"'; } echo '>' . $mightScaleRow['5'] . '</button>
  <button '; if ($currentMightIndex === '6') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="6"'; } echo '>' . $mightScaleRow['6'] . '</button>
  <button '; if ($currentMightIndex === '7') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="7"'; } echo '>' . $mightScaleRow['7'] . '</button>
  <button '; if ($currentMightIndex === '8') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="8"'; } echo '>' . $mightScaleRow['8'] . '</button>
  <button '; if ($currentMightIndex === '9') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="might" data-attrnum="9"'; } echo '>' . $mightScaleRow['9'] . '</button>
 </div>';
 if ($currentMightIndex === '9') {
 echo '&nbsp;<button class="btn btn-lg btn-success" disabled> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 
 } else {
 echo '&nbsp;<button class="btn btn-lg btn-success attrChg" data-attr="Might" data-id="'.$CharID.'" data-chg="up"> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 }
 echo '</td>';     
 
 echo '</tr>
 
 <tr>';
 
 $currentSanityIndex = $playerRow['current_sanity'];
 $getSanityScale = db_query("SELECT * FROM `stat_scale_sanity` WHERE Row_ID='{$CharID}'");
 $sanityScaleRow = $getSanityScale->fetch_assoc();
 
 echo '<td><kbd>Sanity</kbd><br>';
 if ($currentSanityIndex === '1') {
  echo '<button class="btn btn-lg btn-danger" disabled> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 } else {
  echo '<button class="btn btn-lg btn-danger attrChg" data-attr="sanity" data-id="'.$CharID.'" data-chg="down"> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 }
 echo 
 '<div class="btn-group btn-group-lg" role="group">
  <button '; if ($currentSanityIndex === '1') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default deadBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="1"'; } echo '><img src="libs/images/skull.png" height="23px" width="20px"></img></button>
  <button '; if ($currentSanityIndex === '2') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="2"'; } echo '>' . $sanityScaleRow['2'] . '</button>
  <button '; if ($currentSanityIndex === '3') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="3"'; } echo '>' . $sanityScaleRow['3'] . '</button>
  <button '; if ($currentSanityIndex === '4') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="4"'; } echo '>' . $sanityScaleRow['4'] . '</button>
  <button '; if ($currentSanityIndex === '5') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="5"'; } echo '>' . $sanityScaleRow['5'] . '</button>
  <button '; if ($currentSanityIndex === '6') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="6"'; } echo '>' . $sanityScaleRow['6'] . '</button>
  <button '; if ($currentSanityIndex === '7') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="7"'; } echo '>' . $sanityScaleRow['7'] . '</button>
  <button '; if ($currentSanityIndex === '8') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="8"'; } echo '>' . $sanityScaleRow['8'] . '</button>
  <button '; if ($currentSanityIndex === '9') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default attrBtn" data-charid="'.$CharID.'" data-attr="sanity" data-attrnum="9"'; } echo '>' . $sanityScaleRow['9'] . '</button>
 </div>';
 if ($currentSanityIndex === '9') {
  echo '&nbsp;<button class="btn btn-lg btn-success" disabled> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 } else {
  echo '&nbsp;<button class="btn btn-lg btn-success attrChg" data-attr="Sanity" data-id="'.$CharID.'" data-chg="up"> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 }
  echo '</td>';      
 
 echo '</tr>
 
 <tr>';
 
 $currentKnowledgeIndex = $playerRow['current_knowledge'];
 $getKnowledgeScale = db_query("SELECT * FROM `stat_scale_knowledge` WHERE Row_ID='{$CharID}'");
 $knowledgeScaleRow = $getKnowledgeScale->fetch_assoc();
 
 echo '<td><kbd>Knowledge</kbd><br>';
 if ($currentKnowledgeIndex === '1') {
 echo '<button class="btn btn-lg btn-danger" disabled> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 } else {
  echo '<button class="btn btn-lg btn-danger attrChg" data-attr="knowledge" data-id="'.$CharID.'" data-chg="down"> <div class="glyphicon glyphicon-minus-sign" aria-hidden="true"></button></button>&nbsp;';
 }
 echo
 '<div class="btn-group btn-group-lg" role="group">
  <button '; if ($currentKnowledgeIndex === '1') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  deadBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="1"'; } echo '><img src="libs/images/skull.png" height="23px" width="20px"></img></button>
  <button '; if ($currentKnowledgeIndex === '2') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="2"'; } echo '>' . $knowledgeScaleRow['2'] . '</button>
  <button '; if ($currentKnowledgeIndex === '3') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="3"'; } echo '>' . $knowledgeScaleRow['3'] . '</button>
  <button '; if ($currentKnowledgeIndex === '4') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="4"'; } echo '>' . $knowledgeScaleRow['4'] . '</button>
  <button '; if ($currentKnowledgeIndex === '5') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="5"'; } echo '>' . $knowledgeScaleRow['5'] . '</button>
  <button '; if ($currentKnowledgeIndex === '6') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="6"'; } echo '>' . $knowledgeScaleRow['6'] . '</button>
  <button '; if ($currentKnowledgeIndex === '7') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="7"'; } echo '>' . $knowledgeScaleRow['7'] . '</button>
  <button '; if ($currentKnowledgeIndex === '8') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="8"'; } echo '>' . $knowledgeScaleRow['8'] . '</button>
  <button '; if ($currentKnowledgeIndex === '9') { echo 'class="btn btn-primary"'; } else { echo 'class="btn btn-default  attrBtn" data-charid="'.$CharID.'" data-attr="knowledge" data-attrnum="9"'; } echo '>' . $knowledgeScaleRow['9'] . '</button>
 </div>';
 if ($currentKnowledgeIndex === '9') {
  echo '&nbsp;<button class="btn btn-lg btn-success" disabled> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 
 } else {
  echo '&nbsp;<button class="btn btn-lg btn-success attrChg" data-attr="Knowledge" data-id="'.$CharID.'" data-chg="up"> <div class="glyphicon glyphicon-plus-sign" aria-hidden="true"></button></button>';
 }
 echo '</td>';  
 
 echo '</tr>
 </table>';
 }
}
?>

<?php
include('parts/modals/claimCharacterModal.php');
include('parts/modals/confirmDeadModal.php');