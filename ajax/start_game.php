<?php

include ('../libs/db/db_functions.php');

$SetActiveStatus = db_query("UPDATE `game_controls` set Value='Started' WHERE Control='Game Status'");

header('Location: ' . $_SERVER['HTTP_REFERER']);

