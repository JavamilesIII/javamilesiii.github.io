<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
    <link rel="stylesheet" href="../../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../../../darkmode.js" defer></script>
</head>
<body>
    <?php include "../../../../../header.php"; ?>
    <h1><a href="#">Projekt</a></h1>
    <div class="article-box">
        <h2>Beschreibung</h2>
        <p>In Zweiergruppen haben wir ein IoT-Projekt erstellt, das mit dem Gerät M5Stack möglich ist. Ich mit meinem Partner haben ein "Kleidungsvorschlagsmesser" gemacht. Dieser misst die Temperatur und die Feuchtigkeit in seiner Umgebung und schlägt uns, je nach Temperatur, was wir anziehen sollen vor.</p>
        <p>Mehr dazu im Projektbeschrieb:</p>
        <a href="../images/Projektbeschrieb.pdf">Projektbeschrieb</a>
    </div>
    <div class="article-box">
        <h2>Der Code und die schematische Darstellung</h2>
        <p>Unser Code ist eher kompliziert dargestellt, ist aber recht einfach. <br>Zuerst verbindet es sich mit dem Internet, dann mit einem "Server", bei dem man mit Adafruit zugreifen kann. <br>Dann kommt unser Code für die Messung der Temperatur und der ständigen Aktualisierung.</p>
        <table>
            <tr>
                <td>
                    <img src="../images/M5Stack_Code.png" class="article-image" alt="">
                </td>
                <td>
                    <img src="../images/Model databases.png" class="article-image" alt="">
                </td>
            </tr>
        </table>
       
    </div>
    <div class="article-box">
        <h2>Bilder/Video</h2>
        <p>Hier sind einige Medien unseres Projektes. Bis jetzt sieht es nicht wirklich anziehend an, wird sich aber verbessern.</p>
        <table>
            <tr>
                <td>
                    <img src="../images/ENVIII-Unit.JPG" class="article-image-p" alt="ENV-III Unit">
                </td>
                <td>
                    <img src="../images/M5Stack-Ports.JPG" class="article-image-p" alt="M5Stacks Ports">
                </td>
                <td>
                    <img src="../images/M5Stack.JPG" class="article-image-p" alt="M5Stack">
                </td>
            </tr>
        </table>
        
        <img src="../images/M5Stack-mit-ENVIII.JPG" class="article-image-p" alt="M5Stack mit ENV-III">
        
        
        <video height="auto" controls="controls" preload="none" onclick="this.play()">
            <source type="video/mp4" src="../images/M5Stack-mit-ENVIII-Video.mov">
        </video>
    </div>
    <div class="article-box">
        <h2>Reflexion</h2>
        <p>Es ist ein spannendes Projekt und möchte gerne weiter an solchen arbeiten, jedoch muss man vieles beachten und es kann manchmal länger dauern bis etwas funktioniert.</p>
    </div>
    <?php include '../../../../../footer.php'; ?>
</body>
</html>