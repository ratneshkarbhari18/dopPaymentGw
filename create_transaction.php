<?php

    require "./Dpo.php";

    $dpo = new Dpo();

    

    $tokenResponse = $dpo->createTokenRequest();

    $xml = simplexml_load_string($tokenResponse);

    $tokenResObj = json_decode(json_encode($xml),TRUE);

    $txTokenResult = $tokenResObj["Result"];
    $txToken = $tokenResObj["TransToken"];

    if ($txTokenResult=="000") {
        header("Location: https://secure.3gdirectpay.com/payv2.php?ID=".$txToken);
    } else {
        echo "Token not created";
    }