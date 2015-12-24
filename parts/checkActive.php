<?php

$getActiveOf1 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='1'", $con);
$valueOf1 = mysql_fetch_object($getActiveOf1);
$StatusOf1 = $valueOf1->Active;

$getActiveOf2 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='2'", $con);
$valueOf2 = mysql_fetch_object($getActiveOf2);
$StatusOf2 = $valueOf2->Active;

$getActiveOf3 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='3'", $con);
$valueOf3 = mysql_fetch_object($getActiveOf3);
$StatusOf3 = $valueOf3->Active;

$getActiveOf4 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='4'", $con);
$valueOf4 = mysql_fetch_object($getActiveOf4);
$StatusOf4 = $valueOf4->Active;

$getActiveOf5 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='5'", $con);
$valueOf5 = mysql_fetch_object($getActiveOf5);
$StatusOf5 = $valueOf5->Active;

$getActiveOf6 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='6'", $con);
$valueOf6 = mysql_fetch_object($getActiveOf6);
$StatusOf6 = $valueOf6->Active;

$getActiveOf7 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='7'", $con);
$valueOf7 = mysql_fetch_object($getActiveOf7);
$StatusOf7 = $valueOf7->Active;

$getActiveOf8 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='8'", $con);
$valueOf8 = mysql_fetch_object($getActiveOf8);
$StatusOf8 = $valueOf8->Active;

$getActiveOf9 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='9'", $con);
$valueOf9 = mysql_fetch_object($getActiveOf9);
$StatusOf9 = $valueOf9->Active;

$getActiveOf10 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='10'", $con);
$valueOf10 = mysql_fetch_object($getActiveOf10);
$StatusOf10 = $valueOf10->Active;

$getActiveOf11 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='11'", $con);
$valueOf11 = mysql_fetch_object($getActiveOf11);
$StatusOf11 = $valueOf11->Active;

$getActiveOf12 = mysql_query("SELECT `Active` FROM `characters_list` WHERE Row_ID='12'", $con);
$valueOf12 = mysql_fetch_object($getActiveOf12);
$StatusOf12 = $valueOf12->Active;
