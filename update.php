<html>
<head>
<link href="style3.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<center>
    <form method="post" action=""><h2>update</h2>
   <p>Email :</p><input type="text"/><br>
     <p> New Password :</p><input type="password"/><br><br>
    <input type="submit" value="Change"/>
    
</form>

</center></body>
</html>
<?php 
$name=$_POST["bname"]; 
$type=$_POST["btypy"]; 
$author=$_POST["bauthor"]; 
$year=$_POST["byear"]; 
$conn=new mysqli("localhost","root","root","fellowship library"); 
$sql="INSERT INTO book(book_name,book_type,book_author,book_year) VALUES ('$name','$type','$author','$year')"; 
$result=$conn->query($sql); 
$conn->close(); 
?>