<?php

    class Dpo 
    {
        

        function createTokenRequest(){

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://secure.3gdirectpay.com/API/v6/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
            <API3G>
            <CompanyToken>9F416C11-127B-4DE2-AC7F-D5710E4C5E0A</CompanyToken>
            <Request>createToken</Request>
            <Transaction>
            <PaymentAmount>1.00</PaymentAmount >
            <PaymentCurrency>USD</PaymentCurrency>
            <CompanyRef>49FKEOA</CompanyRef>
            <RedirectURL>https://www.codesevaco.tech/success.php</RedirectURL>
            <DeclinedURL>https://www.codesevaco.tech/declined.php</DeclinedURL>
            <BackURL>http://www.domain.com/backurl.php </BackURL>
            <CompanyRefUnique>0</CompanyRefUnique>
            <PTL>5</PTL>
            </Transaction>
            <Services>
            <Service>
                <ServiceType>3854</ServiceType>
                <ServiceDescription>Test Product</ServiceDescription>
                <ServiceDate>2021/09/01</ServiceDate>
            </Service>
                <Service>
                <ServiceType>5525</ServiceType>
                <ServiceDescription>Test Service</ServiceDescription>
                <ServiceDate>2021/09/01</ServiceDate>
            </Service>
            </Services>
            <Additional>
            <BlockPayment>BT</BlockPayment>
            <BlockPayment>PP</BlockPayment>
            </Additional>
            </API3G>',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/plain'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return $response;


        }

    }
    