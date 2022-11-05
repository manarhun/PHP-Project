<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Add</title>
    <link href="Style5.css" rel="stylesheet" type="text/css"/>
</head>
<h2>Add</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Book ID : <input type="number" name="bookID" ><br><br>
  <input type="submit" value="Add">
  </form>
</body>
</html>