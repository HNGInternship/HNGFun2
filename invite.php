<?php
include_once("header.php");
?>
<style>
   .wrapper{
       background: white;
       width: 100%;
       margin:0;
       padding: 3rem;
   }
   .sendInvitesButton{
        width: 200px;
        height:50px;
        font-size: 1.3rem;
        display: block;
        margin: 4rem auto;
   }
</style>

    <div class="wrapper">

        <div class="container d-flex flex-column justify-content-center mt-5">
            <h3 class="mb-5 text-center">Invite Your Friends</h3>
		  <form class="w-50 mx-auto mt-5">
		  	
		  	<div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>

              <div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>

              <div class="input-group mb-4 mt-0">
		  	  <div class="input-group-prepend ">
		  	    <span class="input-group-text bg-transparent px-5 font-icon" id="basic-addon1">@</span>
		  	  </div>
		  	  <input type="text" class="form-control  rounded-right bg-transparent" placeholder="joemark@example.com" aria-label="Username" aria-describedby="basic-addon1">
		  	</div>
            
             <a href="invitesentmessage.php"> <input type="submit" value="Send" name="submit-invites" class="btn btn-primary sendInvitesButton"></a>
          </form>
		</div>
    </div>
<?php
include_once("footer.php");
?>
