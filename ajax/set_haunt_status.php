<?php

include ('../libs/db/db_functions.php');

$status = $_POST['hauntStatus'];

$SetHauntStatus = db_query("UPDATE `game_controls` set Value='{$status}' WHERE Control='Haunt Started'");

