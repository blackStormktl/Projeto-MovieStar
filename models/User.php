<?php

    class User{
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;
    }


interface UserDaoInterface {
    public function builduser($data);
    public function crate(User $user, $authUser=false);
    public function update(User $user);
    public function changePassword(User $user);

    public function findByToken($token) ;
    public function findByEmail($email);
    public function findById($id);

   
    public function veriyToken($protected = false);
    public function setTokenToSession($token, $redirect = true);
    public function authenticateUser($email,$password);


}