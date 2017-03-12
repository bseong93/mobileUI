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

<div data-role="page" id="pageone">
  <!--************ header ************-->
  <div data-role="header" id="header">    
    <h1 id = "header_content" style="font-family: 'Nanum Gothic', sans-serif;"><i class="fa fa-home" style="font-size:55px;color:rgb(53, 139, 202);" id="home_icon"></i></h1>
    <a href="#" class="ui-btn ui-btn-b ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext" id="refresh_btn"></a>    
    <div data-role="navbar" id="navbar"> 
      <ul>
        <li><a href="main.php"  data-transition="none">HOME</a><hr></li>
        <li><a href="onoff.php" data-transition="none">ON/OFF</a></li>
        <li><a href="alarm.php"  data-transition="none">ALARM</a></li>
      </ul>
    </div>
  </div>
  <!--************ main  ************-->
  <div data-role="main" class="ui-content" style="height:100%;">

    <div class="ui-grid-a">
      <div class="ui-block-a">
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t1">온도<br>
          <i class="fa fa-thermometer" style="font-size:80px"></i><br>
          19℃</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t3">먼지<br>
          <i class="fa fa-soundcloud" style="font-size:80px"></i><br>
          0000ug/m2</a>
        <!-- <hr size="1" color="gray"> -->           
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t5">창문<br>
          <!-- <i class="fa fa-photo" style="font-size:80px"></i> -->
          <i class="fa fa-th-large" style="font-size:80px;"></i><br>
          열림</a>          
      </div>

      <div class="ui-block-b">
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t2">습도<br>
          <i class="material-icons" style="font-size:80px">opacity</i><br>
          38%</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t4">가스<br>
          <i class="fa fa-dashboard" style="font-size:80px"></i><br>
          0260ppm</a>
        <!-- <hr size="1" color="gray">     -->
        <a href="#" class="ui-btn ui-corner-all ui-shadow" id="t6">환풍기<br>
          <!-- <i class="material-icons" style="font-size:80px">toys</i> -->
          <i class="fa fa-pause-circle-o" style="font-size:80px"></i><br>
          가동중</a>          
      </div>
    </div>
      
  </div>  
  <!-- -->
</div> 


</body>
</html>