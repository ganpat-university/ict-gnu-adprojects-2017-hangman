<?php
//$dbhost = "127.0.0.1";
  //$dbuser = "root";
  //$dbpass = "";
  $db = "hangman"; 
  $con=mysqli_connect("127.0.0.1","root","","hangman");
  session_start();
if (!$con)
  {
    die('Could not connect: ' );
	mysqli_error();
  }
//mysql_select_db($db, $con);
//$user_name=$mysqli->real_escape_string($_POST['user_name']);
//$level=$mysqli->real_escape_string($_POST['level']);

if(isset($_POST['user_name']) || isset($_POST['level']) ){ 
$user_name=$_SESSION['user_name'];
$level=$_SESSION['level']  ;
$sql="INSERT INTO display(user_name,level) VALUES('". $_POST['user_name']. "','". $_POST['level']. "')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ') ;
	mysqli_error();
  }
echo "1 record added";
}
mysqli_close($con)


?>