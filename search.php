<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['value'];
require_once ('process/dbh.php');
$sql = "SELECT * from `employee` where firstName = '$name' or lastName = '$name' or email = '$name' or contact = '$name' or email= '$name'  ";

//echo "$sql";

?>



<html>
<head>
	<title>View Employee |  Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body style="font-size: 15px;">
	<header>
		<nav>
			<h1>Awersomity lab.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	
		<table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">birth date</th>
				<th align = "center">contact</th>
				<th align = "center">nid</th>
				<th align = "center">position</th>
				<th align = "center">created_date</th>
				<th align = "center">status</th>
				
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
               if($result = mysqli_query($conn, $sql)){
               if(mysqli_num_rows($result) > 0){



				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
									echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['nid']."</td>";
					echo "<td>".$employee['position']."</td>";
					echo "<td>".$employee['created_date']."</td>";
					echo "<td>".$employee['status']."</td>";
				
					

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}
                }}
                else{
                	echo "no mathing values";
                }}

			?>

		</table>
		
	
</body>
</html>