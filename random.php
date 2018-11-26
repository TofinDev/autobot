<html lang="en">
<head>
  <title>Random</title>
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
      padding-top: 60px;
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
echo "🕖 The time is " . date("h:i:sa"). "<br><br>"; 


$zone = array("⭐ North ::   ","⭐ BangKok and East ::  ","⭐ Northeast ::  ","⭐ South Central and West ::  ");
$emoji = array("😀","😂","😋","😎","😘","😍","😆","😎","😜","😛");

$a=$_POST['chk'];
// print_r($a); 
// echo(rand(10,1000));
for($i=0;$i<rand(10,10000);$i++){
shuffle($zone);	
shuffle($a);	
shuffle($emoji);
}

echo "<pre>";	
echo "Radom ทั้งหมด $i รอบ";; 
echo "<br>";
echo "</pre>";

for($i=0;$i<sizeof($a);$i++){
  echo "<pre>";	
  (" ").print_r($zone[$i]).(" ").print_r($emoji[$i]).print_r("  ".$a[$i]).(""); 
  echo "<br>";
  echo "</pre>";

}
// print_r($zone[0]).print_r($a[0]."\n");
// print_r($zone[1]).print_r($a[1]."\n");
// print_r($zone[2]).print_r($a[2]."\n");
// print_r($zone[3]).print_r($a[3]."\n");

//echo "<div align=center><a onClick=\"save_user()\" ><img src='images/Chonthida.png' title='save' hight='50' width='50'  border=0></a></div>"; 

echo " <input type='HIDDEN' name='user_name0' id='user_name0' value= '$a[0]' />
       <input type='HIDDEN' name='zone_name0' id='zone_name0' value= '$zone[0]' />
       <input type='HIDDEN' name='user_name1' id='user_name1' value= '$a[1]' />
       <input type='HIDDEN' name='zone_name1' id='zone_name1' value= '$zone[1]' />
       <input type='HIDDEN' name='user_name2' id='user_name2' value= '$a[2]' />
       <input type='HIDDEN' name='zone_name2' id='zone_name2' value= '$zone[2]' />
       <input type='HIDDEN' name='user_name3' id='user_name3' value= '$a[3]' />
       <input type='HIDDEN' name='zone_name3' id='zone_name3' value= '$zone[3]' /> 
";

?>

<div>

<script>
     $(document).ready(function() {
      save_user();
    console.log("Ready!");
});
</script>
<script>
    var oTable = document.getElementById('myTable');
    var rowLength = oTable.rows.length;   
    for (i = 1; i < rowLength; i++){
       var oCells = oTable.rows.item(i).cells;
       var cellLength = oCells.length;
	   var data = oCells.item(0).innerHTML+' '+oCells.item(1).innerHTML.trim()+' '+oCells.item(2).innerHTML.trim()+' '+oCells.item(3).innerHTML.trim();
	   //alert(data);
	   //var Alert = new CustomAlert();
	   //Alert.render (data);
	   if(oCells.item(4).innerHTML.trim() == '')
	   {
	   		showDialog(i,data,oCells.item(1).innerHTML.trim());
			alertPopup(i,data,oCells.item(1).innerHTML.trim());
	   }
    }
	
</script>



<table>
  <tr>
   <td></td>
   <td><input type="HIDDEN" name="id" id="user_id" /></td>
  </tr>
  <tr>
  <td></td>
   <td><input type="HIDDEN" name="zone_id" id="zone_id" /></td>
  </tr>
   <td> </td>
   <td><input type="HIDDEN" name="user_name" id="user_name" /></td>
  </tr>
   <tr>
   <td> </td>
   <td><input type="HIDDEN" name="zone" id="zone_name" /></td>
  </tr>

  <tr>
   <td colspan="2">
  <input type="HIDDEN" value="Save" onclick="save_user();" />
  <input type="HIDDEN" value="Update" onclick="update_user();" />
  <input type="HIDDEN" value="Delete" onclick="delete_user();" />
    
   </td>
  </tr>
 </table>
 
 <!-- <h3>Random log</h3> -->
 <!-- <time datetime="YYYY-MM-DDThh:mm:ssTZD"> -->
 
 <!-- <table type="HIDDEN" id="tbl_users_list" border="1"> -->
 <p id="time_stamp"></p>
<script>
document.getElementById("time_stamp").innerHTML = <time datetime="YYYY-MM-DDThh:mm:ssTZD">);
</script>
  <script>
  var d = new Date();
  document.write(d.toLocaleString());
   // document.write("<br>");
  </script>
  <tr>

 </table>

 
 <script>
  var tblUsers = document.getElementById('tbl_users_list');
  var databaseRef = firebase.database().ref('users/');
  var rowIndex = 1;
  
  databaseRef.once('value', function(snapshot) {
   snapshot.forEach(function(childSnapshot) {
   var childKey = childSnapshot.key;
   var childData = childSnapshot.val();
   
   var row = tblUsers.insertRow(rowIndex);
   var cellId = row.insertCell(0);
   var cellName = row.insertCell(1);
   var celltime = row.insertCell(2);
    var cellzone = row.insertCell(3);
  // cellId.appendChild(document.createTextNode(childKey));
   cellName.appendChild(document.createTextNode(childData.user_name));
   celltime.appendChild(document.createTextNode(childData.time_stamp));
   cellzone.appendChild(document.createTextNode(childData.zone));
   
   rowIndex = rowIndex + 1;
    });
  });
  
  function save_user(){
    
   var uid = firebase.database().ref().child('users').push().key;
   document.getElementById("time_stamp").value = Date();
   var time_stamp = document.getElementById('time_stamp').value;
   
   var user_name0 = document.getElementById('user_name0').value;
   var user_name1 = document.getElementById('user_name1').value;
   var user_name2 = document.getElementById('user_name2').value;
   var user_name3 = document.getElementById('user_name3').value;

   var zone0 = document.getElementById('zone_name0').value;
   var zone1 = document.getElementById('zone_name1').value;
   var zone2 = document.getElementById('zone_name2').value;
   var zone3 = document.getElementById('zone_name3').value;

   var zone_id = document.getElementById('zone_id').value;


   var data = {
    user_id: uid,
    time_stamp: time_stamp,
    user_name0: user_name0,
    user_name1: user_name1,
    user_name2: user_name2,
    user_name3: user_name3,

    zone0: zone0,
    zone1: zone1,
    zone2: zone2,
    zone3: zone3,

    zone_id: zone_id
    
   }
   
   var updates = {};
   updates['/users/' + uid] = data;
   firebase.database().ref().update(updates);
  alert('บันทึกแล้วห้ามกดอีกนะจ๊ะ 😜!! ยังไม่ได้เขียน BlocK 55');
  // reload_page();
   }
  
  function update_user(){
   var user_name = document.getElementById('user_name').value;
   var user_id = document.getElementById('user_id').value;

   var data = {
    user_id: user_id,
    user_name: user_name
   }
   
   var updates = {};
   updates['/users/' + user_id] = data;
   firebase.database().ref().update(updates);
   
   alert('The user is updated successfully!');
   
   reload_page();
  }
  
  function delete_user(){
   var user_id = document.getElementById('user_id').value;
  
   firebase.database().ref().child('/users/' + user_id).remove();
   alert('The user is deleted successfully!');
   reload_page();
  }
  
  function reload_page(){
   window.location.reload();
  }
  
 </script>
<script>
 $.get('https://nmc-bot-knowlege.firebaseio.com/', function(data) {
     alert(data);
});
 </script>

</div>

<div>
<script>random_imglink()</script>
</div>

<script>random_imglink()</script>
<script language="JavaScript">
 
 function random_imglink(){
  var myimages=new Array()
  //specify random images below. You can have as many as you wish
  myimages[1]="images/Jitrakorn.png"
  myimages[2]="images/Jutamath.png"
  myimages[2]="images/Jutamath.png"
  var ry=Math.floor(Math.random()*myimages.length)

  if (ry==0)
     ry=1
     document.write('<img src="'+myimages[ry]+'" width="800" border=0>')
}
 return myimages;
 </script>

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
<div>
</div>
<footer class="container-fluid text-center">
  <p>NMC WEB</p>
</footer>

</body>
</html>


