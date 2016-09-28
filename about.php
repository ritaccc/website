MengxuanCai_Website
<?php
// Show all information, defaults to INFO_ALL
echo "<h2> About</h2><br>";
foreach (file("navigator.txt") as$line){
	$arr = explode(' ',trim($line));
	echo"<a href='$arr[0]'>{$arr[1]}</a><br>";
	break;
}
echo "<P> ZoomInBeauty:<br>
      This is a website which we sell the most popular and most effective cosmetic that makes your skin better than ever! ";
?>