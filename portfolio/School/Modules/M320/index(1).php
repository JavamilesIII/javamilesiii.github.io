<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M431</title>
    <link rel="stylesheet" href="../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../../../darkmode.js" defer></script>
</head>
<body>
    <?php include "../../../../header.php"; ?>
    <h1>Java Objektorientiertes Programmieren</h1>
    <div class="article-box">
        <h2 class="article-heading">Aufbau</h2>
        <p>
            Java hat eine folgende Struktur zu befolgen.
            Zuerst wird eine Klasse definiert: <br>
        </p>
        <div class="code">
            <pre>public class Example { //Klasse </pre>
            <pre>    //Attribut </pre>
            <pre>    public static void main(String[] args){ //Methode </pre>
            <pre>        //Code </pre>
            <pre>    } </pre>
            <pre>} </pre>
        </div><br>
        <p>
            Die erste Zeile ist die Definition der Klasse. Dort muss der Name der Klasse stehen. <br> <strong>Wichtig!!</strong> Die Klasse muss den gleichen Namen wie der Dateiname haben, inklusive Gross-, Kleinschreiben.
        </p>
        <p>
            Nach der Klasse folgt der Körper der Klasse. In diesem Körper können Objekte, Methoden und Variablen definiert werden. 
        </p>
        <p>
            Die dritte Zeile ist die Definition der Methode. Dort muss der Name der Methode stehen. <br> <strong>Wichtig!!</strong> Um das Programm auszuführen, muss die Methode <br><code class="wrap">public static void main(String[] args)</code> definiert werden.
        </p>
        <br>    
    </div>
    <div class="article-box">
        <h2 class="article-heading">Methoden</h2>
        <p>
            Methoden sind Funktionen, die aufgerufen werden können. Sie können Parameter entgegen nehmen und einen Rückgabewert haben. Zum Beispiel könnte eine Methode die Summe von zwei Zahlen berechnen.
        </p>
        <div class="code">
            <pre>public static void main(String[] args){ </pre>
            <pre>    int zahl1 = 3; </pre>
            <pre>    int zahl2 = 5; </pre>
            <pre>    int summe = zahl1 + zahl2; //Ausgabe 8 </pre>
            <pre>} </pre>
        </div><br>
        <p>
            Es gibt verschiedene Arten von Methoden. Die meisten Methoden sind statische Methoden, die ohne Objekt aufgerufen werden können. Ein Beispiel ist der Code von oben. <br><br>
            Es gibt auch nicht statische Methoden, die nur mit einem Objekt aufgerufen werden können. Ein Beispiel ist die Methode <br><code class="wrap">public void getString(String var)</code> bei der ein "String" übergeben wird. Die Methode wird dann mit <code class="wrap">getString("Hallo Welt");</code> aufgerufen. <br> <br>
            Noch eine Art von Methoden sind Methoden mit einem Rückgabewert. Ein Beispiel ist die Methode <code class="wrap">public int getSum(int zahl1, int zahl2)</code> bei der zwei Zahlen übergeben werden. Die Methode gibt die Summe der beiden Zahlen zurück. <br><br>
            Methoden können auch überladen werden. Das bedeutet, dass mehrere Methoden mit dem gleichen Namen existieren können, wenn sie sich in der Anzahl der Parameter unterscheiden. <br> Beispiel: <code class="wrap">public void methode1(int x)</code> und <code class="wrap">public void methode1(int x, int y)</code>
        </p>
    </div>
    <div class="article-box">
        <h2 class="article-heading"></h2>
    </div>
    <div class="article-box">
        <h2 class="article-heading"></h2>
    </div>
    <div class="article-box">
        <h2 class="article-heading"></h2>
    </div>
    <?php include "../../../../footer.php"; ?>
</body>
</html>