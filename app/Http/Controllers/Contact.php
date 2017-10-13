<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Modell;

class Contact extends Controller
{
    function showContactForm(){
        $modell = Modell::all();
        return view('guest.contact')->with(compact('modell'));
    }

    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');
        $nomer = $request->input('nomer');
        $polisi = $request->input('polisi');
        $model = $request->input('model');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.mailgun.org';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'postmaster@sandbox94f28571fd2f4d27874b7051322204dc.mailgun.org';                 // SMTP username
            $mail->Password = 'b03449288e5009f1abf9f019f3dffc79';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('ichwanarif26@gmail.com', 'iChwan');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "Nama      : ".$name.
            "<br> E-mail                : ".$emailAddress.
            "<br> No.Polisi             : ".$polisi.
            "<br> Model Mobil           : ".$model.
            "<br> Nomer Thelepone       : ". $nomer .
            "<br> Keluhan Kendaraan     : ". $message;

            $mail->AltBody = $message .$nomer;
 

            $mail->send();


            $modell = Modell::all();
            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('guest.contact')->with(compact('modell'));

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}