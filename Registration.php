<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Pilot";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
   die("Connection failed:".$conn->connect_error);
}
else
{
   $q="INSERT INTO Pilot(Name,Email,Gender,DoB,NID,Religion) VALUES('".$name."','".$email."','".$gender."','".$dob."','".$nid."','".$religion."')";
   $result=$conn->query($q);
   if($result)
     echo "data inserted";
    else
      echo "data not inserted"; 

    $p="UPDATE Pilot(Name,Email,NID) VALUES ('farhana','munmun@gmail.com',237664823947)";   
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form action="Validation.php" method="post" novalidate>

 <fieldset>

    <legend>Basic Information</legend>

    <br>

    <label for="fname">First name* :</label>
    <input type="text" id="fname" name="fname">

    <br><br>

    <label for="lname">Last name* :</label>
    <input type="text" id="lname" name="lname">

    <p>Gender* :</p>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>

    <br><br>

    <label for="dob">Date of Birth* :</label>
    <input type="date" id="dob" name="dob">

    <br><br>

    <label for="religion">Religion* :</label>
    <select name="religion" id="religion">
    <option value="islam">Islam</option>
    <option value="hindu">Hindu</option>
    <option value="buddhist">Buddhist</option>
    <option value="christian">Christian</option>
    </select>

 </fieldset>

 <br>

 <fieldset>

    <legend>Contact Information</legend>

    <br>

    <label for="preaddress">Present Address* :</label>
    <textarea id= "preaddress" name= "preaddress" rows="3" cols="50">
    </textarea>

    <br><br>

    <label for="peraddress">Permanent Address :</label>
    <textarea id= "peraddress" name= "peraddress" rows="3" cols="50">
    </textarea>

    <br><br>

    <label for="phone">Phone :</label>
    <input type="tel" id="phone" name="phone" pattern="[0]{1}[1]{1}[1-9]{9}"required>

    <br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email">

    <br><br>

    <label for="website">Personal Website Link :</label>
    <input type="url" id="website" name="website">

    <br><br>

 </fieldset>

     <br><br>

      <fieldset>

    <legend>Credentials</legend>

    <br>

    <label for="username">Username* :</label>
    <input type="text" id="username" name="username" maxlength="5">

    <br><br>

    <label for="pass">Password :</label>
    <input type="password" id="pass" name="pass">

    <br><br>

    <label for="conpass">Confirm Password :</label>
    <input type="password" id="conpass" name="conpass">

    <br><br>

 </fieldset>
     
    <br>

    <div style="text-align:center">  
    <input type="submit" value="Submit">  
    </div> 

    <br><br>

    </form>

</body>
</html>