<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <style>
        h1{
            font-family: "Protest Strike", sans-serif;
            font-weight: 100;
            padding: 10px;
            margin-bottom: 20px;
            text-align:center;
        }
        .card{
            font-family: "Protest Strike", sans-serif;
            font-weight: 100;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            text-align:center;
        }
        form button{
            width: 60%;
            text-align: center;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #99ff33;
            border-radius: 15px;
        }
        .message {
    color: #ff0000;
    font-size: 24px;
    font-weight: bold;
  }
    </style>
</head>
<body onload="startCountdown()">
<h1>Witaj na quizie!</h1>
<div id="clock">
        
    </div>

    <script>
    function startCountdown() {
        var timeLeft = 600;
        var clockDiv = document.getElementById('clock');
        
        var countdown = setInterval(function() {
            var minutes = Math.floor(timeLeft / 60);
            var seconds = timeLeft % 60;

            var displayText = "Pozostały czas: ";
            if (minutes < 10) displayText += "0";
            displayText += minutes + ":";
            if (seconds < 10) displayText += "0";
            displayText += seconds + " minut";

            clockDiv.innerHTML = displayText;

            if (timeLeft <= 0) {
                clearInterval(countdown);
                window.location.href = 'wynik.php';
            } else {
                timeLeft--;
            }
        }, 1000);
    }
</script>

<?php
   include 'lacz.php';
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if(isset($_POST['selected_option']) && isset($_POST['correct_answer'])){
    $selected_option = $_POST['selected_option'];
    $correct_answer = $_POST['correct_answer'];
    $result_text = ($selected_option == $correct_answer) ? true : false;
    $id_pytania = $_POST['id_pytania'];
    if ($result_text) {
        $sql ="UPDATE `zdobytepunkty` SET `punkty` = `punkty` + 1;";
        mysqli_query($conn, $sql);
        $sql = "DELETE FROM pytania WHERE id = $id_pytania";
       mysqli_query($conn, $sql);
    }
     else{
        $sql = "DELETE FROM pytania WHERE id = $id_pytania";
       mysqli_query($conn, $sql);
    }
   
}

$sql = "SELECT * FROM pytania;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_assoc($result)) {
       
        ?>
        <div class='card'>
            <h2><?php echo $row["pytanie"]; ?></h2>
            <form action='' method='post'>
                <input type='hidden' name='correct_answer' value='<?php echo $row["dobraodpowiedz"]; ?>'>
                <input type='hidden' name='id_pytania' value='<?php echo $row["id"]; ?>'>
                <button type='submit' name='selected_option' value='1'><?php echo $row["odpowiedz1"]; ?></button>
                <button type='submit' name='selected_option' value='2'><?php echo $row["odpowiedz2"]; ?></button>
                <button type='submit' name='selected_option' value='3'><?php echo $row["odpowiedz3"]; ?></button>
                <button type='submit' name='selected_option' value='4'><?php echo $row["odpowiedz4"]; ?></button>
            </form>
        </div>
        <?php

    }
}
mysqli_close($conn);
?>
<form action="wynik.php" method="post">
   <center>
   <button type="submit">pokaż wyniki</button>
   </center>
</form>
</body>
</html>