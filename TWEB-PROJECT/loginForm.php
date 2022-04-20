<?php session_start();
$_SESSION['errors'] = true;

// Handle Post
if (count($_POST))
{
    // Parse login.txt
    $loginData = file('input.txt');
    $accessData = array();
    foreach ($loginData as $line) {
        list($username, $password) = explode(',', $line);
        $accessData[trim($username)] = trim($password);
    }

    // Parse form input
    $inputEmail = isset($_POST['input-email']) ? $_POST['input-email'] : '';
    $mpassword = isset($_POST['input-password']) ? $_POST['input-password'] : '';

    // Check input versus login.txt data
    if (array_key_exists($inputEmail, $accessData) && $mpassword == $accessData[$inputEmail]) {
        $_SESSION['errors'] = false;
        require('index.php');
    } else {
        header("Location:login.php");
    }
}

?>