<!DOCTYPE html>
<html>
<head>
<title>Creating search bar using php</title>
</head>

<body>

<form method = "post" action ="search.php">
<label for = "search">Search</label>
<input type = "search" name = "search" id = "search">
</form>
<?php 
include("searchScript.php");
?>
</body>
</html>