<?php


class AvailableDaoImpl
{
    public function fetchAvailableData()
    {
        $link = PDOUtil::createConnection();
        $query = "call spAvailableGet('','-1')";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Available');
        PDOUtil::closeConnection($link);
        return $result;
    }
    /**
     * @param $avid
     * @return available
     */
}