<html lang="en">
<head>
  <title>Log Random</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
   <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyDiehcoOar2PSKNWdM5cMlWk3mCT5FXAr4",
        authDomain: "nmc-bot-knowlege.firebaseapp.com",
        databaseURL: "https://nmc-bot-knowlege.firebaseio.com",
        projectId: "nmc-bot-knowlege",
        storageBucket: "nmc-bot-knowlege.appspot.com",
        messagingSenderId: "835175970640"
      };
      firebase.initializeApp(config);
    </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 25px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Random</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <a class="navbar-brand" href="log.php">log</a>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
    </div>
    <div class="col-sm-8 text-left"> 
    <h1>RANDOM LOG </h1>

    <?php

    $myfile = fopen("Log.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
      }
    fclose($myfile);
    
    ?>
	  
	  <body onkeydown="return (event.keyCode != 116)">
<form name="frmMain" action="" method="post">


 
<br><br><br><br>
</form>	       
    <hr>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
      
      </div>
      <div class="well">
   
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <p>NMC WEB</p>
</footer>
</body>
</html>
