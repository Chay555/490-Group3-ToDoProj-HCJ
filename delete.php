<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $host="localhost";
    $user="root";
    $pass="";
    $dbname="todolist";

    //CREATE CONNECTION
    $conn = new mysqli($host, $user, $pass, $dbname);

    $sql = "DELETE FROM task WHERE id=$id";
    $conn->query($sql);
}

header("location: /list.php");
exit;
?>