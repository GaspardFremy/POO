<?php
namespace App\Model;

class User extends Model {
    protected $first_name;
    protected $last_name;
    protected $created_at;
    protected  $last_login;

    public function __construct($first_name, $last_name, $created_at, $last_login){
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->first_name   = $created_at;
        $this->last_login   = $last_login;
    }

    public function getFullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getLastLogin()
    {
        return $this->last_login;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function setLastLogin($last_login)
    {
        $this->last_login = $last_login;
    }
}

