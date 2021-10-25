<?php

class UserRepository
{
    static function findOne($username)
    {
        $db = DB::getInstance();
        $pstmt = new PreparedStatement();
        $pstmt->setQuery("select * from user where username= ?", "s", $username);
        if ($stmt = $db->tryToPrepareAndExecute($pstmt)) {
            if ($_result = $stmt->get_result()->fetch_assoc()) {
                return $_result;
            }
        }
        return false;
    }
}
