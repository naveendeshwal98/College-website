<?php

$servername = "localhost";
$user = "root";
$password = "";
$database = "aitm";
 
 $error = "";

//creating the connection---------
$link = mysqli_connect($servername,$user,$password,$database);
if(mysqli_connect_error())
{
	die("there is an error while creating a connection");
}
//server-side validation

if($_POST['submit'])
	$error ="";

if(!$_POST['Message']){
	$error .="An Message is required"; 
}
if($error != ""){
	$error = "<p>There were an errror(s) in your form</p>".$error;
}
else{
	
		$query = "INSERT INTO `chat_record_table`(`Message`) VALUES(		
			'".mysqli_real_escape_string($link ,$_POST['Message'])."') 
			";
			mysqli_query($link, $query);    //excuting the query
     		header("Location: Home.html");
			echo "Record Updated Successfully";

}
?>
	<!-- <div id="error"><?php echo $error;  ?></div> -->