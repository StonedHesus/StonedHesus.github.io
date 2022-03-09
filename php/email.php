<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $header = "From: ".$_POST["mail"]."\r\n";
        $header .= "Organisation: ".$_POST["organisation"]."\r\n";
        $header .= "Full name: ".$_POST["firstname"]." ".$_POST["lastname"]."\r\n";

        $object = 'Testing';
        $text   = 'Just testing';

        if(mail('andrei.ionescu@etu-u.paris.fr', $object, $text)){


        }
    }