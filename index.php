<?php
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" <meta name="viewport" [content="width=device-width, initial-scale=1.0">
  <title>Adding Journal Entry</title>
</head>


<body>
  <h1> Daily Journal!</h1>
  <h2 id="current_date">
    </p>
    <script>
      date = new Date();
      year = date.getFullYear();
      month = date.getMonth() + 1;
      day = date.getDate();
      document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
    </script>
    <h2> What are your intentions today?</h2>
    <form action='addJournal.php' method="POST">
      <label for="user"></label>
      <textarea type='text' name='journalEntry' id="journalEntry" rows="5" cols="50" required></textarea> <p></p>
      <small>There is a 250 wordcount limit!</small>
      <br> <br>
      <input type='submit' name='submit' id="submit" />
    </form>

    <h4>PreviousEntries:
      <hr>
    </h4>
    <?php
    $sql = "SELECT * FROM journals;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['journal_entry']
        . "<hr><br> ";
      }
    }
    ?>
    <br>
</body>

</html>