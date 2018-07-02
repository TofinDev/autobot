<html lang="en">
<head>
  <title>Random</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="#">Projects</a></li>
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
      <h1>Welcome </h1>
	  
	  <body onkeydown="return (event.keyCode != 116)">
<form name="frmMain" action="" method="post">
<script language="JavaScript">


var isNS = (navigator.appName == "Netscape") ? 1 : 0;
 
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
 
function mischandler(){
  return false;
}
 
function mousehandler(e){
	var myevent = (isNS) ? e : event;
	var eventbutton = (isNS) ? myevent.which : myevent.button;
   if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
 
</script>

 <?php
echo "Today is " . date("Y/m/d") . "<br>";
 date_default_timezone_set('Asia/Bangkok');
echo "The time is " . date("h:i:sa"). "<br><br>"; 
	
$zone = array("North :: ","BangKok :: ","Northeast and East ::","South and West :: ");
$arrlength = count($zone);

for($x = 0; $x < $arrlength; $x++) {
    echo $zone[$x];
    echo "<br>";
}

	
$a=$_POST['chk'];
shuffle($a);	
foreach ($a as $a) {
	

echo "<pre>";
echo $zone[$x];
  echo "<br>";
	
   print_r($a);

echo "</pre>";	
}
	
	
 ?>
 
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


