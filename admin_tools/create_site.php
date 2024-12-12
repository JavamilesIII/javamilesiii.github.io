<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $foldername = $_POST['foldername'];
        $title = $_POST['title'];
        $path_folder = "../portfolio/School/Modules/$foldername/article";
        $path_file = "../portfolio/School/Modules/$foldername/article/$title.php";
    
        if (!is_dir($path_folder)) {  // Check if the directory already exists
            if (mkdir($path_folder, 0777, true)) { // Create folder and set permissions
                echo "Folder created successfully.";
            } else {
                echo "Failed to create folder.";
            }
        } else {
            echo "Folder already exists.";
        }
        if(!is_dir($path_file)) {
            if (copy("../portfolio/School/Modules/schema.php", $path_file)) { // Create folder and set permissions
                $file_contents = file_get_contents($path_file);
                $file_contents = str_replace('<?php echo htmlspecialchars($title); ?>', ucfirst("$title"), $file_contents);
                file_put_contents($path_file, $file_contents);

                echo "File created successfully.";
            } else {
                echo "Failed to create file.";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
</head>
<body>
    <form action="" method="POST">
        <input placeholder="Folder Name" class="input-field" name="foldername" type="text">
        <input placeholder="Title" class="input-field" name="title" type="text">
        <input type="">
        <input type="submit">
    </form>
</body>
</html>