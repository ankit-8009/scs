<?php
session_start();

session_destroy();
 echo"
    <script>
    alert('logout successfully....');
    location.href='index.php';
    </script>";
?>