<?php
    
try {
    $conn = new PDO('mysql:host=localhost;dbname=heart', 'root', 'root');
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
		$email = $_POST['email'];
		$name = $_POST['name'];
		$text = $_POST['text'];
		$q = "INSERT INTO form (email, name, text) VALUES ('{$email}', '{$name}', '{$text}')";
		$conn->query($q);
}
