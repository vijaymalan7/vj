<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .alert {
      text-align: center;
    }

    .alert button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      /* Apply styles for devices with a maximum width of 600px (typical for mobile devices) */
      .alert button {
        font-size: 20px;
      }
    }
  </style>

 <!--                ========================send message-->
 <?php
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;

                if(isset($_POST['send']))
                {
                    $name=$_POST['name'];
                    // $mob=$_POST['phone'];
                    $email=$_POST['email'];
                    $msg=$_POST['message'];


//Load Composer's autoloader
                    require 'PHPMailer\Exception.php';
                    require 'PHPMailer\SMTP.php';
                    require 'PHPMailer\PHPMailer.php';

//Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
//                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'vijaymalan7@gmail.com';                     //SMTP username
                        $mail->Password   = 'tkkt rhnf oovw rbip';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('vijaymalan7@gmail.com','Contact Form: '.$name);
                        $mail->addAddress('vijaymalan12@gmail.com', 'Vijay Malan');     //Add a recipient


                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Contact MSG from Portfolio';
                        $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br>  Message - $msg";


                        $mail->send();
                        echo "<div class='alert alert-success' role='alert'>Message Sent! <br> Thank You for contacting us, We will back to you soon!</div>";
                        } catch (Exception $e) {
                        echo "<div class='alert'>Message Could not send </div>";
                        }
                }

                ?>
                <div class='alert alert-success' role='alert' ><button><a href="contact.php">OK</a></button></div>

                

<!-- <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

                        $mail->send();
                        echo "<div class='alert alert-success' role='alert'>Message Sent! <br> Thank You for contacting us, We will back to you soon!</div>";
                        } catch (Exception $e) {
                        echo "<div class='alert'>Message Could not send </div>";
                        }


    .alert {
      text-align: center;
    }

    .alert button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style> -->
