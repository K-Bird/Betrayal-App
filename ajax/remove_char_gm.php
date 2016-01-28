<?php

include ('../libs/db/db_functions.php');

$id = $_POST['charID'];

$RemovePlayer = db_query("DELETE FROM `active_characters` WHERE Character_ID='{$id}'");
$SetPlayertoInactive = db_query("UPDATE `characters_list` set Active='N' WHERE Row_ID='{$id}'");


