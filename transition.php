<head>
  <title>Transition</title>
  <style type="text/css">
    body {
    padding: 0;
    margin: 0;
    width: 100%;
    text-align: center;
    font-family: 'work sans', 'Lato';
    background: #FAFAFA;
    overflow: hidden;
}
main {
  min-height: 50%;
  animation-name: anime;
  animation-duration: 3s;
  animation-iteration-count: infinite;
}
@keyframes anime {
  from {
    opacity: 1.0;
  }
  10% {
    opacity: 0.9;
  }
  25% {
    opacity: 0.7;
  }
  50% {
    opacity: 0.3;
  }
  75% {
    opacity: 0.7;
  }
  80% {
    opacity: 0.9;
  }
  to {
    opacity: 1.0;
    text-shadow: 2px 2px 2px skyblue;
  }
}
h3 {
  margin-top: 2.5em;
    display:inline-block;
    padding: 0px;
    color: #0475ce;
    font-size: 28px;
    text-shadow: 2px 0 5px aliceblue, -2px 0 5px lightgrey;
}
#tag {
  padding-top: 20px;
}
#curly {
    font-size: 80px;
}
strong {
    float:left;
}
div {
  width: 80px;
  height: 80px;
  transform: translate(-50%, -50%);
  position: absolute; 
  top: inherit; 
  left: 50%;
}
span {
  display: block;
  position: absolute;
  width: 40%;
  height: 40%;
  border-radius: 50%;
  box-shadow: 2px 2px 3px rgba(0,0,0,.4);
  -webkit-animation: run 2s infinite ease-in-out;
  animation: run 2s infinite ease-in-out;
}

.one {
  background: #F3B222;
  -webkit-animation-delay: 1.5s;
  animation-delay: 1.5s;
}
.two {
  background: #F0653E;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
}
.three {
  background: #B9C0C0;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
}
.four {
  background: #0475CE;
}

@-webkit-keyframes run {
  0% {
    transform: translate(0%);
    border-radius: 50%;
  }
  25% {
    transform: translate(150%) scale(0.5); 
    border-radius: 0%;
  }
  50% {
    transform: translate(150%, 150%);
    border-radius: 50%; 
  }
  75% {
    transform: translate(0%, 150%) scale(0.5); 
    border-radius: 0%;
  }
}
@keyframes run {
  0% {
    transform: translate(0%);
    border-radius: 50%;
  }
  25% {
    transform: translate(150%) scale(0.5); 
    border-radius: 0%;
  }
  50% {
    transform: translate(150%, 150%);
    border-radius: 50%; 
  }
  75% {
    transform: translate(0%, 150%) scale(0.5); 
    border-radius: 0%;
  }
}

  </style>
</head>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
  <main>
  <h3 id="curly">}{</h3>
  <h3 id="tag"><strong>HNG</strong>
    <br/>Internship</h3>
  </main>
  <div>
    <span class="span one"></span>
    <span class="span two"></span>
    <span class="span three"></span>
    <span class="span four"></span>
  </div>


  <!-- script -->
  <script type="text/javascript">
    // redirect to homepage
    setTimeout(function() {
      window.location.href='index.php'
    },5000);

    //disable back button
    window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
  </script>
</body>
