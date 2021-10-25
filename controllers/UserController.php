<?php
require_once(ROOT . "/interfaces/IUserController.php");
require_once(ROOT . "/model/UserRepository.php");

class UserController implements IUserController
{
    static function loginUser($params)
    {
        try {
            $username = $params['BODY']['username'] or throw new Exception("Username missing");
            $password = $params['BODY']['password'] or throw new Exception("Password missing");
            $_user = UserRepository::findOne($username);
            if (!$_user || $_user['password'] != $password) {
                throw new Exception("Invalid credentials");
            }
            $_SESSION['user'] = $_user;
        } catch (Exception $e) {
            exit(json_encode(['error' => $e->getMessage()]));
        }
    }
    
}
