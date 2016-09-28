MengxuanCai_Website
<?php
// Show all information, defaults to INFO_ALL
echo "<h1> ZoomInBeauty</h1><br>";
foreach (file("navigator.txt") as$line){
	$arr = explode(' ',trim($line));
	echo"<a href='$arr[0]'>{$arr[1]}</a><br>";
}
?>



