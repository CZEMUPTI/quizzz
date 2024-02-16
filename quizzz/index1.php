<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <style>
        body {
            background-color: #006400; 
            color: white; 
            font-family: Arial, sans-serif; 
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        .container img {
            max-width: 300px;
            max-height: 300px;
            margin-bottom: 20px;
        }
       
        .button {
            display: inline-block;
            padding: 30px 100px;
            background-color: white; 
            color: #006400; 
            border: 2px solid #006400; 
            border-radius: 5px; 
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .button:hover {
            background-color: black;
            color: white;
        }
      
    </style>
</head>
<body>
<div class="container">
        <img src="unnamed.png" alt="Logo">
        <h1>Witaj w quizie!</h1>
        <form action="nastepna_strona.php" method="GET">
            <button class="button" type="submit">Przejdź</button>
        </form>
    </div>
</body>
</html>
