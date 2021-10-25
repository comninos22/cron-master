<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include("config.php");
include(ROOT."/helpers/DBConnect.php");
include(ROOT . "/routes/routes.php");
