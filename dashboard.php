<?php
session_start();// Starting Session
// Storing Session
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: login.php");
    exit();
}else
    define ('DB_USER', "root");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "dragons_shield");
define ('DB_HOST', "localhost");
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_DATABASE;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
    $id = $_SESSION['user_id'];
    $query = "SELECT username from users_data where user_id ={$id}";
    $result = $conn->query($query);
    $records = $result->fetchColumn();
?>
<?php
include_once("dashboard-header.php");
?>

<div class="row wallet">
    <div class="col-md-12">
        <p>HNG Coin Wallet</p>
        <h2>9.0000<span> HNG</span></h2>
        <p>HNG Wallet Address: 1NBpecSgZ86hAPje2Rc7oFz</p>
    </div>
</div>

<div class="row dash-table col-md-12">
    <div class="col-md-5 dash-block">
        <h3 class="thead sun-die">Your Coin</h3>

        <table class="your-coins" style="width:100%">
            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

            <tr>
                <td>HNG Coin</td>
                <td class="text-right">3.000 HNG
                    <br/><span class="ngn-price">NGN5000.00</span></td>
            </tr>

        </table>
    </div>

    <div class="margin col-md-1">

    </div>

    <div class="col-md-5 dash-block">
        <h3 class="thead">
            Transaction History
        </h3>

        <table class="your-coins transaction-history" style="width:100%">
            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

            <tr>
                <td class="text-center">APR
                    <br/><span class="date-num">30</span></td>

                <td class="text-left">Transferred HNG Coin
                    <br/>
                    <span class="payee">Ogbeni Ore</span></td>

                <td class="text-left">-2.300 HNG</td>
            </tr>

        </table>
    </div>
</div>

<div class="row dash-table col-md-12">
    <div class="col-md-5 dash-block">
        <h3 class="thead sun-die">Top Buyers and Sellers</h3>

        <table class="your-coins tops" style="width:100%">
            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Sell</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

            <tr>
                <td><img src="img/dashboard/user-pic.png"></td>
                <td>Ogbeni Ore</td>
                <td class="text-right"><a href=""><button class="btn">Buy</button></a></td>
            </tr>

        </table>
    </div>

    <div class="margin col-md-1">

    </div>

    <div class="col-md-5 dash-block coin-share">
        <div class="encourage">
            <img src="img/dashboard/coin-share.png">
            <h2>Share HNG Coins with Friends</h2>
            <p>Encourage your friends and learn coding by offering them HNG Coins today!</p>
        </div>

        <div class="invite-friends">
            <a href="">Invite Friends</a>
        </div>
    </div>
</div>


<?php
include_once("footer.php");
?>
