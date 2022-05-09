<?php session_start();
$_SESSION['contact-errors'] = true;

if (count($_POST)) {
    $registerData = file_get_contents('../data/feedback.json');
    $accessData = json_decode($registerData);

    $name = isset($_POST['contact-name']) ? $_POST['contact-name'] : '';
    $email = isset($_POST['contact-email']) ? $_POST['contact-email'] : '';
    $message = isset($_POST['contact-message']) ? $_POST['contact-message'] : '';

    if (!empty($_POST['contact-name']) && !empty(($_POST['contact-email']) && !empty($_POST['contact-message']))) {
        $_SESSION['contact-errors'] = false;

        $accessData[] = ['name' => $name, 'email' => $email, 'message' => $message];
        $registerData = json_encode($accessData);
        file_put_contents('../data/feedback.json', $registerData);

        header("Location: index.php");
    }
}
