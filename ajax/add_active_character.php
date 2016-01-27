<?php

include ('../libs/db/db_functions.php');

$id = $_POST['id'];


if ($id === '1') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='2'");
    $AddToActiveList = db_query("INSERT INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='2'");
}

if ($id === '2') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='1'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='1'");
}

if ($id === '3') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='4'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='4'");
}

if ($id === '4') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='3'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='3'");
}

if ($id === '5') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='6'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='6'");
}

if ($id === '6') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='5'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='5'");
}

if ($id === '7') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='8'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='8'");
}

if ($id === '8') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='7'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='7'");
}

if ($id === '9') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='10'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='10'");
}

if ($id === '10') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='9'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='9'");
}

if ($id === '11') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='12'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='12'");
}

if ($id === '12') {
    $SetActiveStatus = db_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'");
    $SetAlterEgoStatus = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='11'");
    $AddToActiveList = db_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')");
    $RemoveAlterEgo = db_query("DELETE FROM `active_characters` WHERE Character_ID='11'");
}

$getStartingSpeed = db_query("SELECT `Starting_Speed` FROM `characters_list` WHERE Row_ID='{$id}'");
$valueOfSpeed = $getStartingSpeed->fetch_assoc();
$speedValue = $valueOfSpeed['Starting_Speed'];

$populateStartingSpeed =  $SetAlterEgoStatus = db_query("UPDATE `active_characters` set current_speed='{$speedValue}' WHERE Character_ID='{$id}'");

$getStartingMight = db_query("SELECT `Starting_Might` FROM `characters_list` WHERE Row_ID='{$id}'");
$valueOfMight = $getStartingMight->fetch_assoc();
$mightValue = $valueOfMight['Starting_Might'];

$populateStartingMight =  $SetAlterEgoStatus = db_query("UPDATE `active_characters` set current_might='{$mightValue}' WHERE Character_ID='{$id}'");

$getStartingSanity = db_query("SELECT `Starting_Sanity` FROM `characters_list` WHERE Row_ID='{$id}'");
$valueOfSanity = $getStartingSanity->fetch_assoc();
$sanityValue = $valueOfSanity['Starting_Sanity'];

$populateStartingSanity =  $SetAlterEgoStatus = db_query("UPDATE `active_characters` set current_sanity='{$sanityValue}' WHERE Character_ID='{$id}'");

$getStartingKnowledge = db_query("SELECT `Starting_Knowledge` FROM `characters_list` WHERE Row_ID='{$id}'");
$valueOfKnowledge = $getStartingKnowledge->fetch_assoc();
$knowledgeValue = $valueOfKnowledge['Starting_Knowledge'];

$populateStartingKnowledge =  $SetAlterEgoStatus = db_query("UPDATE `active_characters` set current_knowledge='{$knowledgeValue}' WHERE Character_ID='{$id}'");


header('Location: ' . $_SERVER['HTTP_REFERER']);

