<?php
  include 'libs/SendGrid_loader.php';
  
  $sendgrid = new SendGrid('<sendgrid_username>', '<sendgrid_password>');

  $mail = new SendGrid\Mail();
  $mail->
    addTo('foo@bar.com')->
    setFrom('me@bar.com')->
    setSubject('Subject goes here')->
    setText('Hello World!')->
    setHtml('Hello World!');

  $response = $sendgrid->
                web->
                  send($mail);
?>