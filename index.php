<html>
	<title>School Athletic Records</title>
</html>
<?php
//index.php
include 'connect.php';
include 'header.php';

echo '<tr>';
	echo '<td class="leftpart">';
		echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
	echo '</td>';
	echo '<td class="rightpart">';				
			echo '<a href="Home.php?id=">Topic subject</a> at 10-10';
	echo '</td>';
echo '</tr>';
?>

<?php
include 'footer.php';
?>