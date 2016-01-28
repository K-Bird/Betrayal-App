<?php

$getGameStatusQuery = db_query("SELECT `Value` FROM `game_controls` WHERE Control='Game Status'");
$valueOfGameStatus = $getGameStatusQuery->fetch_assoc();
$gm_status = $valueOfGameStatus['Value'];

$getHauntStatusQuery = db_query("SELECT `Value` FROM `game_controls` WHERE Control='Haunt Started'");
$valueOfHauntStatus = $getHauntStatusQuery->fetch_assoc();
$haunt_status = $valueOfHauntStatus['Value'];