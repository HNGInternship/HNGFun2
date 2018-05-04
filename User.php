<?php
// session_start();
class User
{
    
    public $timee;
    public $table;
    
    public function __construct()
    {
        
        $this->table = "interns_data";
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
        
        //  $query  = "SELECT * FROM ". $this->table." WHERE email = :email LIMIT 1";
        $query  = "SELECT * FROM ".$this->table." WHERE email = :email LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            return true;
        }
        return false;

        //  $result = mysqli_query($db, $query);
        //  if (mysqli_num_rows($result) > 0) {
            
        //     return true;
        //  } else {
        //      return false;
        //  }
        
    }
    
    
    
    
    //register construct function
    //
    
    public function register($firstname, $lastname, $email, $password, $public_key, $private_key, $token, $active, $created_at, $updated_at, $db)
    {
        $response = '';
        
        // Check if email already exist
        $chk_stmt = $db->prepare("SELECT id FROM ".$this->table." WHERE email =:email LIMIT 1");
        $chk_stmt->bindParam(':email', $email);
        $chk_stmt->execute();
        $chk_stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $chk_stmt->fetchAll();  // Even fetch() will do
        if(count($result)>0)
        {
            $response = 'exists';
        }else{

            $password_hash = md5($password);
            $private_key_hash = $this->encrypt($private_key);
            $timee = date('Y-m-d H:i:s');
            $link = "http://www.slayers.hng.fun/verifyAccount.php?S={$token}&q={$timee}";
            
            // $query = "INSERT INTO " . $this->table . "(first_name,last_name,email,username,country,state, phone, password, public_key, private_key, created_at, updated_at ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $sql = "INSERT INTO ". $this->table." (firstname, lastname, email, passwordhash, public_key, private_key, token, active, 
                                                created_at, updated_at) VALUES (:first_name, :last_name, :email, :password_hash, 
                                                :public_key, :private_key, :token, :active, :created_at, :updated_at)";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':first_name', $firstname);
            $stmt->bindParam(':last_name', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $password_hash);
            $stmt->bindParam(':public_key', $public_key);
            $stmt->bindParam(':private_key', $private_key_hash);
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':active', $active);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':updated_at', $updated_at);
            
            if ($stmt->execute()) {
                // $to = $email;
                // $subject = 'Welcome to HNG Internship';
                // $from='hello@hng.fun';

                // $message = '<html><body>';
                // $message .= '<h1>Hi '. $firstname .'!</h1>';
                // $message .= '<h3>Thank you for your interest in HNG Internship kindly follow the link below to activate your account.</h3>';
                // $message .= '<p><a href="'.$link.'">activate account</a></p>';
                // $message .= '</body></html>';
                // $headers  = 'MIME-Version: 1.0' . "\r\n";

                // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // // Create email headers
                // $headers .= 'From: '.$from."\r\n".
                // 'Reply-To: '.$from."\r\n" .
                // 'X-Mailer: PHP/' . phpversion();

                // mail($to, $subject, $from, $message); // sendMail true
                $response = 'true';
            }
            else {
                var_dump($stmt->errorInfo(), 0);
                $response = 'false';
            }
        }
        return $response;
    }
    
    // send a welcome mail
    function sendMail( $to, $subject, $from, $message)
    {        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers)) return true;
        
        return false;
    }

    //get details of user
    
    public function get_profile($db)
    {
        if (!isset($_SESSION['id'])) {
            //location to redirect to should be set here 
            $location = '';
            redirect($location);
        }
        
        $id = $_SESSION['id'];
        if (empty($id)) {
            die("Your session has expired or your not logged in. please Login");
        }
        $dataa = array();
        $i     = 0;
        $query = "SELECT * FROM " . $this->table . " WHERE id = '$id' LIMIT 1";
        
        $result = $db->query($query);
        $num    = mysqli_num_rows($result);
        if ($num > 0) {
            
            while ($row = mysqli_fetch_array($result)) {
                $dataa['fullname'] = $row['fullname'];
                $dataa['username'] = $row['username'];
                $dataa['email']    = $row['email'];
                $dataa['timee']    = $row['timee'];
                $dataa['lastname'] = $row['lastname'];
                
                $dataa['id'] = $row['id'];
                
                // $i++;
            }
            
            return $dataa;
        }
        
        else {
            return false;
            //echo $db->error;
            //return false; 
            
        }
        
        
        
    }
    
    //profile update function
    
    public function update_profile($fullname, $lastname, $email, $db)
    {
        if (!isset($_SESSION['id'])) {
            die("Your session has expired or your not logged in. please Login");
        }
        
        $id = $_SESSION['id'];
        
        $query     = "UPDATE " . $this->table . " SET fullname=?,email=? WHERE id=? LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bind_param("sss", $fullname, $email, $id);
        
        
        
        if ($statement->execute()) {
            return true;
        }
        
        else {
            return false;
            
        }
        
        
        
    }
    
    
    //password token update
    public function update_token($email, $token, $db)
    {
        $query     = "UPDATE " . $this->table . " SET token=:token WHERE email=:email LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bindParam(":token", $token);
        $statement->bindParam(":email", $email);
        if ($statement->execute()) {
            return true;
        }
        
        else {
            return false;
            
        }
        
        
        
    }
    
    //update verification status
    public function verified($id, $db)
    {
        $query     = "UPDATE " . $this->table . " SET verify_status=1 WHERE id=? LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bind_param("s", $id);
        
        if ($statement->execute()) {
            return true;
        }
        
        else {
            return false;
            
        }
        
        
        
    }
    
    //login check
    public function check($email, $password, $db)
    {
        $password_hash = md5($password);
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
        $query  = "SELECT * FROM ".$this->table." WHERE email = :email AND password = :password_hash LIMIT 1";
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
    
    
    public function get_data_from_id($id, $db)
    {
        
        $query     = "SELECT * FROM " . $this->table . " WHERE id=? LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bind_param("s", $id);
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
    
    
    public function verify_code($id, $code, $db)
    {
        
        $query     = "SELECT * FROM " . $this->table . " WHERE id=? LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bind_param("s", $id);
        if ($statement->execute()) {
            $result = $statement->get_result();
            $num    = $result->num_rows;
            
            if ($num > 0) {
                $row = $result->fetch_assoc();
                
                $v = strcmp($row['verify_code'], $code);
                
                similar_text($row['verify_code'], $code, $percent);
                
                
                if (intval($percent) === 100) {
                    return true;
                    
                } else {
                    return "no";
                }
            } else {
                
                return false;
            }
        } else {
            return false;
        }
        
    }
    
    
    //for admin to get users on the database if need be
    public function get_users($db)
    {
        $dataa = array();
        $i     = 0;
        $query = "SELECT * FROM " . $this->table . " ";
        
        $result = $db->query($query);
        $num    = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $dataa['firstname'][$i] = $row['name'];
                $dataa['email'][$i]     = $row['email'];
                $dataa['timee'][$i]     = $row['timee'];
                $dataa['lastname'][$i]  = $row['lastname'];
                
                $i++;
            }
            return $dataa;
            
        } else {
            return false;
        }
        
        
    }
    
    
    
    
    
    //to check password token for password resets       
    public function check_token($token, $db)
    {
        // $query  = "SELECT * FROM interns_data WHERE token = '$token' LIMIT 1";
        $query  = "SELECT * FROM ".$this->table." WHERE token = :token LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':token', $token);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){
            return true;
        }
        return false;
        // $result = mysqli_query($db, $query);
        // if (mysqli_num_rows($result) > 0) {
            
        //     return true;
        // } else {
        //     return false;
        // }
        
    }
    
    
    //change password function
    public function update_password($password, $token, $db)
    {
        $password_hash = md5($password);
        $query         = "UPDATE " . $this->table . " SET password=:password_hash WHERE token=:token LIMIT 1";
        $statement     = $db->prepare($query);
        $statement->bindParam(":password_hash", $password_hash);
        $statement->bindParam(":token", $token);
        if ($statement->execute()) {
            return true;
        }
        
        else {
            return false;
            
        }
        
        
    }

    public function remove_token($token, $db){
        $query         = "UPDATE " . $this->table . " SET token = null WHERE token=:token";
        $statement     = $db->prepare($query);
        $statement->bindParam(":token", $token);
        if ($statement->execute()) {
            return true;
        }
        
        else {
            return false;
            
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

public function getAccounts($id, $db){
    $query     = "SELECT * FROM accounts inner join banks on banks.id = accounts.bank_id WHERE accounts.intern_id=:id";
    $statement = $db->prepare($query);
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $results = $stmt->fetchAll();
        if(count($results) > 0){            
            return $results;
        } else {
            
            return false;
        }
    
}

private function encrypt($string, $key){
 return rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
}

private function decrypt($string, $key){
  return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string),  MCRYPT_MODE_ECB));
}
    //member class ends here    
}