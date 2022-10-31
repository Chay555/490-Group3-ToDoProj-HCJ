<?php
include_once 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && isset($_POST['journalEntry'])) {
    $journalEntry = $_POST['journalEntry'];
    $sql = "INSERT INTO `journals` (`journal_entry`) VALUES ('$journalEntry')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo 'Entry Successful! It worked Professor Foultz!';
    } else {
        echo 'Error Ocurred, oh god dont look professor';
    }
}
