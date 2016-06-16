<?php

class User_Contact
{
    private $contact;
    private $user_id;

    /**
     * User_Contact constructor.
     * @param $contact
     * @param $user_id
     */
    public function __construct($contact, $user_id)
    {
        $this->contact = $contact;
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


}