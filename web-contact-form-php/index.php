<?php
    // Default variables and value. 
    $userName = '';
    $userEmail = '';
    $msgType = '';
    $msgContent = '';

    //Load variables value from POST Request if available. 
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //Extracting variables
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $msgType = $_POST["msgType"];
        $msgContent = $_POST["msgContent"];
    }
?>

<! DOCTYPE html>
<html>
    <head>
        <title>Simple Contact Form</title>
        <meta charset="UTF-8">
        <meta name="author" content="Yagya Gaire">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container bg-light">
        <main id="contact">
            <?php include 'includes/header.php' ?>
            <?php include 'includes/contact-form.php' ?>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
