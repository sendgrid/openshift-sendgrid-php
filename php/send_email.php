<?php
  include 'libs/SendGrid_loader.php';
  
  $sendgrid = new SendGrid($_ENV["sendgrid_user"], $_ENV["sendgrid_password"]);

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