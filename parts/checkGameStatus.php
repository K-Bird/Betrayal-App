<?php

$getStatusQuery = db_query("SELECT `Value` FROM `game_controls` WHERE Control='Game Status'");
$valueOfStatus = $getStatusQuery->fetch_assoc();
$gm_status = $valueOfStatus['Value'];