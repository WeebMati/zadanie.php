
<?php
include ('db_config.php');

mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc)VALUES ('nowa','Tresc nowej strony')");
	echo "Dane chyba dodane!<br>";

	mysqli_close($polaczenie);
	
?>

