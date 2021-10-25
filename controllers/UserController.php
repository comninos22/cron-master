<?php
require_once(ROOT . "/interfaces/IUserController.php");
require_once(ROOT . "/model/UserRepository.php");

class UserController implements IUserController
{
    static function loginUser(Request $params)

    {
        $_SESSION['user'] = ["id" => 1, "username" => "asdasd"];
        header("Location: " . BASEPATH . "/cron");
        try {
            $username = $params->POST['username'] or throwExc("Username missing");
            $password = $params->POST['password'] or throwExc("Password missing");
            $_user = UserRepository::findOne($username);
            if (!$_user || $_user['password'] != $password) {
                throwExc("Invalid credentials");
            }
            $_SESSION['user'] = $_user;
        } catch (Exception $e) {
            var_dump($params);
            exit(json_encode(['error' => $e->getMessage()]));
        }
    }
    static function registerUser(Request $params)
    {
    }
    static function logoutUser(Request $params)
    {
        unset($_SESSION["user"]);
        return header("Location: ".BASEPATH."/auth/login");
    }
}

function throwExc($message)
{
    throw new Exception($message);
}
