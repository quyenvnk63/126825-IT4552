<html>
    <head><title> Receiving Input </title></head>
         <body>
             <font size=10>Thank you: Got Your Input.</font>
             <?php
                $email = $_POST['contact'];
                $contact = $_POST['email'];
                print ("<br>Your email address is $email");
                print ("<br> Contact preference is $contact");
             ?>
         </body>
</html>