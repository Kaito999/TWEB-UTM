<?php session_start();
$_SESSION['signup-error'] = true;
$_SESSION['account-error'] = true;

if (count($_POST)) {
    $registerData = file_get_contents('../data/accounts.json');
    $accessData = json_decode($registerData);

    $emailFound = false;

    $rEmail = isset($_POST['register-email']) ? $_POST['register-email'] : '';
    $rPassword = isset($_POST['register-password']) ? $_POST['register-password'] : '';
    $rConfirmPassword = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    if (!empty($_POST['register-email']) && !empty($_POST['register-password']) && !empty($_POST['confirm-password'])) {
        foreach ($accessData as $value) {
            if ($value->email == $rEmail) {
                $emailFound = true;
                break;
            }
        }

        if ($emailFound) {
            header("Location: login.php");
        } else {
            $_SESSION['account-error'] = false;

            if ($rPassword == $rConfirmPassword) {
                $accessData[] = ['email' => $rEmail, 'password' => $rPassword];
                $registerData = json_encode($accessData);
                file_put_contents('../data/accounts.json', $registerData);

                $_SESSION['signup-error'] = false;
                $_SESSION['log-key'] = true;

                header("Location: index.php");
            } else {
                header("Location: login.php");
            }
        }
    }
}
