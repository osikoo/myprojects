<?php 
session_start();
include("db.php");
 
if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){
$adminid = $_COOKIE['adminid'];
$adminemail = $_COOKIE['adminemail'];

$sqluser ="SELECT * FROM Administrator WHERE Password='$adminid' && Email='$adminemail'";
$retrieved = mysql_query($sqluser);
    while($found = mysql_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
              $id= $found['id'];
		 }	   
 }
else{
	 header('location:index.php');
      exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>FADAMA III AF</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- below they are plugins for the submission form --> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">  
      <link rel="stylesheet" href="css/style1.css">

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
</head> 
 <script type="text/javascript">
 
 $(document).on("click", ".open-computers", function () { //user clicks on button
             			             			

             			$(".pictures").html("<div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>How many pictures</span><select style='height:37px;width:100%;border:1px solid;' name='groupopt'  id='studyname' ><option >Select Option</option><option class='open-pic1'>1</option><option class='open-pic2'>2</option><option class='open-pic3'>3</option></select></div>").prop('disabled', true);
                        
          });
          
           $(document).on("click", ".open-computers2", function () { //user clicks on button
             			             			

             			$(".computerstexts").html("").prop('disabled', true);
             			$(".pictures").html("").prop('disabled', true);
             			$(".pic1").html("").prop('disabled', true);
             			$(".pic2").html("").prop('disabled', true);
             			$(".pic3").html("").prop('disabled', true);
             			
                        
          });
          
       
          
          $(document).on("click", ".open-pic1", function () { //user clicks on button
             			             			

                        
          });
          $(document).on("click", ".open-pic2", function () { //user clicks on button
             			             			

             			$(".pic2").html("<div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile' type='file' id='file' ></div><div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile2' type='file' id='file' ></div>").prop('disabled', true);
                        
          });
          
          $(document).on("click", ".open-pic3", function () { //user clicks on button
             			             			

             			$(".pic3").html("<div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile' type='file' id='file' ></div><div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile2' type='file' id='file' ></div><div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile3' type='file' id='file' ></div>").prop('disabled', true);
                        
          });
          
          
          
 </script>
  
  


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left" style="background-color:#2E8B57">
      <nav class="navbar navbar-inverse" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
       </button>
         <center><img src='images/court.png'  width='70%' height='170px' alt=''></center>	   
                               
	     </div>      
        
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">
              	 <h4>CONTROL PANEL</h4>
              </li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-tv"></i> <span>System Home Page</span>
                </a>
              </li> 
              <li class="treeview">
                <a href="administrator.php">
                <i class="fa fa-dashboard"></i> <span>Admin Dashboard</span>
                </a>
              </li>  
              <?php
               $sqlnews ="SELECT * FROM Useroles WHERE Admin='$adminid' ";
                                 $rets = mysql_query($sqlnews);
								 $count= mysql_num_rows($rets);
                                if($count!=0)
	                           {
	                           	       while($found = mysql_fetch_array($rets))
	                                   {
                                            $news= $found['News'];$users = $found['Users'];
								            $media = $found['Multimedia'];$compo = $found['Components'];
											$roles = $found['Roles'];$abus=$found['Aboutus'];
									   }
                               } ?>
              <li class="treeview">
               <?php if(isset($news)&&$news=="No"){
               	  
				  
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>News(No privilages)</span>
                </a>";
				
               }
               else
               {
               	echo"<a href='#'>
                 <i class='fa fa-newspaper-o'></i>
                <span>News</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
                 <li><a href='addnews.php'><i class='fa fa-plus'></i>Add News</a></li>
                 <li><a href='managenews.php'><i class='fa fa-plus'></i>Manage News</a></li>
                </ul>
                ";
               }?>
                
              </li>              
              <li class="treeview">
                
                <?php if(isset($abus)&&$abus=='No'){
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>About Us(No privilages)</span>
                </a>";
               }
               else
               {
               	echo"<a href='#'>
                 <i class='fa fa-bank'></i>
                <span>Users/Team</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
                 <li><a href='aboutus.php'><i class='fa fa-plus'></i>Add Users</a></li>
                 <li><a href='editaboutus.php'><i class='fa fa-plus'></i>Manage Users</a></li>
                </ul>
                ";
               }?>
                
              </li>
              <li class="treeview">
                
                <?php if(isset($users)&&$users=='No'){
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>Users/Team(No privilages)</span>
                </a>";
               }
               else
               {
               	echo"<a href='#'>
                 <i class='fa fa-users'></i>
                <span>Users/Team</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
                 <li><a href='adduser.php'><i class='fa fa-plus'></i>Add Users</a></li>
                 <li><a href='editusers.php'><i class='fa fa-plus'></i>Manage Users</a></li>
                </ul>
                ";
               }?>
                
              </li>
              <li class="treeview">
                
                <?php if(isset($compo)&&$compo=='No'){
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>Componets(No privilages)</span>
                </a>";
               }
               else
               {
               	echo"<a  href='#'>
                 <i class='fa fa-spinner'></i>
                <span>Componets</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
                 <li><a href='addcomponets.php'><i class='fa fa-plus'></i>Add Component</a></li>
                 <li><a href='editcomponent.php'><i class='fa fa-plus'></i>Manage Component</a></li>
                </ul>
                ";
               }?>
                
              </li>
              
			   <li class="treeview">
                
                <?php if(isset($media)&&$media=='No'){
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>Multimedia(No privilages)</span>
                </a>";
               }
               else
               {
               	echo"<a href='#'>
                 <i class='fa fa-film'></i>
                <span>Multimedia</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
                 <li><a href='addmultimedia.php'><i class='fa fa-plus'></i>Add Multimedia</a></li>
                 <li><a href='editmultimedia.php'><i class='fa fa-plus'></i>Manag Multimedia</a></li>
                </ul>
                ";
               }?>
                
                
              </li>
              <li class="treeview">
                
                 <?php if(isset($roles)&&$roles=='No'){
               	  echo"<a  disabled=''>
                 <i class='fa fa-lock'></i>
                <span>User roles(No privilages)</span>
                </a>";
               }
               else
               {
               	echo"<a href='userroles.php'>
                 <i class='fa fa-user'></i>
                <span>User roles</span>
                <i class='fa fa-angle-left pull-right'></i>
                </a>         
                ";
               }?>
                
              </li>
              <li class="treeview">
                <a href="logout.php">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                
              </li> 
               
              
                          
                </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
			
			<div class="header-right">			
				
				<div class="profile_details" >		
					
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper"  >
			<div class="main-page" >
			
				
				<div class="charts">
					<div class="col-md-4 charts-grids widget"  >
						           
                           <h3>
							<?php if(isset($_SESSION['News'])) {?>
 
 		                      <div class="alert alert-success">
                                You have Successfully added your news
                              </div> 
                               <?php  }elseif(isset($_SESSION['error'])){
                           	                    	?>
                           	                    	 <div class="alert alert-danger">
                                                          You did not submit Component subject or full subject content
                                                     </div>
                           	          <?php       
											session_destroy();
                                     }
                                   else{
                           	                echo"Add component below";
                                        }?>
					
								</h3>
						    
						<div class="row-one widgettable">
			
					
						  <!-- multistep form -->
<form action="upload.php" method="post"  enctype='multipart/form-data' >

           
            <div class="input-group" style="margin-bottom:10px; width: 100%">
    <span class="input-group-addon">Componet Title</span>
    <input type="text" name="componettitle" placeholder="Enter componet title" style="width: 100%"/>
         </div>
 <div class="input-group" style="margin-bottom:10px">
   
    <textarea rows="8" cols="41" placeholder="Type/paste component Paragraph 1 content here" name="componet"></textarea>  </div>
     
<div class="input-group" style="margin-bottom:10px">
   
    <textarea rows="8" cols="41" placeholder="Type/paste component Paragraph 2 content here" name="componet2"></textarea>  </div>
     



               	            
                             <div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile' type='file' id='file' ></div>
                             <div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile2' type='file' id='file' ></div>
                             <div class='input-group' style='margin-bottom:10px'><span class='input-group-addon'>Select picture</span><input name='picfile3' type='file' id='file' ></div>
                        
  
   <!-- <input type="button" name="submited" class="action-button" value="Submit" /> -->  
     <button  class="btn btn-success"  value="Enumeration" name="submits">Submit</button> 
   
  
  
</form>
			
				<div class="clearfix"> </div>
		</div>
								
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						
						<div class="middle-content">
						<h4 class="title"><?php if(isset($_SESSION['News'])) {echo$title=$_SESSION['News'];?></h4>
					    
					   <?php $sqlnews ="SELECT * FROM Components";

                                 $ret = mysql_query($sqlnews);
                                while($found = mysql_fetch_array($ret))
	                           {
                                 $Fullnews = $found['Fullnews'];$Fullnews2 = $found['Fullnews2'];	      
		                        }
							   $sqln ="SELECT * FROM Picture1 WHERE Title='$title' ";
                                                $rgetn = mysql_query($sqln);
												$numn=mysql_num_rows($rgetn);
                                                if($numn!=0){
												                   while($found = mysql_fetch_array($rgetn))
	                                                                {
                                                                       $profile= $found['Picturename'];
		                                                            }
																	echo"<img src='multimedia/pictures/$profile'  height='200px' width='200px' alt=''>";	   
												             }
								$sqln1 ="SELECT * FROM Picture2 WHERE Title='$title'  ";
                                                $rgetn1 = mysql_query($sqln1);
												$numn1=mysql_num_rows($rgetn1);
                                                if($numn1!=0){
												                   while($found1 = mysql_fetch_array($rgetn1))
	                                                                {
                                                                       $profile= $found1['Picturename'];
		                                                            }
																	echo"<img src='multimedia/pictures/$profile' height='200px' width='200px' alt=''>";	   
												             }
						
										$sqln2 ="SELECT * FROM Picture3 WHERE Title='$title'  ";
                                                $rgetn2 = mysql_query($sqln2);
												$numn2=mysql_num_rows($rgetn2);
                                                if($numn2!=0){
												                   while($found2 = mysql_fetch_array($rgetn2))
	                                                                {
                                                                       $profile= $found2['Picturename'];
		                                                            }
																	echo"<img src='multimedia/pictures/$profile' height='200px' width='200px' alt=''>";	   
												             }
						
							   echo"<p>$Fullnews</p>";
							    echo"<p>&nbsp;</p>";
							     echo"<p>$Fullnews2</p>";
							   echo"<small style='color: #5261D1;'>Written by <cite title='Source Title'>$firstname</cite></small>";	   
                           
                         session_destroy();
						}   ?>				     
                          
				        </div>
					
					</div>
			
					<div class="clearfix"> </div>
				</div>
			
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>  <a href="#" target="">Design and Developed by Ralph</a></p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
   	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js""> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>