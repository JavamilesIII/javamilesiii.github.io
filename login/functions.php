<?php
function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//redirect to login
	//header("Location: /Portfolio/portfolio/login.php");
	//header('Location: ' . $_SERVER['HTTP_REFERER']);
	//header("location:javascript://history.go(-1)");
	header("Location:/login/login.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	die;
}
function random_num($length)
{
	$text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++) {
        $text .= rand(0,9);
    }

    return $text;
}

function check_rank($required_rank) {    
    // Check if user is logged in and has a rank
    if (!isset($_SESSION['rechte'])) {
        // User is not logged in or rank is not set
        return false;
    }

    // Check if the user's rank meets or exceeds the required rank
    if ($_SESSION['rechte'] <= $required_rank) {
        return true;
    } else {
        return false;
    }
}