<?php

class User
{

    private $id;
    private $name;
    private $email;
    private $password;

    /**
     * @param $name
     * @param $email
     * @param $password
     */
    public function __construct($name, $email, $password)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}