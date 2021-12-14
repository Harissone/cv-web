<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../composer/phpmailer/vendor/autoload.php';

    require '../composer/dompdf/vendor/autoload.php';
    use Dompdf\Dompdf;

    ob_start();
    include( "../index.php" );
    $content = ob_get_contents();
    ob_clean();     

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $test = $dompdf->loadHtml($content);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    //$dompdf->set_base_path('../assets/css/style.css');
    $test = $dompdf->output();

    if (isset($_POST['sendBtn'])) {

        $mail = new PHPMailer(true);

        try {
            
            $mail->SMTPDebug = 1;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'harissonefares4@gmail.com';                     
            $mail->Password   = 'a22052000harissonefares...';                               
            $mail->SMTPSecure = 'tls';            
            $mail->Port       = 25;                                    

            //Recipients
            $mail->setFrom('harissonefares4@gmail.com', 'Nkayoum');
            $mail->addAddress($_POST['send'], 'Mr Essono Junior');     
            //$mail->addAddress('ellen@example.com');               
            //$mail->addReplyTo('harissonefares4@gmail.com', 'Information');
            //$mail->addCC('harissonefares4@gmail.com');
            //$mail->addBCC('harissonefares4@gmail.com');

            //Attachments
            $mail->addStringAttachment($test, 'cvnkayoum.pdf');                 

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'CV de Nkayoum au format PDF';
            $mail->Body    = 'Envoie du cv au format PDF !';
            $mail->AltBody = 'Send with PHPMailer';

            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );
            $mail->send();
            echo 'L\'email à été envoyer !';
        } catch (Exception $e) {
            echo "L'email n'a pas pu etre envoyer . Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>

<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../assets/css/style.css" rel="stylesheet"> 
            <title>Send mail - CVONLINE</title>
        </head>
        <body>
            <center>
            <form method="post" role="form" enctype="multipart/form-data" >
                <!-- sujet de l\'email-->
                <div class="card-body">
                <p>Envoie du CV au format PDF !</p>
                    <!-- <div class="card-objet">
                        <label for="objet">Objet</label>
                        <input type="text" id="objet" name="objet" placeholder="Ajoutez un sujet">
                    </div>-->
                    <div class="card-objet">
                        <label for="sendto">Email destinataire</label>
                        <input type="text" id="send" name="send" placeholder="Inserez l'email du destinataire">
                    </div>
                    
                    <!--<div class="card-objet">
                        <label class="fichier" for="filebutton">Fichier à envoyer</label>
                        <input name="file" class="input-file" type="file">          
                    </div>-->
                    <!-- <div class="card-objet">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" name="message" placeholder="Souhaitez-vous inserer un message ?"></textarea>
                    </div>-->
                    <center>
                        <button class="btn-send" name="sendBtn" type="submit">Envoyer</button>
                    </center>
                </div>
            </form>
            </center>
        </body>
        </html>
