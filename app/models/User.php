<?php
class User {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //register new user
    public function register($data){
        $this->db->query('INSERT INTO user (name, email, password) VALUES (:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $email = $_POST ["email"];  
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
            $ErrMsg = "Email is not valid.";  
                    echo $ErrMsg;  
        } else {  
            echo "Your valid email address is: " .$email;  
        }
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    //find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //check the row 
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $password){
        $this->db->query('SELECT * FROM user where email = :email');
        $this->db->bind(':email', $email);
       
        $row = $this->db->single();

        $hash_password = $row->password;

        if(password_verify($password, $hash_password)){
            return $row;
        }else{
            return false;
        }
    }

    public function getUserById($id){
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
}