<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "galery";
 
$conn = mysqli_connect($servername,
    $username, $password, $dbname);

if (isset($_POST["upload"])) {

    $query = "INSERT INTO images VALUES('', 'filename')";

    $res = mysqli_query($conn, $query);

    if ($res) {
        move_uploaded_file($filename, $UserUploaded);
    }
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Upload.css">
    <link rel="shortcut icon" href="images/ServerLogoTrans.ico">
    <title>Upload</title>
</head>
<body>
    <form method="post">
        <input type="file" name="file">
        <input type="submit" name="upload" value="Nahrát">
    </form>
</body>
</html>