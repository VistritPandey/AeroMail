#File:        send_order.php
#Purpose:     Collecting info from shipping form and sending it to database
#Author:      Liam Sweeney, Artem Yakupov
#Date:        8 May, 2020
#Dependency:  ----------------------
<?php

    
	//define login credentials as local variables (default login for PHPmyadmin is 'root' and no password)
	$dsn = 'mysql:host=localhost;dbname=aeromail';
	$username = 'root';
	$password = '';
	
	//establish connection to database    
    $conn = new PDO($dsn, $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$weight = $_POST['weight'];
	$size = $_POST['size'];
	$description = $_POST['description'];
	$senderfirst = $_POST['senderfirst'];
	$senderlast = $_POST['senderlast'];
	$senderemail = $_POST['senderemail'];
	$senderphone = $_POST['senderphone'];
	$recipientfirst = $_POST['recipientfirst'];
	$recipientlast = $_POST['recipientlast'];
	$recipientemail = $_POST['recipientemail'];
	$recipientphone = $_POST['recipientphone'];
	$pickupaddress = $_POST['pickupaddress'];
	$destinationaddress = $_POST['destinationaddress'];
	// $quantity = $_POST['quantity'];

    $sql = "INSERT INTO orders(weight, size, description, senderfirst, senderlast, senderemail, senderphone, recipientfirst, recipientlast, recipientemail, recipientphone, pickupaddress, destinationaddress)
    		VALUES ('$weight', '$size', '$description', '$senderfirst', '$senderlast', '$senderemail', '$senderphone', '$recipientfirst', '$recipientlast', '$recipientemail', '$recipientphone', '$pickupaddress', '$destinationaddress')";

	$conn->exec($sql);
	   
	include('orderconf.php');
	$conn = null;
?>