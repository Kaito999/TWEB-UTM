<?php session_start();
$_SESSION['signin-errors'] = true;

if (count($_POST))
{
    $loginData = file_get_contents('../data/accounts.json');
    $accessData = json_decode($loginData);

    $inputEmail = isset($_POST['input-email']) ? $_POST['input-email'] : '';
    $mpassword = isset($_POST['input-password']) ? $_POST['input-password'] : '';

    foreach ($accessData as $value) {
        if ($value->email == $inputEmail && $value->password == $mpassword) {
            $_SESSION['signin-errors'] = false;
            header("Location:index.php");
        } else {
            header("Location:login.php");
        }
    }
}
?>
