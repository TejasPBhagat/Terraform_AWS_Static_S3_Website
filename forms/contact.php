<?php
  /*
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = '1303tejasbhagat@gmail.com';

  // specify the correct path to the PHP Email Form library
  $php_email_form = '../assets/vendor/php-email-form/php-email-form.php';
  if (file_exists($php_email_form)) {
    include($php_email_form);
  } else {
    die('Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  // check if the required fields are present in the $_POST superglobal array
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->from_email = $_POST['email'];
    $contact->subject = $_POST['subject'];

    // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
    /*
    $contact->smtp = array(
      'host' => 'example.com',
      'username' => 'example',
      'password' => 'pass',
      'port' => '587'
    );
    *(/)

    $contact->add_message($_POST['name'], 'From');
    $contact->add_message($_POST['email'], 'Email');
    $contact->add_message($_POST['message'], 'Message', 10);

    echo $contact->send();
  } else {
    // handle the case where one or more required fields are missing
    echo "One or more required fields are missing!";
  }
  */

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "1303tejasbhagat@gmail.com"

  $headers = "From: ".$name. "\r\n" .
  "CC: glisspaul123@gmail.com";

  $txt = "Got a Website Visitor".$name ."\r\nEmail: ".$email ."\r\nMessage: ".$message;

  if($email != NULL){
    mail($to, $subject, $txt, $headers);
  }


  header("Thank You")
?>