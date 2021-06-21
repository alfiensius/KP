<?php


class ServerController {

    public function index(){
        $link = PDOUtil::createConnection();
        $query = "call spServerGet('','-1')";
        /*$query = "call spServerSet('', 'email3', 'url', 'nama server', 'password', 'server user')";*/
        /*$query = "call spServerDel('SE210517002')";*/
        /*$query = "call spServerSet('SE210517001', 'email', 'url', 'nama server', 'password', 'server user')";*/
        $result = $link->query($query);
        /*$result->setFetchMode( PDO::FETCH_PROPS_LATE);*/
        $result->setFetchMode(PDO::FETCH_OBJ);
        PDOUtil::closeConnection($link);
        $servers=$result->fetchAll();
        print_r($servers);
        include_once 'view/server.php';
    }
}