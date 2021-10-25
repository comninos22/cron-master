<?php
require_once(ROOT . "/controllers/CronController.php");
require_once(ROOT . "/controllers/UserController.php");
require_once(ROOT . "/controllers/CronLogController.php");
require_once(ROOT . "/helpers/View.php");
require_once(ROOT . "/helpers/Request.php");

$request = new Request();
try {
    switch (array_shift($request->PATH)) {
        case "auth":
            switch (array_shift($request->PATH)) {
                case "login":
                    switch ($request->METHOD) {
                        case "GET":
                            return new View("LoginView", true);
                        case "POST":
                            return UserController::loginUser($request);
                    }
                case "register":
                    checkSession();
                    switch ($request->METHOD) {
                        case "GET":
                            return new View("RegisterView", true);
                        case "POST":
                            return UserController::registerUser($request);
                    }
                case "logout":
                    return UserController::logoutUser($request);
            }
        case "cron":
            checkSession();
            switch ($request->METHOD) {
                case "GET":
                    return CronController::getCrons($request);
                case "POST":
                    return CronController::addCron($request);
                case "DELETE":
                    return CronController::deleteCron($request);
                case "PATCH":
                    return CronController::editCron($request);
            }
        case "cron-logs":
            checkSession();
            switch ($request->METHOD) {
                case "GET":
                    return CronLogController::getLogs($request);
                case "POST":
                    return CronLogController::insertLog($request);
            }
        default:
            http_response_code(404);
            return new View("404", false, "errors");
    }
} catch (Exception $e) {
    switch (get_class($e)) {
        case "VerificationException": {
                return new View("LoginView", true);
            }
    }
}


function checkSession()
{
    if (!isset($_SESSION["user"])) {
        throw new VerificationException("Invalidated");
    }
}
class VerificationException extends Exception
{
    function __construct($m)
    {
        parent::__construct($m);
    }
}
