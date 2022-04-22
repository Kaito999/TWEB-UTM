<?php session_start();
$_SESSION['signup-errors'] = true;
           
if(count($_POST)) {
    $registerData = file_get_contents('../data/accounts.json');
    $accessData = json_decode($registerData);

    $rEmail=isset($_POST['register-email']) ? $_POST['register-email'] : '';
    $rPassword=isset($_POST['register-password']) ? $_POST['register-password'] : '';
    $rConfirmPassword=isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    foreach($accessData as $value){

        if($value->email == $uname){
            $_SESSION['query_result'] = 'Username already exists!';
            $_SESSION['signup-errors'] = true;
            header("Location: signUP.php");
            break;
        }
    }

    if($rPassword != $rConfirmPassword){
        $_SESSION['query_result'] = 'Passwords don\'t mach!';
        header("Location: signUP.php");
        $_SESSION['signup-errors'] = true;
    }

    $accessData[] = ['email' => $rEmail, 'password' => $rPassword];
    $registerData = json_encode($accessData);
    file_put_contents('../data/accounts.json', $registerData);
    $_SESSION['signup-errors'] = false;
    header("Location: index.php");
}

?>


