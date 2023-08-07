<?php 

class Dbh {
    
    protected function connect () {
        try {
           $username="root";
           $password = "";
           $port = '3307';
           $dbname ="Form1";
           $host = "localhost";
           $dbh = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
           return $dbh;
        } catch (PDOException $e) {
            echo "Connection Failed".$e->getMessage()."<br>";
            die();
        }
    }
    public function loginUser($email, $password) {
        $dbh = $this->connect();
    
        try {
            $stmt = $dbh->prepare("SELECT * FROM users WHERE users_email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                // Verify the hashed password
                if (password_verify($password, $user['users_pwd'])) {
                    return $user; // Login successful, return the user data
                } else {
                    return false; // Password does not match
                }
            } else {
                return false; // User not found
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    

}