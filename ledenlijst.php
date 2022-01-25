<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>293N5</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php include 'Partials/navbar.php'; ?>
    <table style="margin: 25px auto">
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Email</th>
            <th>Postcode</th>
            <th>Huisnummer</th>
            <th>Adres</th>
            <th>Woonplaats</th>
        </tr>
        <?php
        require_once 'service/conn.php';
        require_once 'service/prep_statement/select_leden.php';
        $result = $conn->query($query_select_leden);
        ?>

        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['voornaam'] ?></td>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['postcode'] ?></td>
                <td><?php echo $row['huisnummer'] ?></td>
                <td><?php echo $row['adres'] ?></td>
                <td><?php echo $row['woonplaats'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>