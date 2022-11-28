<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "todolist";

//CREATE CONNECTION
$conn = new mysqli($host, $user, $pass, $dbname);


$id = "";
$journalEntry = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method - show task data
    if (!isset($_GET["id"])) {
        header("location: /indexJournal.php");
        exit;
    }

    $id = $_GET["id"];

    //READ selected ROW FROM TABLE
    $sql = "SELECT * FROM journals WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /indexJournal.php");
        exit;
    }

    $journalEntry = $row["journal_entry"];

} else {

    //POST method - update task data

    $id = $_POST["id"];
    $journalEntry = $_POST["journal_entry"];

    do {
        if (empty($id) || empty($journalEntry)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE journals " .
            "SET journal_Entry = '$journalEntry'" .
            "WHERE id = $id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query:" . $conn->error;
            break;
        }

        $successMessage = "Task successfully updated";

        header("location: /indexJournal.php");
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
    <link rel="shortcut icon" href="favicon4.ico"/>
</head>

<body>
    <div class="container my-5">
        <h2>Edit Journal</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-7">
                <label class="col-sm-3 col-form-label">Requested Entry</label>
                <div class="col-sm-7">
                    <textarea rows="7" maxlength="250" minlength="0" class="form-control" name="journal_entry"><?php echo $journalEntry;?></textarea>
                    <p></p>
                </div>
            </div>


            <?php
            if (!empty($successMessage)) {
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
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/indexJournal.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>