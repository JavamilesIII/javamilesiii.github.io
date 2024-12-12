<?php
session_start();
include("connection.php");
include("functions.php");


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $full_name = $_POST['full_name'];
    $user_name = trim($_POST['user_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['password_confirm']); // corrected the name here

    if (!empty(trim($user_name)) && !empty(trim($password)) && !empty($full_name) && !empty(trim($email)) && !empty(trim($confirm_password)) && !is_numeric(trim($user_name))) {
        if ($password === $confirm_password) {
            //save to database
            $user_id = random_num(20);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            //$msg = "$full_name tried to Sign up"
            $query = "insert into users (user_id, full_name,user_name, email, password, rechte) values ('$user_id', '$full_name', '$user_name', '$email', '$hash', 5)";
            mysqli_query($con, $query);
            //mail("loicminecraft2.0@outlook.fr","Sign Up", $msg)
            header("Location: login.php");
            die;
            exit();
            
        } else {
            echo "Passwords do not match!";
            header("Location: Signup.php?error=Passwörter stimmen nicht überein!");
            exit(); // Add exit after header redirection
        }
    } else {
        echo "Please enter some valid information!";
        header("Location: Signup.php?error=Bitte geben Sie gültige Informationen ein!");
        exit(); // Add exit after header redirection
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet">
    <title>Registrieren</title>
    <script src="../script.js"></script>
</head>
<body>
    <form method="POST" class="form">
        <h4 id="heading">Registrieren</h4>
        <div class="field">
            <span class="material-symbols-outlined">id_card</span>
            <input 
            autocomplete="off"
            name="full_name"
            placeholder="Ganzer Name"
            class="input-field"
            type="text"
            />
        </div>
        <div class="field">
            <span class="material-symbols-outlined">person</span>
            <input 
            autocomplete="off"
            name="user_name"
            placeholder="Benutzername"
            class="input-field"
            type="text"
            />
        </div>
        <div class="field">
            <span class="material-symbols-outlined">alternate_email</span>
            <input 
            autocomplete="off"
            name="email"
            placeholder="Email"
            class="input-field"
            type="text"
            />
        </div>
        <div class="field">
            <span class="material-symbols-outlined">lock_open</span>
            <input placeholder="Passwort" class="input-field" type="password" name="password">
        </div>
        <div class="field">
            <span class="material-symbols-outlined">lock_open</span>
            <input placeholder="Bestätigungspasswort" class="input-field" type="password" name="password_confirm">
        </div>
        <div id="error-msg"></div>
        <script>
            // JavaScript to display error message if present
            let errorMessage = "<?php echo isset($_GET['error']) ? $_GET['error'] : '' ?>";
            if (errorMessage) {
                document.getElementById('error-msg').innerHTML = errorMessage;
            }
        </script>
        
        <div class="btn1">
            <button name="action" value="login" class="button1">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrieren&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </button>
            <a class="button2" href="login.php">Anmelden</a>
            
        </div>
        
    </form>
</body>
</html>