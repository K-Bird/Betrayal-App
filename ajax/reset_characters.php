<?php

$con = mysql_connect("localhost", 'root', 'Fly0Bird797979');

if (!$con) {
    die('Could not connect!' . mysql_error());
}

mysql_select_db("betrayalapp_db", $con);

$SetActiveStatus = mysql_query("UPDATE `characters_list` set Active='N'", $con) or die(mysql_error());
$RemoveAlterEgo = mysql_query("TRUNCATE `active_characters`", $con) or die(mysql_error());

header('Location: ' . $_SERVER['HTTP_REFERER']);

