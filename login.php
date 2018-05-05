<?php
ob_start();
session_start();

define ('DB_USER', "root");
define ('DB_PASSWORD', "29gE9t*dJ2#2f-BS");
define ('DB_DATABASE', "slayers_db");
define ('DB_HOST', "localhost");
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_DATABASE;
try {
    $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = trim($username);
    $password = trim($password);
    $sql = "Select * from users_data where (username = :username OR email= :username)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':username', $username);
    $statement->execute();
    //Fetch row.
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        header("location:login.php?msg=failed");
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        //Compare the passwords.
        $password = md5($password);
        if ($password == $user['password']){
            if(!empty($_POST["remember"])) {
                setcookie ("member_login",$username,time()+ (86400*14));
                setcookie ("member_password",$password,time()+ (86400*14));
            }else {
                if(isset($_COOKIE["member_login"])) {
                    setcookie ("member_login","");
                }if(isset($_COOKIE["member_password"])) {
                    setcookie ("member_password","");
                }
            } 	session_regenerate_id();
            $_SESSION['login_user']=$username; // Initializing Session
            $_SESSION["user_id"]  = $user["user_id"];
            session_write_close();
            header('Location: dashboard.php'); // Redirecting To Other Page
            exit;
        } else{
            //$validPassword was FALSE. Passwords do not match.
            header("location:login.php?msg=failed");
        }
    }

}
?>
<?php include('header.php'); ?>
<div style="text-align: center; padding-top: 20px; padding-bottom: 10px">
    <h1 class="font-weight-normal">
        <h1>Log In</h1>
        <p style="font-size: 16px;">Login to access your dashboard and manage your account.</p>
        <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') { ?>
        <p style="font-size: 16px;">Incorrect username / password combination!</p>
        <?php } ?>
    </h1>
</div>
<div class="container" style='color: #3D3D3D'>
    <div class="row justify-content-md-center" style="text-align: center">
        <div class="col-lg-4">
            <div style="padding: 0px 20px 0px 20px">
                <form class="form-signin" id="login_form" method="post">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" id="email" class="form-control" placeholder="Username or Email" name="username" required="" autofocus="">
                    <br/>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                    <br/>
                    <div class="checkbox mb-3" style="text-align: left">
                        <label>
                            <input type="checkbox" value="remember-me" name="remember">&nbsp; <span style="font-size: 16px;text-align:center;">Remember me</span>
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block" name="login" id="login" type="submit">Log In</button>
                    </div>
                </form>
            </div>
            <div style="padding-top: 30px; padding-bottom: 30px">
                <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698845-icon-118-lock-rounded-128.png" height="15px" width="auto"/>
                <span style="font-size: 14px; color: grey">Forgot Password?<a href="fpass.php" style="color: #008DDD"> Click here</a></span>
            </div>
            <div style="padding-bottom: 20px; font-size: 14px; color: #ADADAD">Don't have an account?&nbsp; <a href="signup.php" style="color: #008DDD">Get Started</a></div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>


   
