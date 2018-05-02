<?php
if(!isset($_SESSION)) { session_start(); }
class User
{
    
    public $timee;
    public $table;
    
    public function __construct()
    {
        
        $this->buy_table = "buy_transactions";
        $this->sell_table = "sell_transactions";
        date_default_timezone_set('Africa/Lagos');
        
    }
    
    
    //get data needed  from email
    public function get_data($email_data, $db)
    {
        
        $query     = "SELECT * FROM " . $this->table . " WHERE email=? LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bind_param("s", $email_data);
        if ($statement->execute()) {
            $result = $statement->get_result();
            $num    = $result->num_rows;
            
            if ($num > 0) {
                $row = $result->fetch_assoc();
                
                return $row;
            } else {
                
                return false;
            }
        } else {
            return false;
        }
        
    }
    
    //check if email exists already before registration to avoid double email
    public function check_email($email, $db)
    {
        
        // $query  = "SELECT * FROM interns_data WHERE email = '$email' LIMIT 1";
        $query  = "SELECT * FROM interns_data WHERE email = :email LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            return true;
        }
        return false;
    }

    //login check
    public function check($email, $password, $db)
    {
        $password_hash = md5($password);
        $table         = 'interns_data';
        // $query         = "SELECT * FROM interns_data WHERE email = '$email' AND password = '$password_hash' LIMIT 1";
        // $result        = mysqli_query($db, $query);
        // if (mysqli_num_rows($result) > 0) {
        //     $row               = mysqli_fetch_array($result);
        //     $_SESSION['id']    = $row['id'];
        //     $_SESSION['email'] = $row['email'];
        //     return true;
            
        // } else {
        //     return false;
        // }

        $query  = "SELECT * FROM interns_data WHERE email = :email AND password_hash = :password_hash LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $password_hash);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            $row               = $results[0];
            $_SESSION['id']    = $row['id'];
            $_SESSION['email'] = $row['email'];
            return true;
        }
        return false;
    }

    public function is_logged_in(){
        if(isset($_SESSION['id'])){
            header("Location: dashboard.php");
        }
    }
    //get public key from id
public function getPublicKey($id, $db){
    
    if (empty($id)) {
        return false;
    }
    $query     = "SELECT public_key FROM " . $this->table . " WHERE id=:id LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            $row = $results[0];
            
            return $row['public_key'];
        } else {
            
            return false;
        }
}

//get public key from id
public function getPrivateKey($id, $db){
    $query     = "SELECT private_key FROM " . $this->table . " WHERE id=:id LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            $row = $results[0];
            
            return $row['private_key'];
        } else {
            
            return false;
        }
}



//get public key from id
public function getAccounts($id, $db){
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query     = "SELECT accounts.id, banks.name FROM accounts inner join banks on accounts.bank_id = banks.id  WHERE Intern_id=:id ";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            $row = $results;
            
            return $row;
        } else {
            
            return false;
        }
}
             
    //member class ends here    
}
