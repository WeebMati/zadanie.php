
<?php
include ('db_config.php');
include ('social.php');
$query = 'CREATE TABLE Skibidi(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
Nazwa CHAR(255) NOT NULL,
link CHAR(255) NOT NULL)';


if (!$result=@mysqli_query($polaczenie,$query)){ 
	echo 'Blad tworzenia tabeli MySQL, odpowiedz serwera: '.mysqli_error($polaczenie);   
	}
else {
	echo $result;
	echo "<br>Tabelę utworzono! Dadawanie danych:<br>";
	mysqli_query($polaczenie,"INSERT INTO Skibidi (Nazwa,link)VALUES ('Youtube','https://www.youtube.com/')");
	mysqli_query($polaczenie,"INSERT INTO Skibidi (Nazwa,link)VALUES ('X','https://x.com/?lang=pl')");
	mysqli_query($polaczenie,"INSERT INTO Skibidi (Nazwa,link)VALUES ('Tiktok','https://www.tiktok.com/pl-PL/')");
	echo "Dane chyba dodane!<br>";
	mysqli_close($polaczenie);
	}
?>

