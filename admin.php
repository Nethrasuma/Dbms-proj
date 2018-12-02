<?php
	include_once 'headeradmin.php';
	if(isset($_SESSION['admin']))
	{
		?><center style='font-size:30px;font-style:italic'><?php
		echo "<br>";
		echo '<pre><form action="adminviews.php" method="POST">1. View orders of the day  <button type="submit" name="1">View</button></form><br>';
		echo '<form action="adminviews.php" method="POST">2. View orders of a particular day  <input type = "text" name="date" placeholder="YYYY-MM-DD"> <button type="submit" name="2">View</button></form>';  
		echo '<br><form action="adminviews.php" method="POST">3. Users and their No. of orders  <button type="submit" name="3">View</button></form><br></pre>';
		?></center><?php
	} 
?>
<?php
	include_once 'footer.php'; /*to include footer code here*/
?>
