
<?php
   include_once('header.php');
    require 'db.php';
?>





<!-- Page Content -->

<style type="text/css">
  .container{
  
  padding-top: 30px;
 
  }
  
  .card{

  height: 30rem;
  width: 50rem;
  background-color: #f0b300;
  padding-top: 30px;
  border-radius: 50%;
  font-family: serif;
  font-weight: bolder;
  
  }
  img{
    width: 10rem;
    border-radius: 30%;
    margin-left: 100px;

  }
</style>

</div>
<body class = 'profile' style="height: 50px , width: 20px">

  <div class="container">
  
    

 
    <center>
      <div class="card">
      <img src="https://res.cloudinary.com/dycw8sy0/image/upload/v1524458808/26285103.jpg" alt="ima">
      <h1>ALABI OLANIKE BALQEES</h1>
      <h2>@balqees</h2>
     <p class="titler"> Web developer, Design Enthusiast</p>
      <p>Lagos,Nigeria</p>
     <div style="margin: 24px 0;">
      
      <a href="https://twitter.com/1st_SHEtizen"><i class="fa fa-twitter"></i></a>  
     
   </div>
    </center> 
   





   
   </div>





<style type="text/css">
  
  

      body {
      
      background-size: cover;
    }
    p{ color:black
    
    }
    h1{ color: blue
    }
    h3{ color: blue
    }
    h5{ color: white
    
    }
    .container{
            width: 40%;
            min-height: 100%
        }
        .body0 {
            height: 100%;
        }

        span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }
    
    .chat-frame {
      border-color: #cccccc;
      color: #333333;
      background-color: #ffffff;
      height: 350px;
     margin-left: 800px;
      margin-bottom: 50px;
      border-radius: 10px;
    }

    .chat-messages {
      background-color: #f0b300;
      padding: 5px;
      height: 300px;
      overflow-y: auto;
      margin-left: 15px;
      margin-right: 15px;
      border-radius: 6px;
      
    }

    .single-message {
      margin-bottom: 5px; 
      border-radius: 5px;
      min-height: 30px;
      
    }

    .single-message-bg {
      background-color: #D35400;
      
      
    }

    .single-message-bg2 {
      background-color: #95A5A6;
      
    }

    input[name=question] {
      height: 50px;
    }

    button[type=submit] {
      height: 50px;
      background-color: darkblue;
      color: black
    }

    .circle {
      width: 30%;
      margin-left: 20%;
      border-radius: 50%;
    }
    .f-icon {
      font-size: 40px;
    }
   

</style>



<!--  -->


    <div class="col-md-4 offset-md-1 chat-frame">
            <div class="row chat-messages" id="chat-messages">
                <div class="col-md-12" id="message-frame">
                    <div class="row single-message">
                        <div class="col-md-12 single-message-bg">
                           <div class="style1"><h5>Talk to  <span style="font-weight: bold">iBot</span></h5></div> 
                        </div>
                    </div>
                    <div class="row single-message">
                        <div class="col-md-12 single-message-bg">
                            <div class="style2"><h5>Ask me!</h5></div>
                        </div>
                    </div>
                    <div class="row single-message">
                        <div class="col-md-12 single-message-bg">
                            
                            <div class="style3"><h5>You Can train me, just type <br/><b>train: question #answer #password</b><h5></div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <form class="form-inline col-md-12 col-sm-12" id="question-form">
                    <div class="col-md-12 col-sm-12 col-12">
                        <input class="form-control w-100" type="text" name="question" placeholder="Your question..." />
                    </div>
                    <div class="col-md-12 col-sm-12 col-12" style="margin-top: 20px">
                        <button type="submit" class="btn btn-info w-100" >Enter</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>


<body class = 'profile'>



</body>



<script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>






<script>
    
    $(document).ready(function(){
        var questionForm = $('#question-form');
        questionForm.submit(function(e){
            e.preventDefault();
            var questionBox = $('input[name=question]');
            var question = questionBox.val();
            
            //display question in the message frame as a chat entry
            var messageFrame = $('#message-frame');
            var chatToBeDisplayed = '<div class="row single-message">'+
                        '<div class="col-md-12 offset-md-2 single-message-bg2">'+
                            '<h5>'+question+'</h5>'+
                        '</div>'+
                    '</div>';
            
            messageFrame.html(messageFrame.html()+chatToBeDisplayed);
            $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
            //send question to server
            $.ajax({
                url: "/profiles/balqees.php",
                type: "get",
                data: {question: question},
                dataType: "json",
                success: function(response){
                    if(response.status == 1){
                        var chatToBeDisplayed = '<div class="row single-message">'+
                                    '<div class="col-md-12 single-message-bg">'+
                                        '<h5>'+response.answer+'</h5>'+
                                    '</div>'+
                                '</div>';
                        messageFrame.html(messageFrame.html()+chatToBeDisplayed);
                        questionBox.val("");    
                        $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
                    }else if(response.status == 0){
                        var chatToBeDisplayed = '<div class="row single-message">'+
                                    '<div class="col-md-12 single-message-bg">'+
                                        '<h5>'+response.answer+'</h5>'+
                                    '</div>'+
                                '</div>';
                        messageFrame.html(messageFrame.html()+chatToBeDisplayed);
                        $("#chat-messages").scrollTop($("#chat-messages")[0].scrollHeight);
                    }
                },
                error: function(error){
                    console.log(error);
                }
            })
        });
    });

<?php
include_once('footer.php');
?>

