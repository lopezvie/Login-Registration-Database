<?php

    // remove all session variables
    session_unset();

    // destroy the session 
    session_destroy();

    //Redirect User to LoginPage
    header("Location: loginPage.html");

