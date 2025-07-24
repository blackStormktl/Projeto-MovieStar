<?php
    include_once("models/User.php");

    class userDao implements UserDaoInterface{
        private $conn;
        private $url;

    public function __construct(PDO $conn, $url){
        $this->conn = $conn;
        $this->url=$url;
    }

    public function builduser($data){
        $user = new User();
        $user->id =$data["id"];
        $user->name =$data["name"];
        $user->lastname =$data["lastname"];
        $user->email =$data["email"];
        $user->password =$data["password"];
        $user->image =$data["image"];
        $user->bio =$data["bio"];
        $user->token =$data["token"];

        return $user;
    }
    public function crate(User $user, $authUser=false){}
    public function update(User $user){}
    public function changePassword(User $user){}

    public function findByToken($token) {}
    public function findByEmail($email){}
    public function findById($id){}

   
    public function veriyToken($protected = false){}
    public function setTokenToSession($token, $redirect = true){}
    public function authenticateUser($email,$password){}

 
    }