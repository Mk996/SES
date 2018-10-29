<?php
if(isset($_POST['email'])) {
 
    $email_from = "contact@sonienergysolution.com";
    $email_to = "altdevangchheda97@gmail.com";
    $email_subject = "A New Visitor";
 
    $name_of_user = $_POST['name_of_user']; 
    $number = $_POST['number']; 
    $visitor_email = $_POST['email']; 
    $message = $_POST['message']; 
 
    
    $email_message = "Form details below.<br><br>";
    $email_message .= "Name: ".$name_of_user."<br>";
    $email_message .= "Number: ".$number."<br>";
    $email_message .= "Visitor: ".$visitor_email."<br>";
    $email_message .= "Message: ".$message."<br>";

    echo $email_message;
    
    mail($email_to,$email_subject,$email_message,"From:".$email_from);
    echo "<script>
            alert('Mail Sent');
            window.location.href='index.html';
          </script>";
}
?>