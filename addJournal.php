<?php
include_once 'connectJournal.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && isset($_POST['journalEntry'])) {
    $journalEntry = $_POST['journalEntry'];
    $sql = "INSERT INTO `journals` (`journal_entry`) VALUES ('$journalEntry')";
    $query = mysqli_query($conn, $sql);
    header("location: /indexJournal.php");
}
