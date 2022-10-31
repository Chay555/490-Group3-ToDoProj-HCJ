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
  <h2> What are your intentions today?</h2>
  <form action='addJournal.php' method="POST">
    <label for="user"></label>
    <textarea type='text' name='journalEntry' id="journalEntry" rows="5" cols="50" required></textarea>
    <br> <br>
    <input type='submit' name='submit' id="submit" />
  </form>

  <h4>PreviousEntries:</h4>
  <br>
</body>

</html>