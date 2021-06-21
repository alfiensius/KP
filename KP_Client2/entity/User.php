<?php


class User
{
    private $user_ID;
    private $user_Name;
    private $user_Email;
    private $user_Password;
    private $user_Role;
    private $user_Status;
    private $user_Count;
    private $user_Login;
    private $user_Token;
    private $user_Expired;

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->user_ID;
    }

    /**
     * @param mixed $user_ID
     */
    public function setUserID($user_ID)
    {
        $this->user_ID = $user_ID;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_Name;
    }

    /**
     * @param mixed $user_Name
     */
    public function setUserName($user_Name)
    {
        $this->user_Name = $user_Name;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_Email;
    }

    /**
     * @param mixed $user_Email
     */
    public function setUserEmail($user_Email)
    {
        $this->user_Email = $user_Email;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_Password;
    }

    /**
     * @param mixed $user_Password
     */
    public function setUserPassword($user_Password)
    {
        $this->user_Password = $user_Password;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->user_Role;
    }

    /**
     * @param mixed $user_Role
     */
    public function setUserRole($user_Role)
    {
        $this->user_Role = $user_Role;
    }

    /**
     * @return mixed
     */
    public function getUserStatus()
    {
        return $this->user_Status;
    }

    /**
     * @param mixed $user_Status
     */
    public function setUserStatus($user_Status)
    {
        $this->user_Status = $user_Status;
    }

    /**
     * @return mixed
     */
    public function getUserCount()
    {
        return $this->user_Count;
    }

    /**
     * @param mixed $user_Count
     */
    public function setUserCount($user_Count)
    {
        $this->user_Count = $user_Count;
    }

    /**
     * @return mixed
     */
    public function getUserLogin()
    {
        return $this->user_Login;
    }

    /**
     * @param mixed $user_Login
     */
    public function setUserLogin($user_Login)
    {
        $this->user_Login = $user_Login;
    }

    /**
     * @return mixed
     */
    public function getUserToken()
    {
        return $this->user_Token;
    }

    /**
     * @param mixed $user_Token
     */
    public function setUserToken($user_Token)
    {
        $this->user_Token = $user_Token;
    }

    /**
     * @return mixed
     */
    public function getUserExpired()
    {
        return $this->user_Expired;
    }

    /**
     * @param mixed $user_Expired
     */
    public function setUserExpired($user_Expired)
    {
        $this->user_Expired = $user_Expired;
    }



}