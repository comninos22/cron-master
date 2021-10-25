
<?php
require_once(ROOT . "/interfaces/ICronController.php");
class CronController implements ICronController
{

    static function getCrons(Request $params)
    {
        return new View("CronView", true);
    }
    static function addCron(Request $params)
    {
        return new View("CronView", true);
    }
    static function deleteCron(Request $params)
    {
    }
    static function editCron(Request $params)
    {
        return new View("CronView", true);
    }
    static function changeStatus(Request $params)
    {
    }
}
