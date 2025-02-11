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
            $mail->Password   = 'tolj mffm jmqj ahso';

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

            $success = 'Message sent successfully!';
            return redirect()->route('coming-soon')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...';
            return redirect()->route('coming-soon')->with('error', $error);
        }
    }

    public function sendContactEmailFromContactForm(Request $request)
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
            $mail->Password   = 'tolj mffm jmqj ahso';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Contact Page';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>'.
            'Phone: ' . $data['phone'].'<br>'.
            'Subject: ' . $data['subject'].'<br>'.
            'Message: ' . $data['message'].'<br>';

            $mail->send();
            $success = 'Message sent successfully!';
            return redirect()->route('contact-us')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...';
            return redirect()->route('contact-us')->with('error', $error);
        }
    }

    public function sendContactEmailFromCareersForm(Request $request)
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
            $mail->Password   = 'tolj mffm jmqj ahso';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');
            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Careers Page';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>'.
            'Phone: ' . $data['phone'].'<br>'.
            'Message: ' . $data['message'].'<br>'.
            'Resume: ';

            $file = $request->file('resume');
            $file_name = md5(time()) . '.' . $file->getClientOriginalExtension();
            $file->move('assets/files', $file_name);
            $file_path = public_path('assets/files/'.$file_name);

            $mail->addAttachment($file_path);

            $mail->send();

            $success = 'Message sent successfully!';
            return redirect()->route('careers')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...';
            return redirect()->route('careers')->with('error', $error);
        }
    }

    public function sendContactEmailGetAnEstimate(Request $request)
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
            $mail->Password   = 'tolj mffm jmqj ahso';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Get An Estimate Form';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>'.
            'Phone: ' . $data['phone'].'<br>'.
            'City: ' . $data['city'].'<br>'.
            'Subject: ' . $data['subject'].'<br>'.
            'Message: ' . $data['message'].'<br>';

            $mail->send();
            $success = 'Message sent successfully!';
            return redirect()->route('home')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...'. $e;
            return redirect()->route('home')->with('error', $error);

        }
    }

    public function sendContactEmailFromInvestmentPage(Request $request)
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
            $mail->Password   = 'tolj mffm jmqj ahso';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Investment Page';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>'.
            'Phone: ' . $data['phone'].'<br>'.
            'Message: ' . $data['message'].'<br>';

            $mail->send();
            $success = 'Message sent successfully!';
            return redirect()->route('investment')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...';
            return redirect()->route('investment')->with('error', $error);
        }
    }

    public function sendContactEmailFromCookiesForm(Request $request)
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
            $mail->Password   = 'tolj mffm jmqj ahso';

            $mail->setFrom('sites@adaptcrew.com', 'Adapt Crew');
            $mail->addAddress('contact@mega-contractors.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Message From Cookies Page';
            $mail->Body    = 
            'Name: ' . $data['name'].'<br>'.
            'Email: ' . $data['email'].'<br>';

            $mail->send();

            $success = 'Message sent successfully!';
            return redirect()->route('cookies')->with('success', $success);

        } catch (Exception $e) {

            $error = 'Error sending this message. Please check and try again...';
            return redirect()->route('coming-soon')->with('error', $error);
        }
    }
}
