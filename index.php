<html lang="en">
<head>
  <title>RANDODM</title>
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
      padding: 15px;
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar ">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">RANDOM</a>
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
    <iframe src="https://www.rainviewer.com/map.html?loc=13.8466,101.1226,5&oFa=0&oC=0&oU=0&oCS=1&oF=0&oAP=0&rmt=4&c=1&o=83&lm=0&th=0" width="100%" frameborder="0" style="border:0;height:50vh;" allowfullscreen></iframe>
<!--     
  <iframe
    width="200"
    height="450"
    src="https://console.dialogflow.com/api-client/demo/embedded/88dd48b7-a5e2-4cd1-8b62-2793bbd8b358">
</iframe> -->


    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
<div style="margin:auto;width:500px;">  
<form id="form_checkbox1" name="form_checkbox1" method="post" action="random.php">  
<table width="600" border="0" align="center" cellpadding="0" cellspacing="2">
<h2>RANDOM</h2>
<h2>Please select name for fun today. <p id="time_stamp"></p>
  <script>
  var d = new Date();
  document.write(d.toLocaleString());
   // document.write("<br>");
  </script></h2>
<thead>  
  <tr>  
    <th align="center" bgcolor="##1e90ff">&nbsp;</th>  
    <th bgcolor="##1e90ff">Name</th>  
  </tr>  
</thead>    
  <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Jitrakorn" /> </td>  
  <td> <pre> Jitrakorn</pre></td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Pattharapong" /> </td>  
    <td> <pre> Pattharapong</pre></td> 
  </tr>

   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Sompong" /> </td>  
    <td> <pre> Sompong</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Nattakit" /> </td>   
    <td> <pre> Nattakit</pre></td> 
  </tr>
  <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Surasak" /> </td>  
  <td> <pre> Surasak</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Itidech" /> </td>  
   <td> <pre> Ittidach</pre></td> 
  </tr>
    <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Jutamath" /> </td>  
    <td> <pre> Jutamath</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Nathawut" /> </td>  
    <td> <pre> Nathawut</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Korbkrun" /> </td>  

    <td> <pre> Korbkrun</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chawakorn" /> </td>  
 
    <td> <pre> Chawakorn</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Karn Naja" /> </td>  
  
    <td> <pre> Karn Naja</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chatchai" /> </td>  
   
    <td> <pre> Chatchai</pre></td>   
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chonthida" /> </td>  

  <td> <pre> Chonthida</pre></td> 
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Arak" /> </td>  

  <td> <pre> P'PE Arak</pre></td> 
  </tr>
  <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Sarawut" /> </td>  

  <td> <pre> Sarawut_rat/pre></td> 
  </tr>
  
 
  <td></td>  
  </tr>
  </tr>  
    <td align="center">&nbsp;</td>  
    <td><br>
    <button type="submit"name="button" id="button" value="Random" class="btn btn-outline-default btn-rounded waves-effect" action="random.php">Random</button>
    <form id="form_checkbox1" name="form_checkbox1" method="post" action="random.php">  
    </td>  
  </tr>        
</table>  

 
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

   
</form>  
</div>  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>      
<script type="text/javascript">    
$(function(){          
         
    $(".css_data_item").click(function(){  
        if($(this).prop("checked")==true){ 
            var indexObj=$(this).index(".css_data_item"); //     
            if($(".css_data_item:checked").length>4){
            $(".css_data_item").not(":eq("+indexObj+")").prop( "checked", false ); 
            }
        }    
    });    
   
    $("#form_checkbox1").submit(function(){
        if($(".css_data_item:checked").length<4){
            alert("เลือกอย่างน้อย 4 คน");  

            return false;       
        }    
    });       
             
});    
</script>	 
      <hr>
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
       <iframe src="http://www.tmd.go.th/daily_forecast_forweb.php" width="180" height="260" scrolling="no" frameborder=0></iframe>

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
      
