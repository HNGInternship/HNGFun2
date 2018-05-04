<?php
include_once("header.php");
?>

<style type="text/css">
	#email, #phone, #lastname, #firstname{
		width: 350px;
		border-radius: 7px;
	}

</style>
<div class="" style="padding-top: 7%">

    <div class="col-md-6  mx-auto">
	<div style="text-align:center;">
        <img src="images/coins.png" style="width: 42px; margin-top: -20px;margin-right: 3px; display: inline-block;">
        <h1 class="login-title text-center" style="font-weight: bold; font-size: 28px;display: inline;padding-top: 27px; margin-top: 40px;">Share HNG coins with friends</h1>
    </div>
        <p style="font-size: 14px;margin-bottom: 30px; margin-top: 10px; opacity: 0.7" class="text-center">Encourage your friends to start coding by offering them HNG coins today!
        </p>
        <div class="form-row" style="margin:0 auto;">
			<div class="form-group col-md-6">
    <label for="username"align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Username</label>
    <input type="text" class="form-control" id="username" placeholder="" style="border-color:#0475CE;">
  </div>
  <div class="form-group col-md-6">
    <label for="amount"align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Amount</label>
    <input type="text" class="form-control" id="amount" placeholder="" style="border-color:#0475CE;">
  </div>

  <button style="margin-top: 45px; border:0px; margin-bottom: 50px; margin-left: auto; margin-right: auto; background-color: #2196F3; color: white; width: 400px; font-size: 15px; height: 40px; text-align:center;border-radius: 10px" id="submitbutton" class="">SEND COINS</button>
  </div>
       <!-- <form action="" class="text-center" style="margin-top:">
            <div class="form-row" style="margin-left: 30px;">
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Username</p>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder=""/>
                </div>
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Amount</p>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""/>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="amount"align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Amount</label>
                <input type="text" class="form-control" id="amount" placeholder="" style="border-color:#0475CE;">
            </div>

        </form>-->

        </div>
        </div>

<?php
include_once("footer.php");
?>
