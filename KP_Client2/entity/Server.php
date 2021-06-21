<?php


class Server
{
    private $ID;
    private $serverName;
    private $URL;
    private $username;
    private $serverPassword;
    private $statusKode;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * @param mixed $serverName
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;
    }

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param mixed $URL
     */
    public function setURL($URL)
    {
        $this->URL = $URL;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getServerPassword()
    {
        return $this->serverPassword;
    }

    /**
     * @param mixed $serverPassword
     */
    public function setServerPassword($serverPassword)
    {
        $this->serverPassword = $serverPassword;
    }

    /**
     * @return mixed
     */
    public function getStatusKode()
    {
        return $this->statusKode;
    }

    /**
     * @param mixed $statusKode
     */
    public function setStatusKode($statusKode)
    {
        $this->statusKode = $statusKode;
    }


}