<?php
$con = mysqli_connect("localhost","id869167_vignesh","imbatman007","id869167_digitalkx");

if(isset($_POST["name"])){$name=$_POST["name"];}
if(isset($_POST["username"])){$username=$_POST["username"];}
if(isset($_POST["password"])){$password=$_POST["password"];}

$statement = mysqli_prepare($con,"INSERT INTO users (name,username,password) VALUES (?,?,?)");
mysqli_stmt_bind_param($statement,"siss",$name,$username,$password);
mysqli_stmt_execute($statement);

$response=array();
$response["success"]=true;

echo json_encode($response);
?>