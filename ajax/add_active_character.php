<?php

$id = $_POST['id'];

$con = mysql_connect("localhost", 'root', 'Fly0Bird797979');

if (!$con) {
    die('Could not connect!' . mysql_error());
}

mysql_select_db("betrayalapp_db", $con);

if ($id === '1') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='2'", $con);
    $AddToActiveList = mysql_query("INSERT INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='2'", $con) or die(mysql_error());
}

if ($id === '2') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='1'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='1'", $con) or die(mysql_error());
}

if ($id === '3') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='4'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='4'", $con) or die(mysql_error());
}

if ($id === '4') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='3'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='3'", $con) or die(mysql_error());
}

if ($id === '5') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='6'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='6'", $con) or die(mysql_error());
}

if ($id === '6') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='5'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='5'", $con) or die(mysql_error());
}

if ($id === '7') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='8'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='8'", $con) or die(mysql_error());
}

if ($id === '8') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='7'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='7'", $con) or die(mysql_error());
}

if ($id === '9') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='10'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='10'", $con) or die(mysql_error());
}

if ($id === '10') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='9'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='9'", $con) or die(mysql_error());
}

if ($id === '11') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='12'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='12'", $con) or die(mysql_error());
}

if ($id === '12') {
    $SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='Y' WHERE Row_ID='{$id}'", $con);
    $SetAlterEgoStatus = mysql_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='11'", $con);
    $AddToActiveList = mysql_query("Insert INTO `active_characters` (Character_ID) VALUES ('{$id}')", $con);
    $RemoveAlterEgo = mysql_query("DELETE FROM `active_characters` WHERE Character_ID='11'", $con) or die(mysql_error());
}

$getStartingSpeed = mysql_query("SELECT `Starting_Speed` FROM `characters_list` WHERE Row_ID='{$id}'", $con);
$valueOfSpeed = mysql_fetch_object($getStartingSpeed);
$speedValue = $valueOfSpeed->Starting_Speed;

$populateStartingSpeed =  $SetAlterEgoStatus = mysql_query("UPDATE `active_characters` set current_speed='{$speedValue}' WHERE Character_ID='{$id}'", $con);

$getStartingMight = mysql_query("SELECT `Starting_Might` FROM `characters_list` WHERE Row_ID='{$id}'", $con);
$valueOfMight = mysql_fetch_object($getStartingMight);
$mightValue = $valueOfMight->Starting_Might;

$populateStartingMight =  $SetAlterEgoStatus = mysql_query("UPDATE `active_characters` set current_might='{$mightValue}' WHERE Character_ID='{$id}'", $con);

$getStartingSanity = mysql_query("SELECT `Starting_Sanity` FROM `characters_list` WHERE Row_ID='{$id}'", $con);
$valueOfSanity = mysql_fetch_object($getStartingSanity);
$sanityValue = $valueOfSanity->Starting_Sanity;

$populateStartingSanity =  $SetAlterEgoStatus = mysql_query("UPDATE `active_characters` set current_sanity='{$sanityValue}' WHERE Character_ID='{$id}'", $con);

$getStartingKnowledge = mysql_query("SELECT `Starting_Knowledge` FROM `characters_list` WHERE Row_ID='{$id}'", $con);
$valueOfKnowledge = mysql_fetch_object($getStartingKnowledge);
$knowledgeValue = $valueOfKnowledge->Starting_Knowledge;

$populateStartingKnowledge =  $SetAlterEgoStatus = mysql_query("UPDATE `active_characters` set current_knowledge='{$knowledgeValue}' WHERE Character_ID='{$id}'", $con);


header('Location: ' . $_SERVER['HTTP_REFERER']);

