<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MQTT</title>
    <link rel="stylesheet" href="../../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../../../darkmode.js" defer></script>
</head>
<body>
    <?php include "../../../../../header.php"; ?>
        <h1><a href="#">MQTT</a></h1>
    <div class="article-box">
        <h2>Definition</h2>
        <p>MQTT heisst voll ausgesprochen Message Queuing Telemetry Transport. Es ist ein Netzwerkprotokoll für Machine-to-Machine-Kommunikation (M2M), das die Übertragung von Telemetriedaten in Form von Nachrichten zwischen Geräten ermöglicht, trotz hoher Verzögerungen oder beschränkter Netzwerke. <br>In anderen Worten heisst es, dass MQTT die Verbindung zwischen Geräten in einem IoT System ermöglicht. Zu den Geräte gehören Sensore, Aktoren, Mobiltelefone, Systemen in Fahrzeugen, Laptops oder sogar voll entwickelte Computer.</p>
    </div>
    <div class="article-box">
        <br>
        <img src="../images/mqtt.jpg" class="article-image" alt="">
        
        <p>Auf diesem Bild sieht man, wie MQTT funktioniert: <br><br>Zuerst wird irgendetwas vom Sensor aufgenommen, in diesem Beispiel die Temperatur. <br><br>Danach wird die Ausgabe des Sensors an einem Server geschickt, dem MQTT-Broker. <br><br>Zuletzt muss man sich mit z.B. einem Laptop auf dem Server anmelden und dann kriegt man den gemessenen Wert des Sensors.</p>
        <br>
    </div>
    <?php include '../../../../../footer.php'; ?>
</body>
</html>