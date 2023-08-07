<?php 

class Signup extends Dbh {

    protected function setUser ($first_name,$last_name,$email,$username,$password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_firstname,users_lastname,users_email,users_username,users_pwd)
        VALUES (?,?,?,?,?);');
        $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
        if (!$stmt->execute(array($first_name,$last_name,$email,$username,$hashedPwd))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt =Null;
    }


    protected function checkuser($username, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;');
        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $resultCheck; 
        if($stmt->rowcount()>0)
        {
            $resultCheck =false;
        }
        else 
        {
            $resultCheck = true;
        }
        return $resultCheck;
    }

} 