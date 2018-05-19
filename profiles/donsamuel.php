
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

        $result;
		try {
		    $q = $conn->prepare($sql);
		    if ($q->execute($params) == true) {
		        $result = [
		            'result' => "Thanks for training me, I'm feeling lucky and smart'"
		        ];
		    };
		} catch (PDOException $e) {
			$result = [
			    'result'    => "Error! I couldn't recieve training, my bad (:"
            ];
		    throw $e;
        }
        
        echo json_encode($result);

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
        
        $data = ['result'=>$answer];
        
		
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
        #chatborder{
            font-size:13px;
            margin-top:10px;
            padding: 10px;
            border: 1px solid #eee;
            background-color: whitesmoke;
            width: 320px;
            height: 342px;
            overflow-y: scroll;
        }
        .chatlog{
            display: block;
            clear: both;
        }    
        #msg-box{
            width:60%;
            background-color: #e7f8ec;
            float:right;
            padding: 5px 2px;
            text-align:right;
        }
        #reply-box{
            width:60%;
            background-color: #e7f8ec;
            float: left;
            padding: 5px 2px;
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

                </div>
                <div><input v-on:keyup.enter="sendMsg" v-model="message" style="width:170px" type="text" name="chat" id="chatbox" placeholder="chat here with me..."/>
                <button style="float: right" v-on:click="sendMsg"><i class="fa fa-send-o fa-2x"></i></button></div>
                
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.0"></script>
    <script>
         new Vue({
                el: '#bodybox',
                data: {
                    message: '',
                    reply: '',
                },
                created: function(){
                    var msg = 'Hi, thanks for showing up.<br> To get a list of things I  can do apart from the usual chat, type `help`.';                    
                    this.reply = msg;
                    this.sendReply(this.reply);
                },
                methods: {
                    sendMsg: function(){
                        $('#chatborder').append(this.makeMsg(this.message));
                        this.thinkOn(this.message);
                        this.message = '';
                    },
                    thinkOn: function(msg){
                        msg = msg.trim().toLowerCase();
                        var keyword = msg.split(' ')[0];
                        if(keyword == 'help'){
                            var helpMsg = ` I can do the following: <br> 
                                            Type "aboutbot" - I'll tell you about me.<br> 
                                            Type "train" - #train [question] [answer] [password].`;
                                this.sendReply(helpMsg);
                        }else if(keyword == 'aboutbot'){
                            this.sendReply('DonSamuel\'s Bot V-1.0.')
                        }else if(keyword == '#train'){
                            this.trainMe(msg);
                        }else{
                            this.getReplyFromDb(msg);
                        }
                        return;
                    },
                    getReplyFromDb: function(question){
                        this.$http.get('profiles/donsamuel.php?question='+question)
                                .then(response => {
                                    var trainMeMsg = 'I cannot find you a correct answer, but you can train me via: <br> #train [question] [answer] [password]';
                                    this.reply = (response.data != null) ? response.data.result : trainMeMsg;
                                    this.sendReply(this.reply);
                                }, response => {
                                    this.sendReply('An Error occured, please try again later');
                                });
                    },
                    makeMsg: function(message){
                        return `<div class="chatlog"><p id="msg-box">${message} </p></div>`;
                    },
                    makeReply: function(message){
                        return `<div class="chatlog"><p id="reply-box">${message} </p></div>`;                        
                    },
                    sendReply: function(message){
                        $('#chatborder').append(this.makeReply(message));
                        this.scrollDown();
                    },
                    trainMe: function(command){
                        var args = command.match(/\[(.*?)\] \[(.*?)\] \[(.*?)\]/);
                        if(!args || !args[3]){
                            var msg = "Can't recieve training like that, <br> follow the correct syntax #train [question] [answer] [password]";
                            this.sendReply(msg);
                            return;
                        }
                        var password = args[3];
                        if(password != 'password'){
                            var msg = 'Invalid passowrd for training me. <br> Enter a valid password.';
                            this.sendReply(msg);
                            return;
                        }

                        this.$http.get('profiles/donsamuel.php?question='+args[1]+'&'+'answer='+args[2])
                                .then(response => {
                                    // get body data
                                    this.reply = (response.data.result != null) ? response.data.result : 'Unable to recieve training';
                                    this.sendReply(this.reply);
                                }, response => {
                                    // error callback
                                    this.sendReply('Something went wrong, please try again later');
                                });

                    },
                    scrollDown: function(){
                        var chatWrapper = $('#chatborder');
                        chatWrapper.animate({ scrollTop:  chatWrapper.prop("scrollHeight") -  chatWrapper.height() }, 500);
                    }
                }
            });
    </script>