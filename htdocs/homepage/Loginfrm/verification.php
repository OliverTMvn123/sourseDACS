<?php
            $Email= $_COOKIE['Email'];
            $Maxacthuc = rand(100000,999999);
            include  "../../phpmail/PHPMailer/src/PHPMailer.php";
            include     "../../phpmail/PHPMailer/src/Exception.php";
            include     "../../phpmail/PHPMailer/src/OAuthTokenProvider.php";
            include  "../../phpmail/PHPMailer/src/OAuth.php";
            include  "../../phpmail/PHPMailer/src/POP3.php";
            include  "../../phpmail/PHPMailer/src/SMTP.php";
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            $mail = new PHPMailer(true);  
            try {
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'dragonhatgame@gmail.com';                 // SMTP username
                $mail->Password = 'fyasslwhavoytxwn';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
            
                //Recipients
                $mail->setFrom('dragonhatgame@gmail.com', 'Mailer');
                $mail->addAddress($Email, 'User');     // Add a recipient
                
            
                //Attachments

                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                //Content

                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'VERIFICATION DACS';
                $mail->Body    = 'MAIL ĐƯỢC GỬI BỞI FUNCTION MAILVERIFICATION DACS . 
                If you see this email please message me! bro :D '.$Maxacthuc;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent for YOURMAIL pls check this!!!';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

?>