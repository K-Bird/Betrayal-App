<?php

include('../libs/db/db_functions.php');

$id = $_POST['charID'];
$attrNum = $_POST['attrNum'];
$attr = $_POST['attr'];

$getHauntStatus = db_query("SELECT * FROM `game_controls` WHERE Control='Haunt Started'");
$HauntRow = $getHauntStatus->fetch_assoc();
$HauntStatus = $HauntRow['Value'];

    if ($attrNum === '1' && $HauntStatus ==='N') {
        echo '1';
    } else {
    
        if ($attr === 'speed') {
            $selectAttr = db_query("UPDATE `active_characters` set current_speed = {$attrNum} WHERE Character_ID='$id'");
            echo '0';
        }
        if ($attr === 'might') {
            $selectAttr = db_query("UPDATE `active_characters` set current_might = {$attrNum} WHERE Character_ID='$id'");
            echo '0';
        }
        if ($attr === 'sanity') {
            $selectAttr = db_query("UPDATE `active_characters` set current_sanity = {$attrNum} WHERE Character_ID='$id'");
            echo '0';
        }
        if ($attr === 'knowledge') {
            $selectAttr = db_query("UPDATE `active_characters` set current_knowledge = {$attrNum} WHERE Character_ID='$id'");
            echo '0';
        }
    }