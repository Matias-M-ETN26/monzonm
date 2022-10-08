<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "memingos";
$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
    die("error");
}
/*
    if($conn){
        echo("conectado");
    }else{
        echo("error");
    }
    */
    /*requetemega importante
$query = mysqli_query($conn, "SELECT MAX(id) AS id FROM usuarios");
if ($row = mysqli_fetch_row($query)) {
    $id = trim($row[0]);
}
echo($id + 1);
*/
?>
