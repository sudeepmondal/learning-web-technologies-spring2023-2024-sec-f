<?php 

    setcookie('flag', 'abc', time()-10, '/');
    header('location: ../view/home.php');
?>