<?php

$connect = mysqli_connect("localhost", "root", "", "galery");

if (!$connect) 
{
    echo "Error Code: " . mysqli_connect_errno() . "<br>";
    echo "Error Message: " . mysqli_connect_error() . "<br>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style> body 
    {
    background-image: url("Images/Background.jpeg");
    }
    </style>
    <link href="node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Galery.css">
    <link rel="shortcut icon" href="images/ServerLogoTrans.ico">
    <title>Galery</title>
</head>
<body>
    <h2>Galerie</h2>

    <div class="PhotoScreen">
        <?php

            $query = 'SELECT id,Filename
                FROM images
                ORDER BY Filename';

            $result = mysqli_query($connect, $query);

            while ($record = mysqli_fetch_assoc($result))
            {
                echo '
                <a href="UserUploaded/'.$record["Filename"].'" data-lightbox="Boosters" data-title="'.$record["Filename"].'">
                    <img src="UserUploaded/'.$record["Filename"].'" width = auto height = 500pt>
                </a>
                ';
            }
        ?>       
    </div>

    <!-- <a href="Upload.php"><button class="button normalbutton">Upload</button></a> -->

    <script src="node_modules/lightbox2/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>