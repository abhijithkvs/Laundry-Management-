<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"multi_login");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$sql = "DELETE FROM users WHERE email='" . $_GET["email"] . "'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg']= "user Data deleted.";
		header("location:update.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>