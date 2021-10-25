<?php

interface IUserController
{
    static function loginUser(Request $params);
    static function registerUser(Request $params);
    static function logoutUser(Request $params);
}
