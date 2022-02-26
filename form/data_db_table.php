<?php 
$name=$_POST['name'];
$class=$_POST['class'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$xschool=$_POST['xschool'];
$parent=$_POST['parent'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$occupation=$_POST['occupation'];


include 'server.php';

$sql="INSERT INTO newrecord(name,class,age,gender,xschool,parent,address,contact,occupation)VALUES('$name','$class','$age','$gender','$xschool','$parent','$address','$contact','$occupation')";
$result=mysqli_query($conn,$sql);                                                           

if($result){
    header('Location: registration.html');
}

?>