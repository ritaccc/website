MengxuanCai_Website

<?php
// Show all information, defaults to INFO_ALL
echo "<h1> Developer</h1><br>";
foreach (file("navigator.txt") as$line){
	$arr = explode(' ',trim($line));
	echo"<a href='$arr[0]'>{$arr[1]}</a><br>";
	break;
}
echo "<p> Name: Mengxuan Cai<br>
		  SID : 011494444<br>
		  Class: CMPE 272<br>
		  LAB Name: Create your first Web Application<br>
		  LAB Num: #3<br>
		  </p>";

?>