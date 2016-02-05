<?php

require 'login.php';

//This will be a seed file.
//Connect to a database
//I will need to open the women.txt file and read it line by line, separate it by tabs, and create an entry in the database.

// // Create database
// $sql = "CREATE DATABASE shesearch";
// if (mysqli_query($conn, $sql)) {
// 	echo "Database created successfully<br>";
// } else {
// 	echo "Error creating database: " . mysqli_error($conn) . "<br>";
// }

// // Create table
// $sql = "CREATE TABLE Women (
// 	id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	name VARCHAR(128) NOT NULL,
// 	link VARCHAR(356) NOT NULL
// 	)";

// if (mysqli_query($conn, $sql)) {
// 	echo "Table created succuessfully<br>";
// } else {
// 	echo "Error creating table: ".mysqli_error($conn)."<br>";
// }


// // Parse file
// $fh = fopen("women.txt", "r") or die("Unable to open file!<br>");

// // Iterate through each line in file and add the data to db
// if ($fh) {
// 	while (($line = fgets($fh)) !== false) {
// 		$line = trim($line);
// 		// echo $line;
// 		list($link, $name) = explode("\t", $line);
// 		$sql = "INSERT INTO Women (name, link) VALUES ('$name', '$link');";

// 		if (mysqli_query($conn, $sql)) {
// 			echo $name." added successfully<br>";
// 		} else {
// 			echo "Error adding ".$name.": ".mysqli_error($conn)."<br>";
// 		}
// 		// $women[$name] = $link;
// 	}
// }

// for the one entry that had a slash typo
// $sql = "INSERT INTO Women (name, link) VALUES ('Kay McNulty Mauchly Antonelli','#Kay McNulty MauchlyAntonelli');";
// if (mysqli_query($conn, $sql)) {
// 	echo " added successfully<br>";
// } else {
// 	echo "Error adding ".$name.": ".mysqli_error($conn)."<br>";
// }

mysqli_close($conn);
// fclose($fh);

// foreach ($women as $name => $link) {
// 	echo $name . " http://www.women.cs.cmu.edu/ada/Resources/Women/".$link."<br>";
// }



?>
