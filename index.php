<?php  
ob_start();

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  $ctime = time();

                            require './PHPMailer/src/Exception.php';
                            require './PHPMailer/src/PHPMailer.php';
                            require './PHPMailer/src/SMTP.php';
                            $email = 'myemail@gmail.com';
                             
                            try { 

                                $mail = new PHPMailer(true);
                                // SMTP Configuration
                                $mail->CharSet = 'UTF-8';
                                $mail->isSMTP();
                                $mail->Host = 'mail.domain.com'; // or any specific email server
                                $mail->SMTPAuth = true;
                                $mail->Username = 'email@domain.com';
                                $mail->Password = 'yourPassword';
                                $mail->SMTPSecure = 'ssl'; // You can also use 'tls' if SSL is not available
                                $mail->Port = 465; // Change to 587 if you're using 'tls'
                            
                                // Sender and Recipient
                                $mail->setFrom('email@domain.com', 'Email test ...');
                                $mail->addAddress($email);
                            
                                // Email content
                                $mail->isHTML(true);
                                $mail->Subject = 'SMTP Auth Email Testing';
                                $mail->Body = 'Email is okay';
                            
                                // Send the email
                                $mail->send();
                                
                               //     $_SESSION['form_submitted'] = true;
                                
                                // Success message
                               echo 'Email sent successfully!';
                            } catch (Exception $e) {
                                // Error message
                              echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
                            }

                            // Create a new PHPMailer instance
                            $mail = new PHPMailer(true);
                            
                       
?>
