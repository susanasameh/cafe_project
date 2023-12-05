<?php 
//THE WAY TO CONNECT DATABASE WITH PHP

//SET 3 VARIABLES
$server = 'localhost'; // the server name which we use
$username = 'root';   //username and password get confirmed from the php config in xampp by chossing config.inc.php
$password = '';

//TO KNOW IF THERE WAS EROR OR NO 
//IF NO ERROR THERE WAS NO NEED TO USE THE CATCH
try{
    $conn = new PDO(
        "mysql:host=$server;dbname=cafe", //the dbname changed as like the name of database in phpmyadmin which i made
        $username,
        $password
    );
     
    //set the PDO(php data object) error mode to exception
    //set $conn variable to set error attribute in it 
    $conn->setattribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION     //to enter to the catch because there was error
    );

    echo "connect successfully" . "<br><br>";
  
}catch(PDOEXCEPTION $e){
    echo "connection failed: " . $e->getMessage();
};

