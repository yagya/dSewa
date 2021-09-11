<?php 
    //Import Configuration File
    require_once('config/config.php');
    echo "Processing...";
    //LISTEN for POST Request
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //Extracting variables
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $msgType = $_POST["msgType"];
        $msgContent = $_POST["msgContent"];

        //Query to insert data into table
    
        //Prepare a prepared statement
        $sql = "INSERT INTO web_contact_form (userName, userEmail, msgType, msgContent) values (?,?,?,?);";
        $pStmt = $conn->prepare($sql) or die ("Failed to prepare the statement!" . htmlspecialchars($conn->error));
        $msgContent = trim($msgContent);
        $pStmt->bind_param("ssis", $userName, $userEmail, $msgType, $msgContent) or die ("bind_param() failed: ".htmlspecialchars($conn->error));

        //Try to execute the query
        if ($pStmt->execute()) {
            header("Location: success.php", true, 303);
        } else {
            die ("execute() failed: " .htmlspecialchars($conn->error));
        } 
       
        $pStmt->close();
        
    }

?>