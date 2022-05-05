<?php session_start();
$_SESSION['signin-errors'] = true;
$_SESSION['log-key'] = false;


if (count($_POST))
{
    $loginData = file_get_contents('../data/accounts.json');
    $accessData = json_decode($loginData);

    $userFound = false;

    $inputEmail = isset($_POST['input-email']) ? $_POST['input-email'] : '';
    $mpassword = isset($_POST['input-password']) ? $_POST['input-password'] : '';
    // var_dump($accessData);
    // exit;


    foreach ($accessData as $value) {
    if ($value->email == $inputEmail && $value->password == $mpassword) {
        $userFound = true;
     }
    }

    if ($userFound) {
        $_SESSION['signin-errors'] = false;
        $_SESSION['log-key'] = true;
        
        header("Location:index.php");
    } else {
        header("Location:login.php");
    }

}
?>
