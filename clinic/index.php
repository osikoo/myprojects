
<?php 
session_start();
include("db_connect.php");
?>
<?php
if(isset($_GET['gs'])) 
          {	           
			  $id=$_GET['gs'];
              $query = "SELECT name,type,Size,content FROM Excelfiles WHERE id='$id' ";         
         $result = mysqli_query($db,$query) or die('Error, query failed');		 
     list($name, $type, $content) = mysqli_fetch_array($result);
	       $path = 'script/'.$name;
		   $size = filesize($path);
	     header('Content-Description: File Transfer');
         header('Content-Type: application/octet-stream');
         header("Content-length:". $size);
         header("Content-type:". $type);
         header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
		 header('Content-Transfer-Encoding: binary');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
     ob_clean();
       flush();
	       
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<title>EMR</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>

  <link href="admin/css/font-awesome.css" rel="stylesheet"> 

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"/>

</head>
    
<body>

<div class="container"> 
<nav class="navbar navbar-inverse" style="margin-top:5px;background-color:white">
    <div class="container-fluid">
     <div class="banner">
<div style="color:red;margin-left:250px;margin-bottom:50px;margin-top:20px;font-size:30px;font-family:Dr Mlombe;">Ralph Okono's Electronic Medical Records System</div>
                    

               </div> 
     
&nbsp;</br>&nbsp;
     </div>
    
    </nav>

  

	<div class="container-fluid">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-primary" >
			<div class="panel-heading" >
				<h3 class="panel-title">Please Login</h3>
			</div>
			<div class="panel-body">
				<!-- logn form -->
					 <form class="form-login" method="post" id="login-form">
                                        	<div id="error">
		                                     </div>
                                        <hr />
		
		                             <div class="form-group">
			                           <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
			                             <span id="check-e"></span>
		                             </div>
		                             <div class="form-group">
			                           <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
		                             </div>
		                             <hr />
		                            <div class="form-group">
			                           <button type="submit" class="btn btn-primary" name="login_button" id="login_button">
			                             <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			                           </button> 
			                           <a href='index.php?gs=3' type="submit" class="btn btn-success" name="login_button" id="login_button">
			                             <span class="fa fa-file-pdf-o"></span> &nbsp; User guide
			                           </a>
		                           </div> 
	                                  </form>
				<!-- logn form -->
			</div>
		</div>
		</div>
		<div class="col-md-2"></div>
	</div>

</div>


	 
   <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/login.js"></script>


</body>
</html>	

