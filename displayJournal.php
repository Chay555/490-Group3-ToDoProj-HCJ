<?php
$sql = "SELECT * FROM journals;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row['journal_entry']
. "
<hr><br> ";
}
}
?>