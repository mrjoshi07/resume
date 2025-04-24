<?php
       session_start();
       session_destroy();
       echo"<script>open('login page.php','_self')</script>";
?>