<html>
    <head><title> Receiving Input </title></head>
         <body>
             <h1 size=10>Thank you: Got Your Input.</h1><br>
             <?php
                $name = $_POST['name'];
                $id = $_POST['id'];
                $class = $_POST['class'];
                $uni = $_POST['uni'];
                $hobby1 = $_POST['hobby1'];
                $hobby2 = $_POST['hobby2'];
                $hobby3 = $_POST['hobby3'];
                $sex = $_POST['sex'];

                print ("Hello, $name <br>"); 
                echo ("ID: $id <br>");
                print ("You are studying at $class, $uni");
                print ("<br> Your hobby :");
                echo ("<ol>
                        <li> $hobby1 </li>
                        <li> $hobby2 </li>
                        <li> $hobby3 </li>
                     </ol>
                     ");
                echo ("Sex: $sex");
             ?>
         </body>
</html>