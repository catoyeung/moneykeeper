<?php
// entities/User.php
/**
 * @Entity @Table(name="user")
 **/
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $email;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $password;
    
    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}