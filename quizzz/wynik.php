<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   include "lacz.php";
$sql = "SELECT * FROM zdobytepunkty;";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['punkty'];
    }
}
mysqli_close($conn);
    ?>
</body>
</html>