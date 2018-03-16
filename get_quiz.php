<?php 

$con = mysqli_connect("localhost","root","","quiz_post");

$stmt = $con->prepare("SELECT number,description,type,mark,a_choice,b_choice,c_choice,d_choice FROM quiz_post;");
 
//executing the query 
$stmt->execute();

//binding results to the query 
$stmt->bind_result($number,$description,$type,$mark,$a_choice,$b_choice,$c_choice,$d_choice);

$result = array(); 

//traversing through all the result 
while($stmt->fetch()){
$temp = array();
$temp['number'] = $number; 
$temp['description'] = $description; 
$temp['type'] = $type; 
$temp['mark'] = $mark; 
$temp['a_choice'] = $a_choice; 
$temp['b_choice'] = $b_choice; 
$temp['c_choice'] = $c_choice; 
$temp['d_choice'] = $d_choice; 
array_push($result, $temp);
}


echo json_encode($result);

mysqli_close($con);
?>