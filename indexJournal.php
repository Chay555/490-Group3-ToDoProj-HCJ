<?php
include_once 'connectJournal.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" <meta name="viewport" [content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon4.ico" />
  <title>Dia Expedia</title>
</head>


<body>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="/list.php" class="nav-link link-dark px-2">Todo List</a></li>
        <li class="nav-item"><a href="/index.php" class="nav-link link-dark px-2">Logout</a></li>
      </ul>
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <svg class="bi me-2" width="40" height="32">
        <span class="fs-4">DiaExpedia - Journal </span>
      </svg>
    </div>
  </header>
  <h5>Today's Date is:</h5>
  <h6 id="current_date"></h6>
  </p>
  <script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
  </script>
  <div></div>
  </span> What are your intentions today?</span>
  <form action='addJournal.php' method="POST">
    <label for="user"></label>
    <textarea type='text' name='journalEntry' id="journalEntry" rows="5" cols="50" required></textarea>
    <p></p>
    <small>There is a 250 wordcount limit!</small>
    <br> <br>
    <input class="btn btn-primary" type='submit' name='submit' id="submit" />
  </form>
  <br></br>
  <h4>PreviousEntries:</h4>
  <hr>
  </hr>
  <?php
  $sql = "SELECT * FROM journals;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>$row[journal_entry]</td>
              <td>
                <a class='btn btn-outline-success btn-sm' href='/editJournal.php?id=$row[id]'>Edit</a>
                <a class='btn btn-danger btn-sm' href='/deleteJournal.php?id=$row[id]'>Delete</a>
              </td>
            </tr>
            <br></br>
            <hr>
          ";
    }
  }
  ?>
  <br>
</body>

<div class="container">
  <footer class="py-5 my-5">
    <p class="text-center text-muted">©2022 Dia Expedia, Inc</p>
  </footer>
</div>


</html>