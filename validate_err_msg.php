<?php
// ths program will throw an error for any contorl submitted without data 
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["name"])){
 $_nameErr= "name is a required field"
 echo$nameErr; 
 }
 else{
 $name= test_input($_POST["name"]);
echo$name."<br/>"; 
 }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["email"])){
 $emailErr= "email is a requred field";
 }
 else{
 $email= test_input($_POST["email"]);
 echo $email."<br/>"; 
 }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["website"])){
 echo"website is a required field";
 }
 else{
 $webste= test_input($_POST["website"]);
 echo $webste."<br/>"; 
 }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["comment"])){
 echo"comment is a required field";
 }
 else{
 $comment= test_input($_POST["comment"]);
 echo $comment."<br/>"; 
 }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST["gender"])){
 echo"gender is a required field";
 }
 else{
 $gender= test_input($_POST["gender"]);
 echo $gender."<br/>"; 
 }
}
function test_input($data) {
$data= trim($data);
 $data= stripslashes($data)
 $data= htmlspecialchars($data);
 return $data;
 }
?>