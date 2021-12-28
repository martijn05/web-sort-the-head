<?php
// db conn
$hostname = "ID329095_sortthehead.db.webhosting.be";
$dbUser = "ID329095_sortthehead";   
$dbPassword = "s0rthead"; 
$dbName = "ID329095_sortthehead";


$conn = mysqli_connect($hostname,$dbUser,$dbPassword,$dbName);
    
// test conn
//var_dump($conn);

if ($conn == false) {
    die("Connection failed") ;
};



// db conn werkt
?>
   

