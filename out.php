<?php
           setcookie ("sid",$id,time()-3600);

           session_start();
            session_destroy();
            header("Location: http://192.168.121.187/~suyash/php_assignment/register.php");
            ?>


