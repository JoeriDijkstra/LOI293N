<?php
    if(isset($_POST["submit"])){
        require_once("service/conn.php");
        $postcode = $_POST["postcode"];
        $adres = $_POST["adres"];
        $woonplaats = $_POST["woonplaats"];

        $query = "INSERT IGNORE INTO Postcode VALUES (
            '$postcode',
            '$adres',
            '$woonplaats'
        );";

        $conn->query($query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>293N5</title>
    <link rel="stylesheet" href="css/form_style.css">
</head>

<body>
    <?php include 'Partials/navbar.php'; ?>
    <form method="POST">
        <input type="text" maxlength="" name="postcode" placeholder="Postcode*" required/>
        <input type="text" name="adres" placeholder="Straatnaam*" required/>
        <input type="text" name="woonplaats" placeholder="Woonplaats*" required/>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>