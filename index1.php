<?php
echo "<h3>_GET</h3>";
foreach ($_GET as $key => $value) {
	echo "$key = $value<br>";
}
//echo $_GET['id'];
echo "<br><br>";
echo "<h3>_POST</h3>";
foreach ($_POST as $key => $value) {
echo "$key = $value<br>";
}
echo "<br><br>";
echo "<h3>_SERVER</h3>";
foreach ($_SERVER as $key => $value) {
echo "$key = $value<br>";
}
echo "<br><br>";
echo "<h3>_COOKIE</h3>";
foreach ($_COOKIE as $key => $value) {
echo "$key = $value<br>";
}
?>


