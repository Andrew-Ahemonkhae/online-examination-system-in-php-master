<?php
//include required phpmailer files
    require'phpmailer/src/PHPMailer.php';
    require'phpmailer/src/SMTP.php';
    require'phpmailer/src/Exception.php';
//define name spaces.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer

    $email = stripslashes( $_POST['email']);
    $password = stripslashes( $_POST['password']);


    if(isset($_POST['send']))
    {
    $mail = new PHPMailer(true);
//set mailer to use SMTP
    $mail->isSMTP();
//define SMTP host i.e. that is your domain name.
    $mail->Host = "ahemonkhaeandrew.com.ng";
//enable SMTP authentication
    $mail->SMTPAuth = false;
//set type of encryption
    $mail->SMTPSecure = "tls";
//set port to connect SMTP
    $mail->Port = "587";
//setgmailusername
    $mail->Username = "andrew@ahemonkhaeandrew.com.ng";

    $mail->isHTML(true);

//setgmailpassword  
    $mail->Password = ")?hJtmW?c8Qy";
//set email subject
    $mail->Subject = "Your Online Examination Login Details.";
//set email sender
    $mail->setFrom('andrew@ahemonkhaeandrew.com.ng');

     //THESE ALLOWS THE EMAIL TO APPEAR IN HTML WITH STYLING FORMAT
     $mail->Headers = array(
        "MIME-Version" => "1.0",
        "Content-Type" => "text/html;charset=UTF-8"
    );

//email body
    $mail->Body = file_get_contents("emailmsg.php");

 // THIS IS TO GET THE INFORMATION WE WANT TO CHANGE ON THE MESSAGE PAGE AND SWAP THEM WITH THE ONES WE HAVE
 $swap_var = array(
    "{username}" => "$email",
    "{password}" => "$password"
);

foreach(array_keys($swap_var) as $key){
    if (strlen($key) > 2 && trim($key) != ""){
        $mail->Body = str_replace($key, $swap_var[$key], $mail->Body);
    }
}

    
//add receipient
    $mail->addAddress($email);
//finally send the email
    if( $mail->send() ) {
        echo
        "
            <script>
            alert('Email Identification has been sent!');
            </script>
        ";
    }
    }
//close the SMTP connection
   // $mail->smtpClose();






?>