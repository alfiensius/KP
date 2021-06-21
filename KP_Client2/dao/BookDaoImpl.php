<?php


class BookDaoImpl
{
    public function fetchBooksData()
    {
        $link = PDOUtil::createConnection();
        $query = "call spBookGet('','-1')";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Book');
        PDOUtil::closeConnection($link);
        return $result;
    }
    /**
     * @param $boid
     * @return book
     */
}