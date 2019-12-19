<?php

function keys(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/api/payment/idenpotency-keys",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

}

function sales(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/api/payment/transactions/sales",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"amount\": 1,\n
                            \"card-number\": \"4761340000000050\",\n
                            \"client-ip\": \"10.0.0.1\",\n
                            \"currency\": \"214\",\n
                            \"cvv\": \"999\",\n
                            \"environment\": \"ECommerce\",\n
                            \"expiration-date\": \"12/99\",\n
                            \"idempotency-key\": \"7004969300144d489ae2ad26141781b1\",\n
                            \"invoice-number\": \"123456\",\n
                            \"merchant-id\": \"349000000\",\n
                            \"reference-number\": \"000001\",\n
                            \"tax\": 0,\n
                            \"terminal-id\": \"88888888\",\n
                            \"tip\": 0,\n
                            \"token\": \"0b4a11cb0d304ccc9697ed3f4f09de43\"
                        }",
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

function voids(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/api/payment/transactions/voids",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"amount\": 1,\n
                            \"currency\": \"214\",\n
                            \"environment\": \"ECommerce\",\n
                            \"idempotency-key\": \"7004969300144d489ae2ad26141781b1\",\n
                            \"merchant-id\": \"349000000\",\n
                            \"pnRef\": \"txn-10519026de2e403c99f597f851295f96\", \n
                            \"terminal-id\": \"88888888\",\n
                            \"token\": \"0b4a11cb0d304ccc9697ed3f4f09de43\"
                        }",
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

sales();
?>