<?php 

Class SignupContr extends Signup {
    private $first_name;
    private $last_name;
    private $email;
    private $username;
    private $password; 

    public function __Construct($first_name,$last_name,$email,$username,$password)
    {
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
    }
    public function signupUser () {
       if ($this->emptyInput()==FALSE){
        header("location: ../signup.php?error=emptyInput");
        exit();
       }
       if ($this->invaildUid()==FALSE){
        header("location: ../signup.php?error=username");
        exit();
       }
       if ($this->invalidEmail()==FALSE){
        header("location: ../signup.php?error=email");
        exit();
       }
       if ($this->usernameTakenCheck()==FALSE){
        header("location: ../signup.php?error=useroremailtaken");
        exit();
       }

       $this->setUser($this->first_name,$this->last_name,$this->email,$this->username,$this->password);
    }

    private function emptyInput () {
        $result = true;
        if (empty( $this->first_name)||empty( $this->last_name)||empty( $this->email)||empty( $this->username)||empty( $this->password)) {
            $result =false;
        }
        return $result;
    }
    private function invaildUid () {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username))
            {
                $result = false;
            }
            else
            {
                $result = true;
            }               

        return $result;
    }
    private function invalidEmail() {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
    
        return $result;
    }
    
    private function usernameTakenCheck () {
        $result = true;
        if (!$this->checkuser($this->username,$this->email)) 
            {
                $result = false;
            }
        return $result;
        }
      
}