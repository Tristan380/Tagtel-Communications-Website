<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					
					
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					
					$cin = $row['cin'];
					
					$sta = $row['stat'];
					$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Quote Requests</a>
                    </li>
                    
					
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quote Request<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Quotation  Conformation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										
										
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Service </th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										
                                            
                                        </tr>
										<tr>
                                            <th>Date Requested </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										
										
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Conformation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Conform</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Conform" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="FTTH INSTALLATION" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="ADSL INSTALLATION")
							{
								$gh = $gh + 1;
							}
							if($s=="LTE" )
							{
								$sr = $sr + 1;
							}
							if($s=="MIFI&SIM" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="FTTH INSTALLATION"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="ADSL INSTALLATION" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="LTE" )
							{
								$csr = $csr + 1;
							}
							if($cs=="MIFI&SIM" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?>
					
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>


					
									
									
							
						