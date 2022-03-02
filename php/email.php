<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $header = "From: ".$_POST["mail"]."\r\n";
        $header .= "Organisation: ".$_POST["organisation"]."\r\n";
        $header .= "Full name: ".$_POST["firstname"]." ".$_POST["lastname"]."\r\n";

        mail("test", $_POST["subject"], $_POST["message"],$header);
    }