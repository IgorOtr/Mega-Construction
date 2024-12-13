<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class MailController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $data =  $request->all();

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sites@adaptcrew.com';
            $mail->Password   = 'lqll hapi nxef nxrh';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Coming Soon Page';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>'.
            'Phone: ' . $data['phone'].'<br>'.
            'City: ' . $data['city'].'<br>'.
            'State: ' . $data['state'].'<br>'.
            'Message: ' . $data['message'].'<br>';

            $mail->send();
            echo 'Mensagem enviada com sucesso.';

        } catch (Exception $e) {

            echo "A mensagem não pôde ser enviada. Erro do PHPMailer: {$mail->ErrorInfo}";
        }
    }
}
