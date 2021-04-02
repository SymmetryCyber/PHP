<html>
	<head>
		<meta charset-"utf-8">
		<title>Guestbook</title>
		<meta name="description" content="idk whatever">
		<meta name="author" content="Dan">
		<link href="https://maciej27.uwmsois.com/assignment8/style.css" rel="stylesheet">
	</head>
	<?php
		include("header.php");
		include("mySQLiConnect.php");
	?>
	<body>
		<h2 align="center">Comments!</h2>
		
		<?php
			$query = "SELECT * FROM guestbook ORDER BY id";
			
			$results = mysqli_query($dbc,$query);
			
			echo "<br><hr width=\"70%\"><br>";
			
			while($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
			{
				echo "<table width=\"80%\" border=\"1\">";
				echo "<tr>";
				echo "<td colspan=\"2\"><div align=\"center\"><strong>Comments</strong></div>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width\"200\">". $row['date']."</td>";
				echo "<td rowspan=\"4\"><div align=\"center\">". $row['comments']."</td></div>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>".$row['fname']." ".$row['lname']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>". $row['email']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td> Comment ID: ". $row['id']."</td>";
				echo "</table>";
				echo "<br>";
				echo "<hr width=\"70%\">";
				echo "<br>";
			}
		?>
	</body>
	<?php
		include("footer.php");
	?>
	
</html>