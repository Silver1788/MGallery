<?php
    
try {
    $conn = new PDO('mysql:host=localhost;dbname=lab4', 'root', 'root');
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
	$sql = "SELECT * FROM form";
	if($result = $conn->query($sql)){
	foreach($result as $row){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$text = $_POST['text'];
        }
	}

?>