<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', 'YES', 'journal_entry')
        or die("Connection Failed:" .mysqli_connect_error());
        if (isset($_POST['journalEntry'])) {
            $journalEntry = $_POST['journalEntry'];
            $sql = "INSERT INTO `journals` (`journal_entry`) VALUES ('$journalEntry')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo 'Entry Successful! It worked Professor Foultz!';
                
            } else {
                echo 'Error Ocurred, oh god dont look professor';
            }
        }
    }
