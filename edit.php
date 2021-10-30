<?php
require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` ";
//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$status= mysqli_real_escape_string($conn, $_POST['status']);
	$position = mysqli_real_escape_string($conn, $_POST['position']);
	

$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`contact`='$contact',`nid`='$nid',`position`='$position',`status`='$status' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");	
}
?>
<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$birthday = $res['birthday'];
    $position = $res['position'];
    $status = $res['status'];
	$nid = $res['nid'];
	
}
}

?>

<html>
<head>
	<title>View Employee |  Manager Panel</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>Awersomity Lab.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    first name <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   last name <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                           email <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                              birth day  <div class="input-group">
                                    <input class="input--style-1" type="date" name="birthday" value="<?php echo $birthday;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        
                        <div class="input-group">
                           Phone <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        <div class="input-group">
                           National Id <input class="input--style-1" type="number" name="nid" value="<?php echo $nid;?>">
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="position" style="border : none;">
                                            <option value="<?php echo $position;?>" selected="selected"><?php echo $position;?></option>
                                            <option disabled="disabled" >new position</option>
                                            <option value="developer">developer</option>
                                            <option value="tester">tester</option>
                                            <option value="designer">designer</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
    
                        <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="status" required="required"style="border : none;">
                                            <option value="<?php echo $status;?>" selected="selected"><?php echo $status;?></option>
                                            <option disabled="disabled" >change status to :</option>
                                            <option value="active">active</option>
                                            <option value="inactive">inactive</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>


                           </div>
                        
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script> --> 
</body>
</html>
