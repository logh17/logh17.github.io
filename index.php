<html>
<head>
<style>
div {
font family: Ubuntu;
background-color: #F2F2F2;
}
</style>
</head>
<body>
<div>
<h1> <center> Instagram Full Size Profile Picture </center> </h1>
</div>
<center>
<?php 
if(isset($_REQUEST['input'])) {
$name = $_REQUEST['input'];
$output = shell_exec("/home/loghgxli/public_html/instapic.sh $name");
}
?>
<form action="" method="get">
Enter Instagram Username: <input type="text" name="input">
<input type="submit" value="View">
</form>
<?php
if(isset($output)) {
echo "<img src=$output>";
}
?>
</center>
</body>
</html>