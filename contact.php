<!DOCTYPE html>
 <html>
 
 <head>
     <meta charset="utf-8" />
     <title>nmCAPTCHA 2 Test Page</title>
     <meta name="viewport" content="initial-scale=1">
     <meta name="robots" content="noindex,nofollow" />
     <link rel="stylesheet" type="text/css" href="css/blueberry.css">
     <link href="css/forms.css" type="text/css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
     <script src="js/jquery.blueberry.js"></script>

     <script>
         $(window).load(function() {
             $('.blueberry').blueberry();
         });
     </script>
 </head>

 <body>
     <h1><img class="left" src="images/home.png" alt="logo" width="35">Contact Form Page</h1>
     <br>

     <header>
         <h3>Contact Us!</h3>
     </header>
     
     <?php

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "";  //place your/your client's email address here
        $toName = ""; //place your client's name here
        $website = "";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>
     </main>
     <footer>
         <small>&copy; 2020-<?= date('Y') ?>, All Rights Reserved ~
             <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
             <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
             <a href="index.php"></a>
         </small>
     </footer>
     <!-- END Footer -->
 </body>

 </html>