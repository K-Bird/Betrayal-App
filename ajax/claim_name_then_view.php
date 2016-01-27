<?php

include ('../libs/db/db_functions.php');

$playerName = $_POST['playerName'];
$charID = $_POST['charID'];

$SetClaimedChar = db_query("UPDATE `active_characters` set PlayedBy='{$playerName}' WHERE Character_ID='{$charID}'");
 
header('Location: ' . $_SERVER['HTTP_REFERER']);