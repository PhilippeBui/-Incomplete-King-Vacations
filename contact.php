<!DOCTYPE HTML>
<html>
<body>
<?php
//variables 
$fname=$lname=$address=$city=$state="";
$fnameErr= $lnameErr= $addressErr = $cityErr= $stateErr="";

//input validation
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["fname"])){
		$fnameErr="*first name Required";
	}else {
		$fname=test_input($_POST["fname"]);	
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
			$fnameErr= "Only letters and white space allowed";
		}
	}
	if(empty($_POST["lname"])){
		$lnameErr="*last name Required";
	}else {
		$lname=test_input($_POST["lname"]);	
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
			$lnameErr= "Only letters and white space allowed";
		}
	}
	if(empty($_POST["address"])){
		$addressErr="*address field required";
	}else {
		$address=test_input($_POST["address"]);		
		if(!preg_match("/^[a-zA-Z0-9 ]*$/",$address)){
			$addressErr= "Only letters, white space and numbers allowed";
		}
	}
	if(empty($_POST["city"])){
		$cityErr="*city field required";
	}else {
		$city=test_input($_POST["city"]);	
		if(!preg_match("/^[a-zA-Z ]*$/",$city)){
			$cityErr= "Only letters and white space allowed";
		}		
	}
	if(empty($_POST["state"])){
		$stateErr="*state field required";
	}else {
		$state=test_input($_POST["state"]);	
		if(!preg_match("/^[a-zA-Z ]*$/",$state)){
			$stateErr= "Only letters and white space allowed";
		}		
	}

}
function test_input($data){
	$data= trim($data);
	$data = stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
} ?>
<?php

echo "<h2>Input Confirmation:</h2>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $address;
echo "<br>";
echo $city;
echo "<br>";
echo $state;

//time
$now= date('Y-m-d');
$now1= new dateTime();

//logging
$list=array("$fname, $lname, $address, $city, $state");

$fp=fopen($now, "log_'4%d_2%d_2%d'.csv", "w");



foreach($list as $line)
{
	fputcsv($fp,explode(",", $line));
	fprintf('% \n',$list);
}

fclose($fp);
?>
</body>
</html>
