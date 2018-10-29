<?php
if(isset($_POST['email'])) {
 
    $email_from = "contact@sonienergysolution.com";
    $email_to = "sonienergysolution@gmail.com";
    $email_subject = "A New Visitor";
 
    $name_of_user = $_POST['name_of_user']; 
    $number = $_POST['number']; 
    $visitor_email = $_POST['email']; 
    $message = $_POST['message']; 
 
    
    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".$name_of_user."\n";
    $email_message .= "Number: ".$number."\n";
    $email_message .= "Visitor: ".$visitor_email."\n";
    $email_message .= "Message: ".$message."\n";

    //echo $email_message;
    
    mail($email_to,$email_subject,$email_message,"From:".$email_from);
    echo "<script>
            alert('Mail Sent');
            window.location.href='index.html';
          </script>";
}
?>