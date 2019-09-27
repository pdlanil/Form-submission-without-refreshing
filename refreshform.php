
<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
$connection = mysqli_connect('localhost', 'root', '','student');
// Selecting Database by passing "database_name" and above connection variable.
$name2=$_POST['name1']; // Fetching Values from URL
$email2=$_POST['email1'];
$contact2=$_POST['contact1'];
$gender2=$_POST['gender1'];
$msg2=$_POST['msg1'];
$query = mysqli_query($connection,"insert into form_data(name, email, contact, gender, message) values ('$name2','$email2','$contact2','$gender2','$msg2')"); //Insert query
if($query){
    echo "Data Submitted succesfully";
}
mysqli_close($connection); // Connection Closed.
?>
