<?php
//DATABASE CONNECTION
$host="localhost";
$user="root";
$pass="";
$dbname="todolist";

//CREATE CONNECTION
$conn = new mysqli($host, $user, $pass, $dbname);


$name = "";
$description = "";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST["name"];
  $description = $_POST["description"];

do {
  if (empty($name) || empty ($description)) {
      $errorMessage = "All the fields are required";
      break;
  }

  //ADD NEW TASK TO DATABASE
  $sql="INSERT INTO task(name, description)VALUES('$name', '$description')";

  $result=$conn->query($sql);

  if (!$result) {
      $errorMessage = "Invalid query:" . $conn->error;
      break;
  }

  $name = "";
  $description = "";

  $successMessage = "Task successfully added";

  header("location: /list.php");
  exit;

} while (false);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DiaExpedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
      <h2>New Task</h2>

      <?php
    if(!empty($errorMessage)) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
    }
    ?>

      <form method="post">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
            </div>
        </div>
      

        <?php
    if(!empty($successMessage)) {
        echo "
        <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>$successMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
            </div>
        </div>      
        ";
    }
    ?>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/list.php" role="button">Cancel</a>
            </div>
        </div>
      </form>
    </div>
</body>
</html>