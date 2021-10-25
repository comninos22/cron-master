<?php
interface ICronLogController
{
    static function insertLog($params);
    static function getLogs($params);
}
