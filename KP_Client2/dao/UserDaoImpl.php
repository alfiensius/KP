<?php


class UserDaoImpl
{
    /**
     * @param $user_Email, $user_Password
     * @return user
     * */
    public function login($user_Email, $user_Password) {
        $link = PDOUtil::createConnection();
        $query = "call spLogin(?,?)";
        $stmt = $link->prepare($query);
        $stmt->bindParam(1,$user_Email);
        $stmt->bindParam(2,$user_Password);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        PDOUtil::closeConnection($link);
        return $stmt->fetchObject('User');
    }
    public function fetchUserData()
    {
        $link = PDOUtil::createConnection();
        $query = "call spUserGet('','-1')";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'User');
        PDOUtil::closeConnection($link);
        return $result;
    }
    /**
     * @param $usid
     * @return user
     */
}