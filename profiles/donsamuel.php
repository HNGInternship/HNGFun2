<!-- StarT YOUR PROFILE CODE HERE -->
<?php

 //require 'db.php';

  $result = $conn->query("Select * from secret_word LIMIT 1");

  $result = $result->fetch(PDO::FETCH_OBJ);
  //new code start here//
       
        require '../../config.php';
        $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
        
        if(!$conn){
            die('Unable to connect');
        }
        $question = $_POST['message'];
        $pos = strpos($question, 'train:');

        if($pos === false){
            $sql = "SELECT answer FROM chatbot WHERE question like '$question' ";
            $query = $conn->query($sql);
            if($query){
                echo json_encode([
                    'results'=> $query->fetch_all()
                ]);
                return;
            }
        }else{
            $trainer = substr($question,6 );
            $data = explode('#', $trainer);
            $data[0] = trim($data[0]);
            $data[1] = trim($data[1]);
            $data[2] = trim($data[2]);
//end here//
  $secret_word = $result->secret_word;



  $result2 = $conn->query("Select * from interns_data where username = 'olubori'");
// another code starts here//
                $sql = "INSERT INTO chatbot (question, answer)
                VALUES ('$data[0]', '$data[1]')";


                $query = $conn->query($sql);
                if($query){
                    echo json_encode([
                        'results'=> 'Trained Successfully'
                    ]);
                    return;
                }else{
                    echo json_encode([
                        'results'=> 'Error training'
                    ]);
                    return;
                }
                
            }else{
                echo json_encode([
                    'results'=> 'Wrong Password'
                ]);
                return;
            }
            
        }
        
        echo json_encode([
            'results'=>  'working'
        ]);
        
    return ;
    }else{
        //echo 'HI';
        //return;
    }
  
// end here //
  $user = $result2->fetch(PDO::FETCH_OBJ);

?>
    <style>
        #big-container{
          width: 100%;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
        .mainSection {
            width:auto;
            height: auto;
            background-color: brown;
            display: flex;
        }    
        
        .image {
            background-image: url('http://res.cloudinary.com/emmanuelstudentpage/image/upload/v1524679014/sam.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            width: 500px;
            height: 400px;
            margin: 50px;
        
             }
        .para {
            font-size: 25px;
            color: green;
            
        }
        
     .detail {
        width: 500px;
         height: 250px;
         color: black;
         font-size: 20px;
         margin-top: 65px
         
     }
        
    </style>

  <div id="big-container">
    
   <div class="mainSection">
   
    <div class="image">
      </div>
       <div class="detail"><p class="para"> I am Samuel Onyedikachi Onukoagu</p>
       <p>
        I am a Nigerian.
           </p>
           <p>
     I love all things techie which is why I am diving into programming.
           </p>
           <p>
     I am  ambitious, a good team-player.
           </p>
           
        </div>
    </div>
    <div id='bodybox'>
                <div id='chatborder'>
                  <p id="chatlog7" class="chatlog">&nbsp;</p>
                  <p id="chatlog6" class="chatlog">&nbsp;</p>
                  <p id="chatlog5" class="chatlog">&nbsp;</p>
                  <p id="chatlog4" class="chatlog">&nbsp;</p>
                  <p id="chatlog3" class="chatlog">&nbsp;</p>
                  <p id="chatlog2" class="chatlog">&nbsp;</p>
                  <p id="chatlog1" class="chatlog">&nbsp;</p>
                  </div>
                  <div><input style="width:170px" type="text" name="chat" id="chatbox" placeholder="chat here with me..." onfocus="placeHolder()"/>
                  <button style="float: right" onclick = loadDoc()><i class="fa fa-send-o fa-2x"></i></button></div>
                
    </div>
  </div>
        <script>
    function loadDoc() {
        //alert('Hello');
        var message = document.querySelector('#chatbox');
        //alert(message.value);
        var p = document.createElement('p');
        p.id = 'user';
        var chatarea = document.querySelector('#chatlog1');
        p.innerHTML = message.value;
        chatarea.append(p);
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var result = JSON.parse(xhttp.responseText);
            
            var pp = document.createElement('p');
            pp.id = 'bot';
            if(result.results == ''){
                pp.innerHTML = 'Not in database. please train me';
                chatarea.append(pp)
                return;
            }
            console.log(typeof(result.results))
            if(typeof(result.results) == 'object' ){
                var res = Math.floor(Math.random() * result.results.length);
                pp.innerHTML = result.results[res];
                chatarea.append(pp)
            }else{
                var res = Math.floor(Math.random() * result.results.length);
                pp.innerHTML = result.results;
                chatarea.append(pp)
            }
            
            }
        };
        xhttp.open("POST", "/profiles/donsamuel.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message="+message.value);
    }
    </script>
                

    <script type="text/javascript" src="https://static.oracle.com/cdn/jet/v5.0.0/3rdparty/require/require.js"></script>

<script type="text/javascript" src="https://static.oracle.com/cdn/jet/v@version@/default/js"></script>

<script type="text/javascript" src="https://static.oracle.com/cdn/jet/v@version@/3rdparty"></script>

<script type="text/javascript" src="../js/main.js"></script>
