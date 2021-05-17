<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room database</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="logo">
        <img src="img/hotel-logo.png" alt="hotel-logo">
    </div>
    <div class="container">
        <?php

        require_once "data.php";
        $conn = getConnection();
        $sql = getStanze();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->bind_result($id, $room_number);
        while ($stmt->fetch()) {

            echo '<a href="stanze.php?id=' . $id . '">' . $room_number . '</a>' . '<br>';
        }

        closeConnection($conn, $stmt);

        ?>

    </div>

</html>