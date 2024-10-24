<?php

    session_start();
    session_destroy();
    header("Location: recordar.view.php");
    
?>