<?php session_start();
$_SESSION['errors'] = true;
           
if(count($_POST)) {
    $registerData = file_get_contents('../data/feedback.json');
    $accessData = json_decode($registerData);

    $name=isset($_POST['contact-name']) ? $_POST['contact-name'] : '';
    $email=isset($_POST['contact-email']) ? $_POST['contact-email'] : '';
    $message=isset($_POST['contact-message']) ? $_POST['contact-message'] : '';

    $accessData[] = ['name' => $name, 'email' => $email, 'message' => $message];
    $registerData = json_encode($accessData);
    file_put_contents('../data/feedback.json', $registerData);
    $_SESSION['errors'] = false;
    header("Location: index.php");
}

?>


