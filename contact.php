<?php
            if($_GET['var']=='err'){
                echo "<div id='myModal' class='modal fade' role='dialog'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
                echo "<div class='modal-header'>";
                echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
                echo "<h4 class='modal-titlel>Modal Header</h4>";
                echo "</div>";
                echo "<div class='modal-body'>";
                echo "<p>Message not sent! Please try again!</p>";
                echo "</div>";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
                $name=$_POST['name']; 
                $email = $_POST['email'];
                $subject = "Contact from Website";
                $message = $_POST['message'];
                if(($name=="")||($email=="")||($message=="")){ 
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                } 
                else{         
                    $from="From: $name<$email>\r\nReturn-path: $email"; 
                    $subject="Message sent using your contact form"; 
                    mail("mail2msitgnosis@gmail.com", $subject, $message, $email);
                    header("Location: index.php#contact?var=err");
                }
            }
?>