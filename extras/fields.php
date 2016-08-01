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

<html>
<head>
<title>Registration Page</title>
<style>
body
{
margin:0px;
border:0px;
}
.wrapper
{
margin-left:auto;
margin-right:auto;
width:400px;
}
label
{
float:left;
}
input, select
{
float:right;
}
h1
{
text-align:center;
}


</style>
<!--script>

  function checkForm(form)
  {
  

    if(form.pwd.value != "" && form.pwd.value == form.confirm_pwd.value) {
      if(form.pwd.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd.focus();
        return false;
      }
      if(form.pwd.value == form.emp_id.value) {
        alert("Error: Password must be different from Username!");
        form.pwd.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd.value);
    return true;
  }

</script>
<!--- numbers only---->
<!--script>
 
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
            alert("Please enter numeric values only");
			return false;
			}

        return true;
    }    
</script-->
</head>
<body>


<div class="wrapper">
<h1>Search Cutoff</h1>
<form action="results.php" method="post" enctype="multipart/form-data" id="myform">
	<label>Name</label>
	<input type="text" name="name" id="name" required></input><br><br><br>
	<label>Score</label>
	<input type="text" name="score" id="score" required></input><br><br><br>
	<label>Branch</label>
	<input type="text" name="branch" required></input><br><br><br>
	<label>Category</label>
	<input type="text" name="category" id="category" required></input><br><br><br>
	
	<input type="submit" value="SUBMIT" ></input>
	

</form>
</div>

<!---Jquery and Javascript---->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--script>

$( "#myform" ).validate({
  rules: {
    pwd: "required",
    confirm_pwd: {
      equalTo: "#pwd"
    }
	
  }
});


</script>
<!--- password policy---->



</body>

</html>