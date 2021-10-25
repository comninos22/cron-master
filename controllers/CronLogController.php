<?php
require_once(ROOT."/interfaces/ICronLogController.php");

class CronLogController implements ICronLogController
{
    static function insertLog(Request $params)
    {
    }
    static function getLogs(Request $params)
    {
        return new View("CronLogView",true);
    }
}
