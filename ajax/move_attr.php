<?php

include('../libs/db/db_functions.php');

$change = $_POST['change'];
$id = $_POST['charID'];
$attr = $_POST['attr'];

$getHauntStatus = db_query("SELECT * FROM `game_controls` WHERE Control='Haunt Started'");
$HauntRow = $getHauntStatus->fetch_assoc();
$HauntStatus = $HauntRow['Value'];


if ($change === 'up') {

    if ($attr === 'speed') {
        $IncSpeed = db_query("UPDATE `active_characters` set current_speed = current_speed + 1 WHERE Character_ID='$id'");

    }
    if ($attr === 'Might') {
        $IncMight = db_query("UPDATE `active_characters` set current_Might = current_Might + 1 WHERE Character_ID='$id'");

    }
    if ($attr === 'Sanity') {
        $IncSanity = db_query("UPDATE `active_characters` set current_Sanity = current_Sanity + 1 WHERE Character_ID='$id'");

    }
    if ($attr === 'Knowledge') {
        $IncKnowledge = db_query("UPDATE `active_characters` set current_Knowledge = current_Knowledge + 1 WHERE Character_ID='$id'");

    }
}

    
if ($change === 'down') {
    
    if ($HauntStatus === 'Y') {

        if ($attr === 'speed') {
            $DecSpeed = db_query("UPDATE `active_characters` set current_speed = current_speed - 1 WHERE Character_ID='$id'");
    
        }
        if ($attr === 'Might') {
            $DecMight = db_query("UPDATE `active_characters` set current_Might = current_Might - 1 WHERE Character_ID='$id'");
    
        }
        if ($attr === 'Sanity') {
            $DecSanity = db_query("UPDATE `active_characters` set current_Sanity = current_Sanity - 1 WHERE Character_ID='$id'");
    
        }
        if ($attr === 'Knowledge') {
            $DecKnowledge = db_query("UPDATE `active_characters` set current_Knowledge = current_Knowledge - 1 WHERE Character_ID='$id'");
    
        }
        
    }
    if ($HauntStatus === 'N') {
        
            $CheckAttrs = db_query("SELECT * FROM `active_characters` WHERE Character_ID='$id'");
            $CheckAttrsRow = $CheckAttrs->fetch_assoc();
            
            if ($attr === 'speed') {
                if ($CheckAttrsRow['current_speed'] > 2) {
                    $DecSpeed = db_query("UPDATE `active_characters` set current_speed = current_speed - 1 WHERE Character_ID='$id'");
                } else {
                    echo '1';
                }
            }
            
            if ($attr === 'might') {
                if ($CheckAttrsRow['current_might'] > 2) {
                    $DecSpeed = db_query("UPDATE `active_characters` set current_might = current_might - 1 WHERE Character_ID='$id'");
                } else {
                    echo '1';
                }
            }
            
            if ($attr === 'sanity') {
                if ($CheckAttrsRow['current_sanity'] > 2) {
                    $DecSpeed = db_query("UPDATE `active_characters` set current_sanity = current_sanity - 1 WHERE Character_ID='$id'");
                } else {
                    echo '1';
                }
            }
            
            if ($attr === 'knowledge') {
                if ($CheckAttrsRow['current_knowledge'] > 2) {
                    $DecSpeed = db_query("UPDATE `active_characters` set current_knowledge = current_knowledge - 1 WHERE Character_ID='$id'");
                } else {
                    echo '1';
                }
            }
        
            
    }
}

