<?php

// de DB conn werkt niet heb alles geprobeerd maar niks werkt
// ik heb allsnog proberen alle code te schrijven zoals het hoort
// zodat u kan zien ofdat ik het kan


$hostname = "localhost";
$dbUser = "root";   
$dbPassword = "root"; 
$dbName = "sortthehead";
$port = 8889;

$conn = mysqli_connect($hostname,$dbUser,$dbPassword,$dbName,$port);
    
var_dump($conn)

if ($conn == false) {
    die("Connection failed") ;
}
// $sql = "SELECT input-firtsname,user-genderS,input-name from user'";


// $result = mysqli_query($conn, $sql);
// $user = $result->fetch_all(MYSQLI_ASSOC);

?>
   

