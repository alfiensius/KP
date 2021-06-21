<?php


class Book
{
    private $book_id_lokal;
    private $book_id_global;
    private $book_isbn;
    private $book_title;
    private $book_author;
    private $book_publisher;
    private $book_Stok;
    private $book_description;
    private $book_User;


    public function getBookIdLokal()
    {
        return $this->book_id_lokal;
    }

    /**
     * @param mixed $book_id_lokal
     */
    public function setBookIdLokal($book_id_lokal)
    {
        $this->book_id_lokal = $book_id_lokal;
    }

    /**
     * @return mixed
     */
    public function getBookIdGlobal()
    {
        return $this->book_id_global;
    }

    /**
     * @param mixed $book_id_global
     */
    public function setBookIdGlobal($book_id_global)
    {
        $this->book_id_global = $book_id_global;
    }

    /**
     * @return mixed
     */
    public function getBookIsbn()
    {
        return $this->book_isbn;
    }

    /**
     * @param mixed $book_isbn
     */
    public function setBookIsbn($book_isbn)
    {
        $this->book_isbn = $book_isbn;
    }

    /**
     * @return mixed
     */
    public function getBookTitle()
    {
        return $this->book_title;
    }

    /**
     * @param mixed $book_title
     */
    public function setBookTitle($book_title)
    {
        $this->book_title = $book_title;
    }

    /**
     * @return mixed
     */
    public function getBookAuthor()
    {
        return $this->book_author;
    }

    /**
     * @param mixed $book_author
     */
    public function setBookAuthor($book_author)
    {
        $this->book_author = $book_author;
    }

    /**
     * @return mixed
     */
    public function getBookPublisher()
    {
        return $this->book_publisher;
    }

    /**
     * @param mixed $book_publisher
     */
    public function setBookPublisher($book_publisher)
    {
        $this->book_publisher = $book_publisher;
    }

    /**
     * @return mixed
     */
    public function getBookStok()
    {
        return $this->book_Stok;
    }

    /**
     * @param mixed $book_Stok
     */
    public function setBookStok($book_Stok)
    {
        $this->book_Stok = $book_Stok;
    }

    /**
     * @return mixed
     */
    public function getBookDescription()
    {
        return $this->book_description;
    }

    /**
     * @param mixed $book_description
     */
    public function setBookDescription($book_description)
    {
        $this->book_description = $book_description;
    }

    /**
     * @return mixed
     */
    public function getBookUser()
    {
        return $this->book_User;
    }

    /**
     * @param mixed $book_User
     */
    public function setBookUser($book_User)
    {
        $this->book_User = $book_User;
    }


}
