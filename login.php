<?PHP
    include_once("connection.php"); 
    if( isset($_POST['email']) && isset($_POST['password']) ) { 
        $username = $_POST['email'];
        $password = $_POST['password'];
        
        $query = "SELECT email, password FROM student_details ". 
        " WHERE email = '$email' AND password = '$password'"; 
        
        $result = mysqli_query($conn, $query);
        
        if($result->num_rows > 0){
            if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){ 
                echo "success"; 
                exit; 
            } 
            //header("location: index.php"); //replace index.php with your url
        } else{ 
            echo "Login Failed <br/>"; 
        } 
    } 
?>


