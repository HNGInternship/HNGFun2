<?php
if(!isset($_SESSION)) { session_start(); }
// for choosing active page on nav bar
$fileName=basename($_SERVER['PHP_SELF']);
$files = array('../../index.php','../../learn.php','../../listing.php','../../testimonies.php','../../sponsors.php','../../alumni.php','../../partners.php');
$activeArray = array('','','','','','', '');
$fileIndex=array_search($fileName,$files);
// if page is unknown, dont mark any nav item
if($fileIndex!==FALSE){
$activeArray[$fileIndex]="active";
}
/////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HNG FUN</title>



      <!-- Custom fonts for this template -->
  <!-- Custom fonts for this template -->
    	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Work+Sans:400,900&amp;subset=latin-ext" rel="stylesheet">
     <link rel="stylesheet" href="../../css/custom.css" type="text/css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-sdk/0.8.0/stellar-sdk.min.js">
       
     </script>
    <!-- Custom styles for this template -->
      <link href="../../css/style2.css" rel="stylesheet">
      <link href="../../css/style1.css" rel="stylesheet">
      <link href="../../css/style.css" rel="stylesheet">
      <link href="../../css/custom.css" rel="stylesheet">
     <!-- <link href="css/learn.css" rel="stylesheet"> -->
<!--	  <link href="css/carousel.css" rel="stylesheet">-->
      <link href="../../css/landing-page.min.css" rel="stylesheet">
      <link href="../../css/learn2.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
      <style>
        body {
		font-family: 'Source Sans Pro', Arial, sans-serif;
    font-size: 1.00rem;
          background-color: #FAFAFA;
            color: #3d3d3d
        }
        .navbar{
          font-size: 15px;
          font-weight: bold;
          background-color: #F4F4F4;
          padding: 0 10em;
        }
        .nav-item{
            padding: 24px 15px;
            border-bottom: 3px solid #f4f4f4;
        }
        .nav-item:hover, .active {
            border-bottom: 3px solid #2196F3;
        }
        footer {
          background: #FAFAFA;
        }
        .justify-space-between {
          justify-content: space-between;
        }
        .wrap {
          flex-wrap: wrap;
        }
          .btn-primary {
        border-radius: 8px;
        background-color: #2196F3;
        border-color: #2196F3;
    }
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: #0475CE !important;
    }
	      .featured-image img {
	    width: 100%;
            }
            .h1, h1 {
    font-family: Lato;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    font-size: 34px;
    text-align: center;
    color: #3D3D3D;
    /* font-size: 2.5rem; */
}
            p {
font-weight: 400;
    color: #222;
margin-bottom: 1em;
		    font-family:
"Source Sans Pro", Arial, sans-serif

		    
}
            article {
                border-bottom: 0.75px solid #3D3D3D;
transform: matrix(1, 0, 0, 1, 0, 0);
            }
            #xouter{
	height:100%;
	width:100%;
	display:table;
	vertical-align:middle;
                background: #ffffff;
}
#xcontainer {
    padding-bottom: 50px;
	text-align: center;
	position:relative;
	vertical-align:middle;
	display:table-cell;
}	
#xinner {
padding: 20px;
	width: 90%;
     
	text-align: left;
	margin-left:auto;
	margin-right:auto;
}
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>
  </head>

  <body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light"  >

      <a class="navbar-brand" href="../../index.php">
        <img src="../../img/approved_HNG_logo.png" alt="HNG logo" width="128" height="52" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $activeArray[0] ?>">
                <a href="../../index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item <?= $activeArray[1] ?>">
                <a href="../../learn.php" class="nav-link">Learn</a>
            </li>
            <li class="nav-item <?= $activeArray[2] ?>">
                <a href="../../listing.php" class="nav-link">Intern</a>
            </li>
            <li class="nav-item <?= $activeArray[3] ?>">
                <a href="../../testimonies.php" class="nav-link">Testimonies</a>
            </li>
            <li class="nav-item <?= $activeArray[4] ?>">
                <a href="../../sponsors.php" class="nav-link">Sponsors</a>
            </li>
            <li class="nav-item <?= $activeArray[5] ?>">
                <a href="../../alumni.php" class="nav-link">Alumni</a>
            </li>
           <li class="nav-item <?= $activeArray[6] ?>">

                <a href="../../partners.php" class="nav-link">Partners</a>
            </li>
    </ul>
  </div>

    </nav>

<div id="xouter">
	<div id="xcontainer">
		<div id="xinner">
        <article>
            


            <div class="featured-image">
                <img src="http://slayers.hng.fun/articles/dennisotugo/Rectangle%203-2.png">
            </div>
            <h1>Breaking News: Cat does not give a damn</h1>
<p>You're all clear, kid. Let's blow this thing and go home! You mean it controls your actions? I care. So, what do you think of her, Han? Leave that to me. Send a distress signal, and inform the Senate that all on board were killed.</p>
<p>You don't believe in the Force, do you? Partially, but it also obeys your commands. <strong> I care.</strong> <em> So, what do you think of her, Han?</em> Hokey religions and ancient weapons are no match for a good blaster at your side, kid.</p>
<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. As you wish. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense.</p>
<ol>
<li>Escape is not his plan. I must face him, alone.</li><li>Dantooine. They're on Dantooine.</li><li>The Force is strong with this one. I have you now.</li>
</ol>
<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is.</p>
<ul>
<li>Hokey religions and ancient weapons are no match for a good blaster at your side, kid.</li><li>I find your lack of faith disturbing.</li><li>I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan--</li>
</ul>
<p>Ye-ha! He is here. She must have hidden the plans in the escape pod. Send a detachment down to retrieve them, and see to it personally, Commander. There'll be no one to stop us this time! Partially, but it also obeys your commands.</p>
<p>Dantooine. They're on Dantooine. I suggest you try it again, Luke. This time, let go your conscious self and act on instinct. You mean it controls your actions? Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is.</p>
<p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I'm trying not to, kid. Oh God, my uncle. How am I ever gonna explain this? Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force.</p>
<p>I can't get involved! I've got work to do! It's not that I like the Empire, I hate it, but there's nothing I can do about it right now. It's such a long way from here. Obi-Wan is here. The Force is with him.</p>
<p>I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- You are a part of the Rebel Alliance and a traitor! Take her away! Dantooine. They're on Dantooine.</p>
<p>I have traced the Rebel spies to her. Now she is my only link to finding their secret base. Look, I ain't in this for your revolution, and I'm not in it for you, Princess. I expect to be well paid. I'm in it for the money.</p>
<p>A tremor in the Force. The last time I felt it was in the presence of my old master. You don't believe in the Force, do you? Don't underestimate the Force. Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force.</p>
<p>I can't get involved! I've got work to do! It's not that I like the Empire, I hate it, but there's nothing I can do about it right now. It's such a long way from here. Dantooine. They're on Dantooine. All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it?</p>
<p>Your eyes can deceive you. Don't trust them. In my experience, there is no such thing as luck. You mean it controls your actions? Oh God, my uncle. How am I ever gonna explain this? She must have hidden the plans in the escape pod. Send a detachment down to retrieve them, and see to it personally, Commander. There'll be no one to stop us this time!</p>
<p>No! Alderaan is peaceful. We have no weapons. You can't possibly… Look, I ain't in this for your revolution, and I'm not in it for you, Princess. I expect to be well paid. I'm in it for the money.</p>
<p>Still, she's got a lot of spirit. I don't know, what do you think? I can't get involved! I've got work to do! It's not that I like the Empire, I hate it, but there's nothing I can do about it right now. It's such a long way from here.</p>       
<p>Finding a needle in a haystack isn't hard when every straw is computerized. Tonight's the night. And it's going to happen again and again. It has to happen. I've lived in darkness a long time. Over the years my eyes adjusted until the dark became my world and I could see.</p>
<p>Under normal circumstances, I'd take that as a compliment. <strong> I am not a killer.</strong> <em> I'm going to tell you something that I've never told anyone before.</em> I'm going to tell you something that I've never told anyone before.</p>
<p>I think he's got a crush on you, Dex! I'm really more an apartment person. I will not kill my sister. I will not kill my sister. I will not kill my sister. I'm doing mental jumping jacks. I think he's got a crush on you, Dex!</p>
<ol>
<li>Somehow, I doubt that. You have a good heart, Dexter.</li><li>I'm thinking two circus clowns dancing. You?</li><li>I'm doing mental jumping jacks.</li>
</ol>
<p>Somehow, I doubt that. You have a good heart, Dexter. I love Halloween. The one time of year when everyone wears a mask … not just me. You all right, Dexter? I'm generally confused most of the time.</p>
<ul>
<li>I'm Dexter, and I'm not sure what I am.</li><li>Oh I beg to differ, I think we have a lot to discuss. After all, you are a client.</li><li>Finding a needle in a haystack isn't hard when every straw is computerized.</li>
</ul>

<p>I'm a sociopath; there's not much he can do for me. I'm thinking two circus clowns dancing. You? I'm a sociopath; there's not much he can do for me. I'm Dexter, and I'm not sure what I am. God created pudding, and then he rested.</p>
<p>He taught me a code. To survive. Hello, Dexter Morgan. He taught me a code. To survive. I've lived in darkness a long time. Over the years my eyes adjusted until the dark became my world and I could see.</p>
<p>Cops, another community I'm not part of. Under normal circumstances, I'd take that as a compliment. You look…perfect. Only you could make those words cute.</p>
<p>I think he's got a crush on you, Dex! I am not a killer. I'm really more an apartment person. I'm really more an apartment person. You're a killer. I catch killers.</p>
<p>I'm doing mental jumping jacks. Keep your mind limber. I'm real proud of you for coming, bro. I know you hate funerals. I'm Dexter, and I'm not sure what I am.</p>
<p>Somehow, I doubt that. You have a good heart, Dexter. Finding a needle in a haystack isn't hard when every straw is computerized. Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be.</p>
<p>I'm going to tell you something that I've never told anyone before. I will not kill my sister. I will not kill my sister. I will not kill my sister. Only you could make those words cute. I'm Dexter, and I'm not sure what I am.</p>
<p>Like a sloth. I can do that. I'm going to tell you something that I've never told anyone before. I'm a sociopath; there's not much he can do for me. I love Halloween. The one time of year when everyone wears a mask … not just me.</p>
<p>Only you could make those words cute. Watching ice melt. This is fun. Tonight's the night. And it's going to happen again and again. It has to happen. I'm a sociopath; there's not much he can do for me.</p>
<p>Under normal circumstances, I'd take that as a compliment. I'm partial to air conditioning. I'm real proud of you for coming, bro. I know you hate funerals. I'm generally confused most of the time. I'm partial to air conditioning.</p>
<p>Watching ice melt. This is fun. I'm Dexter, and I'm not sure what I am. Somehow, I doubt that. You have a good heart, Dexter. You all right, Dexter? I'm really more an apartment person. Rorschach would say you have a hard time relating to others.</p>
			</article>
			<related>
				
				</related>
		</div>
	</div>
</div>

	  <footer>
   <div class="container footer">
      <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
               <li class="list-inline-item contact-icon">
                  <a id="twitter" href="https://twitter.com/hnginternship?lang=en" target="_blank">
                     <span>
                        <i class="fa fa-twitter fa-lg"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item contact-icon" style="border: 1px solid black;border-top-style: none;border-bottom-style: none; ">
                  <a id="facebook" href="https://web.facebook.com/hotelsng/" target="_blank">
                     <span>
                        <i class="fa fa-facebook fa-lg"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item contact-icon">
                  <a id="github" href="https://github.com/HNGInternship/" target="_blank">
                     <span>
                        <i class="fa fa-github fa-lg"></i>
                     </span>
                  </a>
               </li>
    
            </ul>
            <div style="text-align: center">
                <p class="copyright text-muted">Copyright &copy; HNG FUN 2018</p> 
            </div>
         </div>
      </div>
   </div>
</footer>



    <!-- Custom scripts for this template -->
    <script src="../../js/hng.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<style>
  /*for footer*/
.contact-icon{
  margin: 0px !important;
  padding: 0% 2%;
}
footer{
  background: #fafafa !important;
  color: #3D3D3D;
}
</style>


</html>
