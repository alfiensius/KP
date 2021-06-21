<?php


class ServerDaoImpl
{
    public function fetchServerData()
    {
        $link = PDOUtil::createConnection();
        $query = "call spServerGet('','-1')";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Server');
        PDOUtil::closeConnection($link);
        $servers=$result;
    }
}