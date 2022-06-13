<?php
    
try {
    $conn = new PDO('mysql:host=localhost;dbname=lab4', 'root', 'root');
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
	$sql = "SELECT * FROM card";
	if($result = $conn->query($sql)){
	foreach($result as $row){
		$kind[] = $row["kind"];
		$name[] = $row["name"];
		$img[] = $row["img"];
        }
	}

?>