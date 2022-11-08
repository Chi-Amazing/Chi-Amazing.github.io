<?php
    $name =$_post['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST ['massage'];

    $email_form = 'chinazor.bello@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                         "User Message: $message.\n";

    $to = "saviour.imode@gmail.com";

    $headers = "From: $email_from \r\n";


    $headers = "From: $email_from \r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: index.html");
    ?>