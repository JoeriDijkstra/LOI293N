<?php
    require_once("service/conn.php");
    $query = "DELETE FROM `lid`";
    $conn->query($query);
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
    <div style="margin: 25px;">
        <h2>All records have been cleared</h2>
    </div>

</body>

</html>