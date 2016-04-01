<?php
header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);
 $name=$_POST['name']; 
$email = $_POST['email'];
$subject = "Contact from Website";
$message = $_POST['message'];
 if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
		die;
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("mail2msitgnosis@gmail.com", $subject, $message, $email);
		echo json_encode($status);
		die;
        } 
    }
?>