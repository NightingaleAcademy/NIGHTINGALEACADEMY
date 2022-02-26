
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Registration Form</title>

</head>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 12px;
  background-color: #8FF8C5;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=number], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:#8FF8ED ;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: yello;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
<body>
<header>
    <h1 style="text-align:center;color:white;">Nightingale Academy</h1>
</header>
<form action="adddata1.php" method="post" >

<div class="main" style="text-align:center; padding:30px;background-color:#C70039;font-family:cambria; font-size:18px;color:white;margin-left:15%; margin-right:15%;">
<h2 style="text-align:left;">Registration Form</h2>
<br>
<p>Fill first five fields with student information</p>
<br>
<label for="name"> <b>Student's Name</b> </label>
<br>
<input type="text" name="name" id="name" required> 
<br>
<br>
<label for="address"> <b>Address</b> </label>
<br>
<input type="text" name="address" id="address" required> 
<br>
<br>
<label for="gender"> <b>Gender</b> </label>
<br>
<input type="text" name="gender" id="gender" required> 
<br>
<br>
<label for="age"> <b>Age</b> </label>
<br>
<input type="number" name="age" id="age" required> 
<br>
<br>
<label for="class"> <b>Class</b> </label>
<br>
<input type="text" name="class" id="class" required> 
<br>
<br>
<label for="pschool"> <b>Previous School</b> </label>
<br>
<input type="text" name="pschool" id="pschool" required> 
<br>
<br>
<p>Guardian Information</p>
<br>
<label for="gname"> <b>Parent or Guardian's Name</b> </label>
<br>
<input type="text" name="gname" id="gname" required> 
<br>
<br>
<label for="contact"> <b>Contact Number</b> </label>
<br>
<input type="number" name="contact" id="contact" required> 
<br>
<br>
<label for="opson"> <b>Occupation</b> </label>
<br>
<input type="text" name="opson" id="opson" required> 
<br>
<br>



<input type="submit" value="Save">
</div>

</form>




</body>
</html>
