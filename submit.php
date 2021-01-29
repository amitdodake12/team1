<?php 

$con = mysqli_connect('localhost','root') or die('conncetion error');

// if($con){
//     echo "done";
// }
// else{
//     echo "error";
// }

mysqli_select_db($con,'test_db');

// $name = $_SESSION['name'];
 $mvname = "force";
$review = $_POST['review'];


// $query = " insert into test_tbl (name, review)
$query = " insert into msgtbl(review,movie_name)
values ('$review','$mvname')";
// values ('$user', '$review')";

mysqli_query($con,$query);


header('location:force.php');

?>