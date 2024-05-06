<?php
session_start();
header ("content-type:text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

 use App\Dispatch;
 $dispatch = new Dispatch();

/* use App\Model\ClassConexao;
 $conn = new ClassConexao();
*/
