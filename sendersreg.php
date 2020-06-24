<?php

    
	//define login credentials as local variables (default login for PHPmyadmin is 'root' and no password)
    $dsn = 'mysql:host=localhost;dbname=aeromail';
    $username = 'root';
    $password = '';
	
try	{

    //establish connection to database    
    $conn = new PDO($dsn, $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //assigning the INSERT query to $sql variable
    $sql = "INSERT INTO senders(email, firstname, lastname, phone, password) VALUES ('$email', '$firstname', '$lastname', '$phone', '$hashed_password')";

    //query gets sent to database
    $conn->exec($sql);

    include('regconf.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	}
    //close connection
    $conn = null;


?>
