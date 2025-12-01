<?php
$serverinimi='localhost';
$kasutajanimi='JuhanH';
$parool='12345';
$andmebaasinimi='juhanh';
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");
/*$serverinimi='d141149.mysql.zonevs.eu';
$kasutajanimi='d141149_juhan';
$parool='12345';
$andmebaasinimi='d141149_phpbaas';
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");*/