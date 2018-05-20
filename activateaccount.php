<?php include("header.php");
	
	$email=$_GET["email"];
	$name=$_GET["name"];

?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row justify-content-md-center" style="text-align: center;">
        <div class="col-sm-12">
            <h1 style="font-size:2.0em"><b>Activate Your Account</b></h1>
            <p style="font-size: 1.0em;">An activation link has just been sent to the email address you provided.<br/>
            Check your email and click on the activation link provided to activate your account.</p>
            <p style="font-size: 1.0em;cursor:default">If you haven't received the email yet, click the button below to resend the activation link.</p>
            <a href="#" class="btn btn-primary" id="resendActivation" style="font-size:0.8em;padding:5px 15px;border-radius:3px">Resend Activation Link</a>
             <input type="hidden" id="email" value="<?=$email?>">
             <input type="hidden" id="name" value="<?=$name?>">


             <!-- Modal -->
<div class="modal fade" id="activationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <p  id="closeButton" style="text-align: right;margin-bottom: 0%;opacity: 1; padding-right: 5%" class="close" data-dismiss="modal" aria-label="Close">
          <img src="img/icons/cancel_icon.svg" style="border: 1.5px solid #EB5757;padding: 1%;border-radius: 50%">
        </p>
      <div class="modal-body">
        <h4 style="text-align: center;" id="modalHeader">Success</h4>
      </div>
<p class="footerText visible" id="modalFooter" style="text-align: center;color: #3D3D3D; margin-top: 0%;"> An activation email has been sent</p>

<div id="checkMark" class="hidden" style="background: #2196F3 ; position: relative; width: 150px;height: 150px;border-radius: 50%;left:35%;margin-bottom: 1.4%;">
    <img src="img/icons/check_icon.svg" style="position: absolute;top:25%;left: 23%">
</div>

<div id="failMark" style="text-align: center">
    <img src="img/icons/cancel_white.svg" style="background:#EB5757;padding: 2%;border-radius: 100%;margin-bottom: 18.7%;height: 150px;width: 150px">
</div>
      
    </div>
  </div>
</div>

<!-- Modal -->


        </div>   
    </div>
</div>  


<script type="text/javascript">
       $( document ).ready(function() {
    $("#resendActivation").on("click",function(){
	$("#resendActivation").html("Sending...");

	$("#checkMark").hide();
	$("#failMark").hide();



	$.ajax('process_access',{

            type : 'post',
            data : {email:$("#email").val(),name:$("#name").val()},
            success: function(data){
                $("#resendActivation").html("Resend Activation Link");
                $('#activationModal').modal('show')

              if(data==="1"){

         
              }

				else if (data==="0"){

				$("#modalHeader").html("Failed");
              	$("#modalFooter").html("The account doesn't exist");
				$("#failMark").show();


				}            
                $('#activationModal').modal('show')

            },
           error : function(jqXHR,textStatus,errorThrown){
                 if(textStatus ='error'){
                 	$("#modalHeader").html("Failed");
              	$("#modalFooter").html("An error occured");
				$("#failMark").show();

                 	$('#activationModal').modal('show')
                $("#resendActivation").html("Resend Activation Link");

                 }
            },
            beforeSend :function(){
     			$("#checkMark").hide();
				$("#failMark").hide();
         
            },
        });

      
      }

    });
    
</script>    

<?php include("footer.php");?>