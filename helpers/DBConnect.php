<?php
require_once(ROOT . "/helpers/PreparedStatement.php");
class DB extends MySQLi
{
    private static $instance = null;

    private function __construct($host, $user, $password, $database)
    {
        parent::__construct($host, $user, $password, $database);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self(DB_SERVER, DB_USERNAME, DB_PASSWD, DB_NAME);
        }
        return self::$instance;
    }
    public function tryToPrepareAndExecute(PreparedStatement $pstmt)
    {
        try {
            if (strlen($pstmt->types) != count($pstmt->parameters)) {
                throw new Exception("Function was called with invalid parameters or types");
            }

            if (($preparedStatement = self::$instance->prepare($pstmt->query)) === false) {
                throw new Exception("Preparation failed");
            }
            if (strlen($pstmt->types) > 0 && $preparedStatement->bind_param($pstmt->types, ...$pstmt->parameters) === false) {
                throw new Exception("Binding failed");
            }
            if ($preparedStatement->execute() === false) {
                throw new Exception("Execution failed");
            }
            return $preparedStatement;
        } catch (Exception $e) {
            var_dump($pstmt);
            var_dump($e->getMessage());
            return false;
        } finally {
        }
    }
}
