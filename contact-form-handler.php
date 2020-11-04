<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $email_from = 'nikk409@gmail.com';
    $email_subject = "New Form Subbmission";
    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";

    $to = "manjot@mbc.ca";

    $headers = "From: $email_from\r\n";

    $headers .= "Repy-To: $email_from \r\n"

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

    // if (($name=="")||($email=="")||($message==""))
    //     {
    //     echo "All fields are required, please fill <a href=\"\">the form</a> again.";
    //     }
    // else{        
    //     $from="From: $name<$email>\r\nReturn-path: $email";
    //     $subject="Message sent using your contact form";
    //     mail("youremail@yoursite.com", $subject, $message, $from);
    //     echo "Email sent!";
    //     }
    // }  
?>