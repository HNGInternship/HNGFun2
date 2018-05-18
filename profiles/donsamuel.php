<!-- StarT YOUR PROFILE CODE HERE -->
<?php 
   if(isset($_GET['answer'])){

        require_once '../../config.php';
    
       try {
		    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
		} catch (PDOException $pe) {
		    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
		}
		
		
		$question = htmlspecialchars($_GET['question']);
		$answer = htmlspecialchars($_GET['answer']);

		$params = array(':question' => $question, ':answer' => $answer);

		$sql = 'INSERT INTO chatbot ( question, answer )
		      VALUES (:question, :answer);';

        $results;
		try {
		    $q = $conn->prepare($sql);
		    if ($q->execute($params) == true) {
		        $results = [
		            'results' => "Thanks for training me, I'm feeling lucky and smart'"
		        ];
		    };
		} catch (PDOException $e) {
			$results = [
			    'results'    => "Error! I couldn't recieve training, my bad (:"
            ];
		    throw $e;
        }
        
        echo json_encode($results);

        return;

	}else if(isset($_GET['question'])){
        require_once '../../config.php';

        try {
		    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
		} catch (PDOException $pe) {
		    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
		}

	   	$question = htmlspecialchars($_GET['question']);

		$result = $conn->query("SELECT answer FROM chatbot WHERE question LIKE '%{$question}%' ORDER BY rand() LIMIT 1");
		$result = $result->fetch(PDO::FETCH_OBJ);
        $answer = $result->answer;
        
        $data = ['results'=>$answer];
        
		
		header('Content-Type: application/json');
		echo json_encode($data);
		return;
    }
    global $secret_word;
    $query = $conn->query("Select * from secret_word LIMIT 1");
    $result = $query->fetch(PDO::FETCH_OBJ);
    $secret_word = $result->secret_word;

    $sql = $conn->query("Select * from interns_data where username = 'donsamuel' LIMIT 1");
    $user = $sql->fetch(PDO::FETCH_OBJ);
    $name = $user->name;
    
	?> 
    <style>
        #big-container{
          width: 100%;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
        .mainSection {
            background-color: brown;
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
                  <div><input style="width:170px" type="text" name="chat" id="chatbox" placeholder="chat here with me..." onfocus=""/>
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
            console.log(result);
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
        xhttp.open("GET", "/profiles/donsamuel.php", true);
        xhttp.send({ question: 'message' });
    }
    </script>