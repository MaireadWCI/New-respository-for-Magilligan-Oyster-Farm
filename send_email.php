<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $company_name = $_POST['company-name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact-number'];
    $message = $_POST['message'];

    $to = "foylestarmoville@gmail.com";
    $subject = "New Enquiry from Magilligan Oyster Farm Website";
    $body = "Name: $name\n";
    $body .= "Company Name: $company_name\n";
    $body .= "Email: $email\n";
    $body .= "Contact Number: $contact_number\n";
    $body .= "Message: $message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>