<?php


class Available
{
    private $available_ID;
    private $available_Server;
    private $available_Book;

    public function getAvailableID()
    {
        return $this->available_ID;
    }

    /**
     * @param mixed $available_ID
     */
    public function setAvailableID($available_ID)
    {
        $this->available_ID = $available_ID;
    }

    /**
     * @return mixed
     */
    public function getAvailableServer()
    {
        return $this->available_Server;
    }

    /**
     * @param mixed $available_Server
     */
    public function setAvailableServer($available_Server)
    {
        $this->available_Server = $available_Server;
    }

    /**
     * @return mixed
     */
    public function getAvailableBook()
    {
        return $this->available_Book;
    }

    /**
     * @param mixed $available_Book
     */
    public function setAvailableBook($available_Book)
    {
        $this->available_Book = $available_Book;
    }


}