<?php



$servername='localhost';
$user='root';
$password='';
$dbname='multi_login';
$conn=mysqli_connect($servername,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed: " .mysqli_connect_error());
}
$email=$_POST['email'];
$jeans=$_POST['jeans'];
$shirts=$_POST['shirts'];
$shorts=$_POST['shorts'];
$date=$_POST['date'];
$errors   = array(); 
$sql= "INSERT INTO items(email,jeans,shirts,shorts,date)VALUES('$email','$jeans','$shirts','$shorts','$date')" ;
if ($conn->query($sql) === TRUE) {
    echo "succesfully added laundry details";
  } else {
            echo "enter correct EMAILID <a href='user.php'>back</a>";
  }

header('Location:add.php');
  $conn->close();
  

?>

