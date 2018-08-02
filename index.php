<html lang="en">
<head>
  <title>RANDODM</title>
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
  <iframe
    width="200"
    height="450"
    src="https://console.dialogflow.com/api-client/demo/embedded/88dd48b7-a5e2-4cd1-8b62-2793bbd8b358">
</iframe>

    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
	  <div style="margin:auto;width:500px;">  
<form id="form_checkbox1" name="form_checkbox1" method="post" action="random.php">  
<table width="600" border="0" align="center" cellpadding="0" cellspacing="2">
<h2>RANDOM</h2>
<h2>Please select name for fun today.</h2>
<thead>  
  <tr>  
    <th align="center" bgcolor="##1e90ff">&nbsp;</th>  
    <th bgcolor="##1e90ff">Name</th>  
  </tr>  
</thead>    
  <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Jitrakorn" /> </td>  
    <td>Jitrakorn</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Pattharapong" /> </td>  
    <td>Pattharapong</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Wichai" /> </td>  
    <td>Wichai</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Sompong" /> </td>  
    <td>Sompong</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Nattakit" /> </td>  
    <td>Nattakit</td>  
  </tr>
  <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Surasak" /> </td>  
    <td>Surasak</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Itidech" /> </td>  
    <td>Itidech</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Kritsana" /> </td>  
    <td>Kritsana</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Jutamath" /> </td>  
    <td>Jutamath</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Nathawut" /> </td>  
    <td>Nathawut</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Korbkrun" /> </td>  
    <td>Korbkrun</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chawakorn" /> </td>  
    <td>Chawakorn</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Karn Naja" /> </td>  
    <td>Karn Naja</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chatchai" /> </td>  
    <td>Chatchai</td>  
  </tr>
   <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Chonthida" /> </td>  
    <td>Chonthida</td>  
  </tr> <tr> 
    <td width="50" align="center"> <input name="chk[]" type="checkbox" class="css_data_item" id="data_item1" value="Nattakorn" /> </td>  
    <td>Nattakorn</td>  
  </tr>
  </tr>
    <td></td>  
  </tr>
  </tr>  
    <td align="center">&nbsp;</td>  
    <td><input type="submit" name="button" id="button" value="Random" /></td>  
  </tr>        
</table>  
   
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

<footer class="container-fluid text-center">
  <p>NMC WEB</p>
</footer>

</body>
</html>
      
