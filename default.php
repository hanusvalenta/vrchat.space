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
    <link href="node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6892974490326559"crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Main.css">
    <link rel="shortcut icon" href="Images/ServerLogoTrans.ico">
    <title>Welcome to VR</title>
</head>
<body>
    <div class="All">
        <div class=MainPillar>
            <h1>Největší CZ/SK VR komunita</h1><br>

            <div class="Buttons">
                <a href="https://discord.gg/7nBhzhZaKy"><button class="button bluebutton">Discord</button></a>
                <a href="Socials.php"><button class="button normalbutton">Kde nás najdete</button></a>
                <a href="Galery.php"><button class="button normalbutton">Galerie</button></a>
                <a href="Rules.php"><button class="button normalbutton">Pravidla</button></a>
                <a href="Staff.php"><button class="button normalbutton">Personál</button></a>
            </div>

            <div class="MouseIcon">
                <div class="mouse_scroll">
                    <div class="mouse">
                        <div class="wheel">

                        </div>
                    </div>
                    <div>
                            <span class="m_scroll_arrows One"></span>
                            <span class="m_scroll_arrows Two"></span>
                            <span class="m_scroll_arrows Three"></span>
                    </div>
                </div>
            </div>

            <div class="Chat">
                <widgetbot
                server="795076127961776149"
                channel="795077211560214649"
                
                width="1000"
                height="800"
                ></widgetbot>
                <script src="Scripts/DiscordChat.js"></script>
            </div>

            <div class="Boosters">
                <h2>Zvláštní poděkování boosterům</h2>

                <div class="BSTPFP">
                    <?php

                    $query = 'SELECT id,Filename
                        FROM boosters
                        ORDER BY Filename';

                    $result = mysqli_query($connect, $query);

                    while ($record = mysqli_fetch_assoc($result))
                    {
                        echo '
                        <a href="Images/Boosters/'.$record["Filename"].'" data-lightbox="Boosters" data-title="'.$record["Filename"].'">
                            <img src="Images/Boosters/'.$record["Filename"].'" width = auto height = 500pt>
                        </a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/lightbox2/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>