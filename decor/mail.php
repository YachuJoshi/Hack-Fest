<?php
    //start the session in this page
    if(session_status() == PHP_SESSION_NONE){session_start();}

    $to = 'dezaenepal@gmail.com';
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $message_content= $_POST["message"];
    
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name: '.$firstname.'  '.$lastname.'</td>
        </tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Message: '.$message_content.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        //echo 'The message has been sent.';
        $_SESSION['message'] = "The message has been sent.";
        header('Location: index.php');
        exit;
    }else{
        //echo'Opps, Looks like something went wrong';
        $_SESSION['message'] = "Opps, Looks like something went wrong";
        header('Location: index.php');
        exit;
    }

?>