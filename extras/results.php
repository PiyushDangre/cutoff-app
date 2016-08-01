<html>
<head>
<title>Results</title>
<body>
<?php include 'db_connect.php';
	

    if(isset($_POST['name']))
	{
		//echo "";
	
	//else {
	
		$name = $_POST['name'];
		$score= $_POST['score'];
		$branch= $_POST['branch'];
		$category = $_POST['category'];
		//$password = $_POST['password'];
		//$dob = $_POST['dob'];
		//$working_loc = $_POST['working_loc'];
		
		//$sql = "INSERT INTO users (user_id, fname, lname, email_id, phno, password, date) VALUES ('', '$fname', '$lname', '$email_id', '$phno', '$password', '')";
		
		/*
		if ($conn->query($sql) === TRUE) {
	   echo "Registration Successful";
		} 

		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	// header("Location:login.php");
	*/
	
		$sql = "SELECT master_id, college, branch FROM master WHERE ".$category."<".$score."";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
				 echo "<br> id: ". $row["master_id"]. " - College: ". $row["college"]. " " . $row["branch"] . "<br>";
			 }
		} else {
			 echo "0 results";
		}

		$conn->close();
		
	}
?>
</body>

</html>
