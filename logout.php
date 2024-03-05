<?php 
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["cargo"]);
    session_destroy();

    echo
    "<script>
        location.href='index.php?page=acesso'
    </script>";
?>