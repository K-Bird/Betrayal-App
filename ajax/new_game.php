<?php

include ('../libs/db/db_functions.php');

$SetGameStatus = db_query("UPDATE `game_controls` set Value='Not Started' WHERE Control='Game Status'");
$SetHauntStatus = db_query("UPDATE `game_controls` set Value='N' WHERE Control='Haunt Started'");
$SetActiveStatus = db_query("UPDATE `characters_list` set Active='N'");
$RemoveAlterEgo = db_query("TRUNCATE `active_characters`");

header('Location: ' . $_SERVER['HTTP_REFERER']);

