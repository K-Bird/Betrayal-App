<?php

include('../libs/db/db_functions.php');

$change = $_POST['change'];
$id = $_POST['charID'];
$attr = $_POST['attr'];

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





header('Location: '.$_SERVER['HTTP_REFERER']);
