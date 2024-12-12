<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title> <!-- Dynamic Title -->
    <link rel="stylesheet" href="../../../../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="../../../../../script.js"></script>
</head>
<body>
    <nav>
        <p>Loïc Matthey</p>
        <ul>
            <li><a href="../../../../../index.php">Startseite</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="ddbtn">Schule</a>
                <div class="dd-content">
                    <a href="../../M431/index.php" class="dd-link">M431</a>
                    <a href="../../M216/index.php" class="dd-link">M216</a>
                </div>
            </li>
            <li><a href="../../../../../about.php">Über mich</a></li>
        </ul>
    </nav>
    <h1><?php echo htmlspecialchars($title); ?></h1>
    <div class="article-box">
        <p></p>
    </div>
    
    <footer>
        <?php include '../../../footer.php'; ?>
    </footer>
</body>
</html>