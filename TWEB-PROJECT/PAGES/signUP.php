<?php session_start();
$_SESSION['errors'] = true;
           
if(count($_POST)) {
    $registerData = file_get_contents('../data/accounts.json');
    $accessData = json_decode($registerData);

    $rEmail=isset($_POST['register-email']) ? $_POST['register-email'] : '';
    $rPassword=isset($_POST['register-password']) ? $_POST['register-password'] : '';
    $rConfirmPassword=isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    $accessData[] = ['email' => $rEmail, 'password' => $rPassword];
    $registerData = json_encode($accessData);
    file_put_contents('../data/accounts.json', $registerData);
    $_SESSION['errors'] = false;
    header("Location: index.php");
}

?>


