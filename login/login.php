<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = trim($_POST['user_name']);
	$password = trim($_POST['password']);

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{
		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);
		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if(password_verify($password, $user_data['password']))
				{
					$_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['rechte'] = $user_data['rechte'];
					//header("Location: index.php");
                    //header('Location: ' . $_SERVER['HTTP_REFERER']);
                    /* if (isset($_SESSION['previous_url'])){
                        $redirect_url = $_SESSION['previous_url'];
                        unset($_SESSION['previous_url']);
                        header("Location: $redirect_url");
                    }
                    else {
                        header("Location: index.php");
                    } */
                    header("Location: index.php");
					die;
				}
			}
		}
		//echo "Wrong username or password!";	
		header("Location: login.php?error=Falscher Benutzername oder Passwort!");	
	}else{
		//echo "Please enter some valid information!";
		header("Location: login.php?error=Bitte geben Sie gültige Informationen ein!");
	}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet">
    <title>Anmelden</title>
    <script type="text/javascript" src="../darkmode.js" defer></script>
</head>
<body>
    <form method="POST" class="form">
        <h4 id="heading">Anmelden</h4>
        
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
            <span class="material-symbols-outlined">lock_open</span>
            <input placeholder="Passwort" class="input-field" type="password" name="password">
        </div>
        <div id="error-msg"></div>
        <script>
            // JavaScript to display error message if present
            let errorMessage = "<?php echo isset($_GET['error']) ? $_GET['error'] : '' ?>";
            if (errorMessage) {
                document.getElementById('error-msg').innerHTML = errorMessage;
            }
        </script>
        <div class="btn">
			<button name="action" value="login" class="button1"><a>Anmelden</a></button>
			<a class="button2" href="Signup.php">Registrieren</a>
            <!--<button name="action" value="signup" class="button2">Sign Up</button>-->
        </div>
        <a class="button3" href="#">Passwort vergessen</a>
    </form>
</body>
</html>