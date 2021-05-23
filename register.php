<?php include 'includes/header.php' ?>

        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "contact@seattlecomms.com";  
        $toName = "Enkhzul Jargalsaikhan"; 
        $website = "seattlecomms.com";  //place NAME of your client's website

        echo loadContact('multiple.php');

        include 'includes/footer.php' ?>
