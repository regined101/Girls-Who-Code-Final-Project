<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
  </head>
  <body>
    <main>
      <p>CONTACT US:</p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name= "name" placeholder= "Full name">
        <input type="text" name= "mail" placeholder= "Your e_mail">
        <input type="text" name= "Subject" placeholder= "Subject">
        <textarea name= "message" placeholder= "Message"></textarea>
        <button type= "submit" name= "submit">SEND MAIL</button>
      </form>
    </main>
    </body>
</html>