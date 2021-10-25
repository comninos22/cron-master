<?php
interface ICronController
{
    static function addCron(Request $params);
    static function deleteCron(Request $params);
    static function editCron(Request $params);
    static function getCrons(Request $params);
    static function changeStatus(Request $params);
}
