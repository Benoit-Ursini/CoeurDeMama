<?php
$errors = [];
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$title = ['Vers une naissance physiologique','RDV individuel thématique précise','Masterclass & Formations','Présentiel','Renseignements','Autre'];
$message = $_POST['message'];

if(!array_key_exists('name', $_POST) || $name == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('tel', $_POST) || $tel == '') {
    $errors['tel'] = "Vous n'avez pas renseigné votre tel";
}
if(!array_key_exists('email', $_POST) || $email == '') {
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('object', $_POST) && !isset($title[$_POST['object']])) {
    $errors['object'] = "Vous n'avez pas renseigné d'objet";
}
if(!array_key_exists('message', $_POST) || $message == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: contact.php');
}else{
    $_SESSION['success'] = 1;
    $to = 'sara.coeurdemama@gmail.com';
    $subject = $title[$_POST['object']];
    $headers = "From:".$email."\n";
    $headers .= "MIME-version: 1.0\n";
    $headers .= "Content-type: text/html; charset= iso-8859-1\n";
    $content = "<h2>Message via Coeur de mama:</h2>
    <span style='font-size: 18px;'>Nom:&nbsp;
    <strong>".$_POST['name']."</strong>
    <br>
    Tel:&nbsp;
    <strong>".$_POST['tel']."</strong>
    <br>
    Message:
    <br>
    <strong>".$_POST['message']."</strong></span>";
    mail($to, $subject, $content, $headers);
    header('Location: ../contact.php');
}
?>
