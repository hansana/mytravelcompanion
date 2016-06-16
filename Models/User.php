<?php

class User
{
    private $username;
    private $password;
    private $level_id;

    /**
     * User constructor.
     * @param $username
     * @param $password
     * @param $level_id
     */
    public function __construct($username, $password, $level_id)
    {
        $this->username = $username;
        $this->password = $password;
        $this->level_id = $level_id;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * @param mixed $level_id
     */
    public function setLevelId($level_id)
    {
        $this->level_id = $level_id;
    }

}