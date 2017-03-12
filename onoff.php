<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="30">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

  <script src="js/functions.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<?php
date_default_timezone_set("Asia/Seoul");
?>


<body>

<div data-role="page" id="pagetwo" data-display="overlay">
  <!--************ header ************-->
  <div data-role="header" id="header">    
    <h1 id = "header_content" style="font-family: 'Nanum Gothic', sans-serif;"><i class="fa fa-home" style="font-size:55px;color:rgb(53, 139, 202);"></i></h1>
    <a href="#" class="ui-btn ui-btn-b ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext" id="refresh_btn"></a>    
    <div data-role="navbar" id="navbar"> 
      <ul>
        <li><a href="main.php"  data-transition="none">HOME</a></li>
        <li><a href="onoff.php" data-transition="none">ON/OFF</a><hr></li>
        <li><a href="alarm.php" data-transition="none">ALARM</a></li>
      </ul>
    </div>
  </div>
  <!--************ main  ************-->
  <div data-role="main" class="ui-content" style="height:100%;">

   
  </div>  
  <!-- -->
</div> 

</body>
</html>