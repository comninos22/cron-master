<?php
require_once(ROOT . "/controllers/CronController.php");
require_once(ROOT . "/controllers/UserController.php");
require_once(ROOT . "/controllers/CronLogController.php");
require_once(ROOT . "/helpers/View.php");


$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["REQUEST_URI"];
$path = explode("/", $path);
$path = array_slice($path, 2);
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$params = [
    "GET" => $_GET,
    "BODY" => $input,
    "POST" => $_POST,
];
switch (array_shift($path)) {
    case "auth":
        switch (array_shift($path)) {
            case "login":
                switch ($method) {
                    case "GET":
                        new View("LoginView", true);
                        break;
                    case "POST":
                        UserController::loginUser($params);
                        break;
                }
        }
        break;
    case "cron":
        checkSession();
        switch ($method) {
            case "GET":
                CronController::getCrons($params);
                break;
            case "POST":
                CronController::addCron($params);
                break;
            case "DELETE":
                CronController::deleteCron($params);
                break;
            case "PATCH":
                CronController::editCron($params);
                break;
        }
        break;
    case "cron-logs":
        checkSession();
        switch ($method) {
            case "GET":
                CronLogController::getLogs($params);
                break;
            case "POST":
                CronLogController::insertLog($params);
                break;
        }
        break;
}

function checkSession()
{
    if (!isset($_SESSION["user"])) {
        return new View("LoginView", true);
    }
}
