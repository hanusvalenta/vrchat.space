<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php if (isset($_GET["error"])): ?>
        <p><?php echo $_GET["error"]; ?></p>
    <?php endif ?>

    <form action="Upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>