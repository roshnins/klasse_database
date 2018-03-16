<?PHP

	// $HostName="localhost";

	// $HostUser="root";

	// $HostPass="";

	// $DatabaseName="quiz_post";

	$con=mysqli_connect("localhost","root","","quiz_post");

	$number=$_POST['number'];
	$description=$_POST['description'];
	$type=$_POST['type'];
	$mark=$_POST['mark'];
	$a_choice=$_POST['a_choice'];
	$b_choice=$_POST['b_choice'];
	$c_choice=$_POST['c_choice'];
	$d_choice=$_POST['d_choice'];
	
	$Sql_Query="insert into quiz_post (number,description,type,mark,a_choice,b_choice,c_choice,d_choice) values ('$number','$description','$type','$mark','$a_choice','$b_choice','$c_choice','$d_choice')";

	if(mysqli_query($con,$Sql_Query)){
		echo 'Data Inserted Successfully';
	}
	else{
		echo 'Try Again';
	}

	mysqli_close($con);

?>