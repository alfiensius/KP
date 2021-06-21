<?php


class AvailableController
{
    private $availableDao;

    public function __construct()
    {
        $this->availableDao=new AvailableDaoImpl();
    }
    public function index(){
        $availables=$this->availableDao->fetchAvailableData();
        include_once 'view/server.php';
    }
}