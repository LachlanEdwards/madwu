<?php
function sendMail() {
    if(isset($_POST["sender"])) {
        $error = null;
        $sender = htmlspecialchars($_POST["sender"]);
        if (strlen($sender) > 50) {;
            $error = "Invalid: Sender input too large. Limit to 50 characters.";
        };

        $subject = htmlspecialchars($_POST["subject"]);
        if (strlen($subject) > 50) {
            $error = "Invalid: Subject input too large. Limit to 50 characters.";
        };

        $email = htmlspecialchars($_POST["e-mail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error = "Invalid: E-Mail field doesn't meet validation standards."; 
        };

        $phone = htmlspecialchars($_POST["phone"]);
        if (strlen($subject) > 50) {
            $error = "Invalid: Phone input too large. Limit to 50 characters.";
        };

        $body = htmlspecialchars($_POST["body"]);
        if (strlen($subject) > 500) {
            $error = "Invalid: Body input too large. Limit to 500 characters.";
        };

        $message = "<style>body{margin: 0; padding: 0;}.container{font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; background-color: #EEE; padding: 16.67%; height: 100vh;}.title{text-transform: uppercase; text-align: center; margin: 1em; font-weight: 700; font-size: 12px;}.content{background-color: #FFF; padding: 1em; border-radius: 3px;}.content span{text-transform: uppercase; font-weight: 700;}.reply{margin-top: 1em; margin-left: 0 auto; margin-right: 0 auto;}.reply a{display: inline-block; background-color: #0078D7; padding: 1em 2em; border-radius: 3px; color: white; text-decoration: none;}</style><div class=\"container\"> <div class=\"title\">Incoming Message from website</div><div class=\"content\"> <p><span>From: </span>$sender</p><p><span>Subject: </span>$subject</p><p><span>Phone: </span>$phone</p><p><span>E-Mail: </span>$email</p><p>$body</p><div class=\"reply\"> <a type=\"button\" href=\"mailto:$email?Subject=RE:$subject\">Reply</a> </div></div></div>";
        $headers  = "From: $sender < $email >\n";
        $headers .= "Cc: Madame Wu < website_email@madamewu.com.au >\n"; 
        $headers .= "X-Sender: $sender < $email >\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "X-Priority: 1\n";
        $headers .= "Return-Path: $email\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
        if ($error === null) {
            mail("au_edwardsl@outlook.com", $subject, $message, $headers);
            echo "<div class=\"success\">Success. We'll try to reply within twelve hours.</div>";
        } else {
            echo "<div class=\"error\">$error</div>";
        }
    }

};
sendMail();
?>
