<?php

include ('../libs/db/db_functions.php');

$SetActiveStatus = db_query("UPDATE `characters_list` set Active='N'");
$RemoveAlterEgo = db_query("TRUNCATE `active_characters`");

header('Location: ' . $_SERVER['HTTP_REFERER']);

