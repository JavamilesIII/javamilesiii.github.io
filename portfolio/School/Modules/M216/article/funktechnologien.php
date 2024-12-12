<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktechnologien</title>
    <link rel="stylesheet" href="../../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../../../darkmode.js" defer></script>
</head>
<body>
<?php include "../../../../../header.php"; ?>
    <h1><a href="#">Funktechnologien</a></h1>

    <div class="article-box">
        <p>Heutzutage werden viele Geräte drahtlos übers Internet gesteuert oder miteinander verbunden, was als „IoT“ (Internet of Things) bekannt ist. Beispiele dafür sind die Anzeige eines freien Parkplatzes auf dem Handy, die Verfolgung des Standorts eines Tiers oder die Steuerung der Heizung im Ferienhaus. Eine zentrale Herausforderung ist, wie man batteriebetriebene Sensoren und Aktoren drahtlos mit dem Internet verbindet, da WLAN oder Bluetooth oft zu geringe Reichweiten haben. <br><br>Bisher wurden Daten solcher IoT-Anwendungen häufig über das bestehende GSM-Mobilfunknetz übertragen, was jedoch Nachteile mit sich bringt: Es ist auf Mobilfunkempfang am Gerätestandort angewiesen, verbraucht viel Energie und ist relativ teuer. Deshalb wurden neue Funktechnologien im Bereich von LPWAN (Low Power Wide Area Network) entwickelt, die eine hohe Funkreichweite, geringen Energieverbrauch und niedrige Kosten bieten. Diese Technologien ermöglichen eine Batterielaufzeit von über 10 Jahren, jedoch auf Kosten einer reduzierten Kommunikationsgeschwindigkeit und erhöhten Übertragungszeit. Bekannte Vertreter der LPWAN-Technologie sind LoRaWAN, Sigfox und NB-IoT, die je nach Anwendung verschiedene Vor- und Nachteile haben.</p>
    </div>
    <div class="article-box">
        <h2>LoRa-LoRaWAN</h2>
        <p><strong>LoRaWAN verwendet die LoRa-Funktechnologie</strong> mit "Chirp Spread Spectrum"-Modulation auf lizenzfreien Sub-GHz-Frequenzen (868 MHz in Europa und 915 MHz in USA). Die bidirektionale Datenübertragung ist täglich uneingeschränkt möglich, jedoch muss der Duty-Cycle die Länder-Richtlinien einhalten. Öffentliche LoRaWAN-Netzwerke werden von lokalen Betreibern (z.B. Swisscom) aufgebaut, private Netzwerke sind ebenfalls möglich. LoRa kann auch für Punkt-zu-Punkt-Verbindungen ohne Netzwerk genutzt werden.</p>
        <ul>
            <li><strong>Standard:</strong> LoRaWAN</li>
            <li><strong>Frequenzen:</strong> verschiedene</li>
            <li><strong>Reichweite:</strong> 2-5 km (Stadt), 15 km (Vorort)</li>
            <li><strong>Datenraten:</strong> 0.3-50 Kbit/s</li>
        </ul>

        <h3>Was ist LoRaWAN?</h3>
        <p>LoRaWAN ist ein Funknetzwerk auf Basis von LoRa, das lizenzfreie ISM-Bänder nutzt und eine Alternative zu Mobilfunknetzen bietet. Es ist ideal für IoT-Anwendungen und M2M-Netzwerke, die geringe Stromverbräuche und lange Batterielaufzeiten benötigen.</p>

        <h3>LoRaWAN und IoT</h3>
        <p>LoRaWAN eignet sich für IoT durch seine geringen Energieanforderungen und lange Batterielaufzeiten, was Geräte für viele Jahre betreiben lässt. Es ist für kleine Datenmengen optimiert und bietet bidirektionale Kommunikation.</p>

        <h3>Funktechnologie LoRa</h3>
        <p>LoRaWAN basiert auf LoRa, welches die Funkverbindung herstellt. LoRaWAN definiert das Kommunikationsprotokoll und die Netzwerkarchitektur.</p>

        <h3>Aufbau und Funktionsweise</h3>
        <p>LoRaWAN bietet sichere, bidirektionale Verbindungen und hohe Mobilität. Sensoren kommunizieren direkt mit Gateways, die die Daten an Netzwerkserver weiterleiten. Die Datenrate und Frequenzkanäle sind dynamisch anpassbar, um Interferenzen zu vermeiden und den Datenfluss zu optimieren.</p>

        <h3>Reichweite</h3>
        <p>LoRaWAN hat eine hohe Reichweite: bis zu 2 km in Städten, bis zu 10 km auf dem Land. Die gute Gebäudedurchdringung und die effiziente "Chirp Spread Spectrum"-Modulation ermöglichen zuverlässige Verbindungen auch in Kellergeschossen.</p>

        <h3>Öffentliche LoRaWAN Netzwerke</h3>
        <p>In der Schweiz baut Swisscom ein landesweites LoRaWAN-Netzwerk auf. In Deutschland sind Digimondo, Minol ZENNER Connect und Netzikon aktive Netzbetreiber. Öffentliche Gemeinschaftsnetze wie The Things Network und Loriot existieren ebenfalls. Unternehmen können eigene LoRaWAN-Netze aufbauen, um unabhängig von grossen Netzanbietern zu sein. Die LoRa Alliance, gegründet 2015, unterstützt die Technologie und hat über 500 Mitgliedsunternehmen.</p>
    </div>
    <div class="article-box">
        <h2>Sigfox</h2>
        <p><strong>Sigfox verwendet eine Ultra-Schmalband-Funktechnologie</strong> mit "Binary Phase Shift Keying"-Modulation und arbeitet auf lizenzfreien Sub-GHz-Frequenzen (868 MHz in Europa und 915 MHz in USA). Die Datenübermittlung ist pro Tag auf 140 Nachrichten mit 12 Byte (Upload) und 4 Nachrichten mit 8 Byte (Download) begrenzt. Das globale Sigfox-Netzwerk wird vom französischen Telekommunikationsunternehmen SIGFOX eigenständig aufgebaut und betrieben. Das Netzwerk ist unabhängig von bestehenden Netzwerken. Ein privates Netzwerk ist nicht möglich. Die maximale Datenrate in Europa beträgt 100 Bit/s.</p>
        <ul>
            <li><strong>Standard:</strong> Sigfox</li>
            <li><strong>Frequenzen:</strong> 868 MHz (Europa), 915 MHz (USA)</li>
            <li><strong>Datenrate:</strong> 100 Bit/s</li>
            <li><strong>Nachrichten pro Tag:</strong> 140 (Upload), 4 (Download)</li>
            <li><strong>Nachrichtengrösse:</strong> 12 Byte (Upload), 8 Byte (Download)</li>
        </ul>
    </div>
    <div class="article-box">
        <h2>Narrowband-IoT</h2>
        <p><strong>NB-IoT verwendet eine Funktechnologie</strong> mit "Quadratur Phase Shift Keying"-Modulation und arbeitet im lizenzierten Funkspektrum der Mobilfunkbetreiber. Die bidirektionale Datenübertragung ist täglich uneingeschränkt möglich. Öffentliche NB-IoT-Netzwerke werden von nationalen Mobilfunkanbietern aufgebaut und betrieben. Für den NB-IoT-Standard muss kein neues Netzwerk errichtet werden, da die vorhandene Mobilfunkinfrastruktur genutzt wird. Ein privates Netzwerk ist nicht möglich. Die maximale Datenrate beträgt 250 kBit/s.</p>
        <p>Wir haben intern verschiedene LPWAN-Technologien analysiert und festgestellt, dass LoRa-Technologie und LoRaWAN unsere Anwendungsbedürfnisse am besten abdecken. Daher haben wir intensiv an der LoRa-Technologie gearbeitet und mit dem Modul "TRX433-70" ein eigenes LoRa-Transceiver-Modul entwickelt. Wir sind bereit für innovative Projekte mit LoRa-Funkanbindungen.</p>
        <ul>
            <li><strong>Standard:</strong> NB-IoT; auch LTE Cat NB1 (3GPP)</li>
            <li><strong>Frequenzen:</strong> LTE-Bänder wie 800/900/1.800/2.600 MHz</li>
            <li><strong>Reichweite:</strong> mehr als 10 km</li>
            <li><strong>Datenraten:</strong> 250 Kbit/s</li>
        </ul>
    </div>
    <div class="article-box">
        <h2>Bluetooth</h2>
        <p>Bluetooth wurde in den 1990er Jahren von der Bluetooth Special Interest Group entwickelt. Dabei handelt es sich um einen Industriestandard gemäss IEEE 802.15.1 für die Datenübertragung via Funk über kurze Distanzen.</p>
        <p>Im IoT-Bereich kommt Bluetooth Smart (oder Bluetooth Low Energy, Bluetooth LE) zum Einsatz. Mit dieser Funktechnik lassen sich Geräte in einer Umgebung von etwa 10 Metern vernetzen. Im Vergleich zum „klassischen“ Bluetooth hat Bluetooth Smart einen deutlich geringeren Stromverbrauch sowie geringere Kosten. Der Kommunikationsbereich soll dabei ähnlich sein.</p>
        <ul>
            <li><strong>Standard:</strong> Bluetooth 4.2</li>
            <li><strong>Frequenzen:</strong> 2.4 Gigahertz (GHz)</li>
            <li><strong>Reichweite:</strong> 50 bis 150 Meter (Bluetooth Smart)</li>
            <li><strong>Datenraten:</strong> 1 Megabit pro Sekunde (Mbit/s; Bluetooth Smart)</li>
        </ul>
    </div>
    <div class="article-box">
        <h2>Zigbee</h2>
        <p>Zigbee ist ein Standard, der auf IEEE 802.15.4 basiert und im Wesentlichen als stromsparender WiFi-Standard bezeichnet werden kann. Die Zigbee Alliance hat zudem eine Universalsprache für das IoT kreiert. Dotdot macht es für smarte Geräte möglich, sicher auf jedem anderen Netzwerk zu arbeiten und sich gegenseitig zu verstehen.</p>
        <ul>
            <li><strong>Standard:</strong> ZigBee 3.0 basierend auf IEEE802.15.4</li>
            <li><strong>Frequenzen:</strong> 2.4 GHz</li>
            <li><strong>Reichweite:</strong> 10 bis 100 Meter</li>
            <li><strong>Datenraten:</strong> 250 Kilobit pro Sekunde (Kbit/s)</li>
        </ul>
    </div>
    <div class="article-box">
        <h2>Z-Wave</h2>
        <p>Z-Wave ist ein drahtloser Kommunikationsstandard, entwickelt von Sigma Designs und der Z-Wave Alliance. Der Standard zeichnet sich durch einen geringen Energieverbrauch und hohe Kommunikationssicherheit aus. Eingesetzt wird Z-Wave vor allem in privaten Häusern und Wohnungen – unter anderem für die drahtlose Steuerung von Heizung, Lüftung, Beleuchtung, Alarm- und Klimaanlagen.</p>
        <ul>
            <li><strong>Standard:</strong> Z-Wave</li>
            <li><strong>Frequenzen:</strong> zwischen 850 und 950 MHz</li>
            <li><strong>Reichweite:</strong> mindestens 40 Meter in geschlossenen Gebäuden; maximal 150 Meter im Freifeld</li>
            <li><strong>Datenraten:</strong> 9,6 bis 100 Kbit/s</li>
        </ul>
    </div>
    <div class="article-box">
        <h1>WiFi</h1>
        <p>WiFi, oft als Synonym für WLAN gebraucht, bezeichnet ein lokales Funknetz. In der Regel umfasst die Bezeichnung den Standard der IEEE-802.11-Familie. Seit einiger Zeit wird versucht, WiFi stromsparend zu machen. Ein erster Erfolg ist IEEE 802.11ah. Dieser Standard arbeitet aber in Sub-GHz-Bändern, die nicht einheitlich sind. Gute Alternativen könnten Low-Power-Implementierungen von Wi-Fi 4 (.11n) und Wi-Fi 5 (.11ac) sein. Sinkt der Energieverbrauch der WiFi-Standards, könnte die Technologie zu einem ernstzunehmenden Konkurrenten von Zigbee oder Thread werden.</p>
        <ul>
            <li><strong>Standard:</strong> Basierend auf IEEE 802.11</li>
            <li><strong>Frequenzen:</strong> 2.4 GHz und 5 GHz</li>
            <li><strong>Reichweite:</strong> etwa 50 Meter</li>
            <li><strong>Datenraten:</strong> in der Regel 150 bis 200 Mbit/s, maximal 600 Mbit/s</li>
        </ul>
    </div>
    <div class="article-box">
        <h1>Mobilfunk</h1>
        <p>Mobilfunk ist ein Sammelbegriff für die Nutzung beweglicher Funkgeräte wie tragbare Geräte (Smartphone, Smart Watch). Weitere Anwendungsgebiete des Mobilfunks sind zum Beispiel mobile Datenerfassung, Funkrufdienste, Telemetrie, See- und Binnenschifffahrtfunkdienste oder Jedermannfunk. Aber: Neuere Funkstandards wie LTE lassen sich auch für IoT-Anwendungen über grosse Distanzen nutzen.</p>
        <p>Via Mobilfunk können grosse Datenpakete transportiert werden. Dafür sind Kosten und Energieverbrauch ebenfalls sehr hoch. In diesem Sinne kann der Mobilfunk im IoT-Bereich eine gute Lösung sein, wenn kleine Informations-Pakete schnell übermittelt werden sollen.</p>
        <ul>
            <li><strong>Standard:</strong> GSM/GPRS/EDGE (2G), UMTS/HSPA/HSPA+ (3G), LTE (4G), 5G</li>
            <li><strong>Frequenzen:</strong> mehrere, darunter 800/900/1800/1900/2100 MHz für 4G</li>
            <li><strong>Reichweite:</strong> 35 Kilometer (GSM), 10 Kilometer (LTE)</li>
            <li><strong>Datenraten:</strong> theoretisch bis zu 500 Mbit/s (LTE); mit 5G sollen die Datenraten im Gigabit-Bereich liegen</li>
        </ul>
    </div>
    <?php include '../../../../../footer.php'; ?>
</body>
</html>