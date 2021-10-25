<?php
interface ICronLogController
{
    static function insertLog(Request $params);
    static function getLogs(Request $params);
}
