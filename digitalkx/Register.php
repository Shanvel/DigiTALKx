<?php
$con = mysqli_connect("localhost","id869167_vignesh","imbatman007","id869167_digitalkx");

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];

$statement = mysqli_prepare($con,"INSERT INTO users (name,username,password) VALUES (?,?,?)");
mysqli_stmt_bind_param($statement,"siss",$name,$username,$password);
mysqli_stmt_execute($statement);

$response=array();
$response["success"]=true;

echo json_encode($response);
?>