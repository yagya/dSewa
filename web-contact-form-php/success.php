<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form - <?php echo ucfirst(basename(__FILE__, '.php')); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <?php include 'includes/header.php'; ?>    
    <div class="container mt-2 text-center d-flex justify-content-center">
        <button type="submit" id="return-home" class="btn col-sm-6 btn-outline-secondary">Return to home</button>
    </div>
    <script src="js/success.js"></script>
    </div>
    
</body>
</html>
