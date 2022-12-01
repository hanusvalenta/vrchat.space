<?php include "DbConn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style> body 
    {
    background-image: url("Images/Background.jpeg");
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Galery.css">
    <link rel="shortcut icon" href="images/ServerLogoTrans.ico">
    <title>Galery</title>
</head>
<body>
    <h2>Galerie</h2>

    <div class="">
        <?php
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) { ?>

                <div>
                    <img src="UserUploaded/<?=$images["ImageURL"]?>">
                </div>

        <?php } }?>
    </div>
</body>
</html>