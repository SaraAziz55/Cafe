<html>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "feedback");
if($link == false){
	die("ERROR: Could not connect.".mysqli_connect_error());
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

$sql = "INSERT INTO visitor (name, email, comments) VALUES ('$name', '$email', '$comments')";

if(mysqli_query($link, $sql)){
	echo "Your feedback submitted successfully.!";
}else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>