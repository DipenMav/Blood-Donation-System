<html>
<head>
<title>Search Data</title>

</head>
<body>
<center>
<h1>Search Blood Donor </h1>


<div class="container">

<form method="POST" action="">
    <select id="bloodgroup" name="blood" >
        <option value="">Select Blood Group</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
    </select><br><br>        
<input type="submit" name="search" value="Find" id="button">
</form>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","donorform");
if(count($_POST)>0) {
$blood_group=$_POST[blood];
$result = mysqli_query($conn,"SELECT * FROM registration where blood='$blood_group' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#bloodgroup{
    border:2px solid red;
    padding:4px 4px;
    background-color:black;
    font-weight:bolder;
    color:white;
    height:40px;
    font-size:18px;

}
#button{
    background-color:red;
    color:white;
    padding:5px 5px;
    height:40px;
    width:80px;
    font-weight:bolder;
    font-size:20px;
    border:2px solid black;
}



table, th, td {
    border: 1px solid black;
}
table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
</style>
</head>
<body>
<table>
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Age</td>
<td>Email</td>
<td>Contact</td>
<td>Blood Group</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["contact"]; ?></td>
<td><?php echo $row["blood"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</center>
</body>
</html>
