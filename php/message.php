<?php

    session_start();

    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
    }

    if (isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
    }

?>