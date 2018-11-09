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
<!-- <table>
  <tr>
   <td>Id: </td>
   <td><input type="text" name="id" id="user_id" /></td>
  </tr>
  <tr>
  <td>zone_id: </td>
   <td><input type="text" name="zone_id" id="zone_id" /></td>
  </tr>
   <td>User Name: </td>
   <td><input type="text" name="user_name" id="user_name" /></td>
  </tr>
   <tr>
   <td>Zone: </td>
   <td><input type="text" name="zone" id="zone_name" /></td>
  </tr>

  <tr>
   <td colspan="2">
    <input type="button" value="Save" onclick="save_user();" />
    <input type="button" value="Update" onclick="update_user();" />
    <input type="button" value="Delete" onclick="delete_user();" />
    
   </td>
  </tr>
 </table> -->
 
 <!-- <h3>Random log</h3> -->

 <table id="tbl_users_list" border="1">
 <p id="time_stamp"></p>
<script>
document.getElementById("time_stamp").innerHTML = new Date();
</script>
  <!-- <script>
  var d = new Date();
  document.write(d.toLocaleString());
   // document.write("<br>");
  </script> -->
  <tr>
   <td></td>
   <td>Time_stamp</td>
   <td>Name_1</td>
   <td>Zone_1</td>
   <td>Name_2</td>
   <td>Zone_2</td>
   <td>Name_3</td>
   <td>Zone_3</td>
   <td>Name_4</td>
   <td>Zone_4</td>
  
  </tr>
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
   var celltime = row.insertCell(1);
   var cellName1 = row.insertCell(2);
   var cellzone1 = row.insertCell(3);
   var cellName2 = row.insertCell(4);
   var cellzone2 = row.insertCell(5);
   var cellName3 = row.insertCell(6);
   var cellzone3 = row.insertCell(7);
   var cellName4 = row.insertCell(8);
   var cellzone4 = row.insertCell(9);

  // cellId.appendChild(document.createTextNode(childKey));
   cellName1.appendChild(document.createTextNode(childData.user_name0));
   cellzone1.appendChild(document.createTextNode(childData.zone0));

   cellName2.appendChild(document.createTextNode(childData.user_name1));
   cellzone2.appendChild(document.createTextNode(childData.zone1));

   cellName3.appendChild(document.createTextNode(childData.user_name2));
   cellzone3.appendChild(document.createTextNode(childData.zone2));

   cellName4.appendChild(document.createTextNode(childData.user_name3));
   cellzone4.appendChild(document.createTextNode(childData.zone3));


   celltime.appendChild(document.createTextNode(childData.time_stamp));

   
   rowIndex = rowIndex + 1;
    });
  });
  
  function save_user(){
   var uid = firebase.database().ref().child('users').push().key;
   document.getElementById("time_stamp").value = Date();
   var time_stamp = document.getElementById('time_stamp').value;
   var user_name = document.getElementById('user_name').value;
   var zone = document.getElementById('zone_name').value;
   var zone_id = document.getElementById('zone_id').value;

   var data = {
    user_id: uid,
    time_stamp: time_stamp,
    user_name: user_name,
    zone: zone,
    zone_id: zone_id
    
   }
   
   var updates = {};
   updates['/users/' + uid] = data;
   firebase.database().ref().update(updates);
   alert('The user is created successfully!');
   reload_page();
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


