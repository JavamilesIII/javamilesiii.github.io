<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 320 – Theorie der OOP</title>
    <link rel="stylesheet" href="../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../../darkmode.js" defer></script>
</head>
<body>
    <?php include "../../../../header.php"; ?>
    <h1>Modul 320 – Theorie der Objektorientierten Programmierung</h1>

    <div class="article-box">
        <h2 class="article-heading">Array und ArrayList</h2>
        <p><strong>Array:</strong> Ein statisches Datenfeld für Elemente desselben Typs.</p>
        <div class="code">
            <pre>int[] zahlen = {1, 2, 3};</pre>
            <pre>System.out.println(zahlen[0]); // Ausgabe: 1</pre>
        </div>
        <p><strong>ArrayList:</strong> Eine dynamische Liste in Java.</p>
        <div class="code">
            <pre>ArrayList<String> namen = new ArrayList<>();</pre>
            <pre>namen.add("Alice");</pre>
            <pre>System.out.println(namen.get(0)); // Ausgabe: Alice</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Dictionary</h2>
        <p><strong>Dictionary:</strong> Speichert Schlüssel-Wert-Paare.</p>
        <div class="code">
            <pre>HashMap<Integer, String> map = new HashMap<>();</pre>
            <pre>map.put(1, "Eins");</pre>
            <pre>System.out.println(map.get(1)); // Ausgabe: Eins</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Klassen, Attribute und Methoden</h2>
        <p>Eine Klasse definiert Attribute und Methoden.</p>
        <div class="code">
            <pre>class Fahrzeug {</pre>
            <pre>    String marke = "BMW";</pre>
            <pre>    void fahren() {</pre>
            <pre>        System.out.println("Das Fahrzeug fährt.");</pre>
            <pre>    }</pre>
            <pre>}</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Objekt und Instanz</h2>
        <p><strong>Objekt:</strong> Instanziierung einer Klasse.</p>
        <div class="code">
            <pre>Fahrzeug auto = new Fahrzeug();</pre>
            <pre>System.out.println(auto.marke); // Ausgabe: BMW</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Konstruktoren</h2>
        <p><strong>Konstruktoren</strong> initialisieren Objekte.</p>
        <div class="code">
            <pre>class Fahrzeug {</pre>
            <pre>    Fahrzeug(String marke) {</pre>
            <pre>        this.marke = marke;</pre>
            <pre>    }</pre>
            <pre>}</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Signatur und Zugriff-Modifikatoren</h2>
        <p><strong>Signatur:</strong> Name, Parameter und Rückgabewert einer Methode.</p>
        <p><strong>Zugriffsmodifikatoren:</strong> Kontrollieren den Zugriff auf Variablen und Methoden (public, private, protected).</p>
        <div class="code">
            <pre>private String marke;</pre>
            <pre>public String getMarke() {</pre>
            <pre>    return marke;</pre>
            <pre>}</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Kapselung und Vererbung</h2>
        <p><strong>Kapselung:</strong> Zugriff auf Attribute nur über Methoden. Oft mit Getter und Setter.</p>
        <p><strong>Vererbung:</strong> Eine Klasse kann von einer anderen erben. Es kriegt die Attribute und Methoden der Klasse.</p>
        <div class="code">
            <pre>class Auto extends Fahrzeug {</pre>
            <pre>    int sitze = 4;</pre>
            <pre>}</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Interface und Ausnahmebehandlung</h2>
        <p><strong>Interface:</strong> Definiert Methoden, die implementiert werden müssen.</p>
        <div class="code">
            <pre>interface Fahrbar {</pre>
            <pre>    void starten();</pre>
            <pre>}</pre>
        </div>
        <p><strong>Exceptions:</strong> Fehlerbehandlung mit try-catch.</p>
        <div class="code">
            <pre>try {</pre>
            <pre>    int result = 10 / 0;</pre>
            <pre>} catch (ArithmeticException e) {</pre>
            <pre>    System.out.println("Fehler!");</pre>
            <pre>}</pre>
        </div>
    </div>

    <div class="article-box">
        <h2 class="article-heading">Javadoc, JUnit und Debugger</h2>
        <p><strong>Javadoc:</strong> Tool zur Generierung von Dokumentation.</p>
        <p><strong>JUnit:</strong> Framework für Unit-Tests.</p>
        <div class="code">
            <pre>@Test</pre>
            <pre>public void testFahren() {</pre>
            <pre>    Fahrzeug f = new Fahrzeug("BMW");</pre>
            <pre>    assertEquals("BMW", f.getMarke());</pre>
            <pre>}</pre>
        </div>
        <p><strong>Debugger:</strong> Werkzeug zur Fehlersuche.</p>
    </div>

    <?php include "../../../../footer.php"; ?>
</body>
</html>
