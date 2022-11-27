<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DiaExpedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon4.ico" />
</head>

<body>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="/indexJournal.php" class="nav-link link-dark px-2">Journal</a></li>
        <li class="nav-item"><a href="/index.php" class="nav-link link-dark px-2">Logout</a></li>
      </ul>
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <svg class="bi me-2" width="40" height="32">
            <span class="fs-4">DiaExpedia - TodoList </span>
        </svg>
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <form name="form" id="form" method="post" action="database.php">

    <!--task-->
    <h2>Task List</h2>
    <a class="btn btn-primary" href="/add.php" role="button">Add Task</a>
  </form>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $host = "localhost";
      $user = "root";
      $pass = "";
      $dbname = "todolist";

      //CREATE CONNECTION
      $conn = new mysqli($host, $user, $pass, $dbname);

      //CHECK CONNECTION
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      //READ ALL ROWS FROM TABLE
      $sql = "SELECT * FROM task";
      $result = $conn->query($sql);

      if (!$result) {
        die("Invalid query: " . $conn->error);
      }

      //READ DATA OF EACH ROW
      while ($row = $result->fetch_assoc()) {
        echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[description]</td>
                        <td>
                            <a class='btn btn-outline-success btn-sm' href='/edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    ";
      }
      ?>

    </tbody>
  </table>
</body>
<div class="container">
  <footer class="py-5 my-5">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
    <p class="text-center text-muted">©2022 Dia Expedia, Inc</p>
  </footer>
</div>

</html>