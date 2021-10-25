<?php
interface ICronController
{
    static function addCron($params);
    static function deleteCron($params);
    static function editCron($params);
    static function getCrons($params);
    static function changeStatus($params);
}
