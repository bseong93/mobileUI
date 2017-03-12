<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css'>
  <script src='https://code.jquery.com/jquery-1.11.3.min.js'></script>
  <script src='https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js'></script>

  <script src='function.js'></script>
  <link rel='stylesheet' type='text/css' href='css/mystyle.css'>
</head>


<body>

<div data-role='page' id='pageone'>
  <!--************ header ************-->
  <div data-role='header' id='header'>
    
    <h1 id = 'header_content'> 현재 대기 상태</h1>
    <a href='#' class='ui-btn ui-btn-b ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext'>Search</a>
  </div>

  <!--************ main  ************-->
  <div data-role='main' class='ui-content' id='main'>
    <table id='table'>
      <tr>
          <th>CustomerID</th>
          <th>CustomerName</th>
          <th>ContactName</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td> 
        </tr>
    </table> 

  </div>
  <!--************  ************--> 
</div> 

</body>
</html>