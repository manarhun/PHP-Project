<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Delete</title>
    <link href="Style5.css" rel="stylesheet" type="text/css"/>
</head>
<h2>Delete</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Book ID : <input type="number" name="bookID" ><br><br>
  <input type="submit" value="Delete">
  </form>
</body>
</html>
<?php 
$id=$_POST['bid']; 
$conn=new mysqli("localhost","root","root","fellowship Library"); 
$sql="DELETE FROM book WHERE book_id='$id' "; 
$result=$conn->query($sql); 
$conn->close(); 
?>