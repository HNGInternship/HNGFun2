<?php
include_once("header.php");
error_reporting(-1);

if(isset($_POST['send'])){
$email =  $_POST['email'];
$date = date('F j, Y');
$msg = '
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <title>
      
    </title>
    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      #outlook a { padding:0; }
      .ReadMsgBody { width:100%; }
      .ExternalClass { width:100%; }
      .ExternalClass * { line-height:100%; }
      body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
      table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
      img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
      p { display:block;margin:13px 0; }
    </style>
    <!--[if !mso]><!-->
    <style type="text/css">
      @media only screen and (max-width:480px) {
        @-ms-viewport { width:320px; }
        @viewport { width:320px; }
      }
    </style>
    <!--<![endif]-->
    <!--[if mso]>
    <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type="text/css">
      .outlook-group-fix { width:100% !important; }
    </style>
    <![endif]-->
    
  <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700" rel="stylesheet" type="text/css">
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);
    </style>
  <!--<![endif]-->


    
<style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100 { width:100% !important; }
.mj-column-per-40 { width:40% !important; }
.mj-column-per-20 { width:20% !important; }
  }
  a:link {
    color: #fff;
    }
    a:visited {
    color: #fff;
    }
    a:hover {
    color: #fff;
    }
</style>


    <style type="text/css">
    
    
    </style>
    
  </head>
  <body style="background-color:white;">
    
    
  <div
     style="background-color:white;"
  >
    
  
  <!--[if mso | IE]>
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 0px 16px 0px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:600px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"
          >
            
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"
  >
    <tbody>
      <tr>
        <td  style="width:116px;">
          
  <img
     height="39px" src="https://res.cloudinary.com/mclint-cdn/image/upload/v1523824094/hng-logo.svg" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="116"
  />

        </td>
      </tr>
    </tbody>
  </table>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="background:#00AEFF;background-color:#00AEFF;Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#00AEFF;background-color:#00AEFF;width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:40px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:520px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="center" style="font-size:0px;padding:4px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:35px;font-weight:bold;line-height:1;text-align:center;color:#fff;"
  >
    YOU ARE INVITED
  </div>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 0px 16px 0px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:600px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="center" style="font-size:0px;padding:30px  30px 0px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:16px;letter-spacing:0.03rem;line-height:19px;text-align:center;color:#7C888D;"
  >
    <span style="color: #00aeff">We would love for you to join us!</span> Hotesls.ng will be hosting an internship for programmers and its an opportunity to get to meet others developers.
  </div>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 0px 16px 0px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:600px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;"
          >
            
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:220px;line-height:100%;"
  >
    <tr>
      <td
         align="center" bgcolor="#00AEFF" role="presentation" style="border:none;border-radius:3px;color:white;cursor:auto;padding:10px 25px;" valign="middle"
      >
        <p 
           style="background:#00AEFF;color:white;font-family:Lato;font-size:14px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;"
        >
          <a href="http://hng.fun/signup.php">INVITE LINK</a>
        </p>
      </td>
    </tr>
  </table>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 25px 30px 25px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:220px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-40 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="left" style="font-size:0px;padding:4px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:15px;line-height:24px;text-align:left;color:#7C888D;"
  >
    Date:<br>Invited by:
  </div>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
        <td
           style="vertical-align:top;width:110px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-20 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
        <td
           style="vertical-align:top;width:220px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-40 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="left" style="font-size:0px;padding:4px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:15px;line-height:24px;text-align:left;color:#7C888D;"
  >
    '.$date.'<br><strong>'.$email.'</strong></a></span>
  </div>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 0px 16px 0px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:600px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="left" style="font-size:0px;padding:0px 30px 0px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:16px;line-height:1;text-align:left;color:#828282;"
  >
    If you have any questions or feedback about this, please reply this email
  </div>

          </td>
        </tr>
      
        <tr>
          <td
             style="font-size:0px;word-break:break-word;"
          >
            
  
<!--[if mso | IE]>

    <table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td height="25" style="vertical-align:top;height:25px;">
  
<![endif]-->

  <div
     style="height:25px;"
  >
    &nbsp;
  </div>
  
<!--[if mso | IE]>

    </td></tr></table>
  
<![endif]-->


          </td>
        </tr>
      
        <tr>
          <td
             style="font-size:0px;padding:0px 30px ;word-break:break-word;"
          >
            
  <p
     style="border-top:solid 1px #BDBDBD;font-size:1;margin:0px auto;width:100%;"
  >
  </p>
  
  <!--[if mso | IE]>
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #BDBDBD;font-size:1;margin:0px auto;width:540px;" role="presentation" width="540px"
    >
      <tr>
        <td style="height:0;line-height:0;">
          &nbsp;
        </td>
      </tr>
    </table>
  <![endif]-->


          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  
  <table
     align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
  >
    <tr>
      <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
  <![endif]-->

  
  <div  style="Margin:0px auto;max-width:600px;">
    
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"
    >
      <tbody>
        <tr>
          <td
             style="direction:ltr;font-size:0px;padding:0px 0px 16px 0px;padding-top:21px;text-align:center;vertical-align:top;"
          >
            <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            
    <tr>
  
        <td
           style="vertical-align:top;width:600px;"
        >
      <![endif]-->
        
  <div
     class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"
  >
    
  <table
     border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"
  >
    
        <tr>
          <td
             align="left" style="font-size:0px;padding:0px  30px 13px 30px;word-break:break-word;"
          >
            
  <table
     align="left" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"
  >
    <tbody>
      <tr>
        <td  style="width:55px;">
          
  <img
     height="18px" src="https://res.cloudinary.com/mclint-cdn/image/upload/v1523824094/hng-logo.svg" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="55"
  />

        </td>
      </tr>
    </tbody>
  </table>

          </td>
        </tr>
      
        <tr>
          <td
             align="left" style="font-size:0px;padding:0px  30px 0px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:12px;letter-spacing:3%;line-height:23px;text-align:left;color:#828282;"
  >
    Hotels.ng is an online booking agency specialised in hotel booking within nigeria. we market hotels online nd book rooms for clients. we proffer hotel accomodation solution to the people looking for hotels witnin an area or particular city .<br> we
      provide them with appropriate hotels that match their budget and expectations.
  </div>

          </td>
        </tr>
      
        <tr>
          <td
             align="left" style="font-size:0px;padding:8px 30px 13px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:12px;line-height:1;text-align:left;color:#00AEFF;"
  >
    Learn more
  </div>

          </td>
        </tr>
      
        <tr>
          <td
             style="font-size:0px;padding:0px 30px 0px 30px;word-break:break-word;"
          >
            
  <p
     style="border-top:solid 1px #BDBDBD;font-size:1;margin:0px auto;width:100%;"
  >
  </p>
  
  <!--[if mso | IE]>
    <table
       align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #BDBDBD;font-size:1;margin:0px auto;width:540px;" role="presentation" width="540px"
    >
      <tr>
        <td style="height:0;line-height:0;">
          &nbsp;
        </td>
      </tr>
    </table>
  <![endif]-->


          </td>
        </tr>
      
        <tr>
          <td
             align="left" style="font-size:0px;padding:16px 30px 0px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:12px;line-height:1;text-align:left;color:#828282;"
  >
    3, Birrel Avenue, Yaba Lagos. <a href="tel:2347008808800" style="text-decoration: none; color:#828282;">+234 700 880 8800</a>
  </div>

          </td>
        </tr>
      
        <tr>
          <td
             align="left" style="font-size:0px;padding:16px 30px 16px 30px;word-break:break-word;"
          >
            
  <div
     style="font-family:Lato;font-size:12px;line-height:1;text-align:left;color:#828282;"
  >
    Copyright © 2017 Hotels.ng, All rights reserved.
  </div>

          </td>
        </tr>
      
  </table>

  </div>

      <!--[if mso | IE]>
        </td>
      
    </tr>
  
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
  </div>

  
  <!--[if mso | IE]>
      </td>
    </tr>
  </table>
  <![endif]-->


  </div>

  </body>
</html>';
    include("class.phpmailer.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
 
    $mail = new PHPMailer();
     
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    
    $mail->Host = "smtp.gmail.com";
    
    $mail->Username = "techissued@gmail.com";
    $mail->Password = "07015120757"; 
     
    $mail->From = "techissued@gmail.com";
    $mail->FromName = "HNG INTERNSHIP";
     
    $mail->AddAddress($email);
    // $mail->AddCC('tech@gmail.com', '');
    $mail->Subject = "HNG INTERNSHIP";
    $mail->Body = $msg;
    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $str1= "gmail.com";
    $str2=strtolower("techissued@gmail.com");
    If(strstr($str2,$str1))
    {
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPKeepAlive = true;  
    $mail->Mailer = "smtp"; 

    if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
    echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
    } 
    else {
        echo "<script type=\"text/javascript\">
        alert(\"Invite Link Sent.\");
        window.location = \"invite.php\"
       </script>";
    }
    }
    else{
        $mail->Port = 25;
        if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
    } 
    else {
        echo "<script type=\"text/javascript\">
        alert(\"Invite Link Sent.\");
        window.location = \"invite.php\"
       </script>";
    }
    }  
    
}
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
		<p style="font-size: 16px;margin-bottom: 30px; margin-top: 10px; opacity: 0.7" class="text-center">Encourage your friends to start coding by offering them HNG coins today!
        </p>
<<<<<<< HEAD
        <form action="#"  method="POST" class="text-center" style="margin-top:">
            <!-- <div class="form-row" style="margin-left: 30px;">
=======
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
>>>>>>> 513113879be07d7958d89eda70aaf915149905ca
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Username</p>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder=""/>
                </div>
                <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Amount</p>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""/>
                </div>
            </div> -->
            <center>
            <div class="form-row text-center" >
                <div class="form-group col-md-6" style="margin-left: 0px; ">
                	<!-- <p style="font-size: 12px; margin-bottom: 0px; margin-left: 250px; opacity: 0.7">Email address</p> -->
                    <input align="center" style="margin-left: 120px"  type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                </div>
                <!-- <div class="form-group col-md-6">
                	<p align="left" style="font-size: 12px; margin-bottom: 0px; margin-left: 10px; opacity: 0.7">Slack Username</p>
                    <input type="text" name="slack" id="phone" class="form-control" placeholder="">
                </div> -->
            </div>
            </center>
                 
<<<<<<< HEAD
                    <button name="send" style="margin-top: 30px; border:0px; margin-bottom: 7px; background-color: #2196F3; color: white; width: 400px; font-size: 12px; height: 40px; border-radius: 10px" id="submitbutton" class="">Send Invite</button>
        </form>
=======
        </form>-->
>>>>>>> 513113879be07d7958d89eda70aaf915149905ca

        </div>
        </div>

        <?php
        include_once("footer.php");
        ?>