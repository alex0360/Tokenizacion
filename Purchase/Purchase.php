<?php
// Realizar una compra
function Purchase(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"TrxToken\": \"CT__6ptd1_ZYo6mg7RUCF_xdtdBUCZEhM3yseg9J8gSkprE_\",\n
                            \"Order\": \"000001\",\n
                            \"Amount\": 13000,\n
                            \"Tip\": 000,\n
                            \"Currency\": \"DOP\",\n
                            \"Capture\": true,\n
                            \"CustomerIP\": \"10.0.0.2\",\n
                            \"DataDo\": {
                                \"Tax\": 000,\n
                                \"Invoice\": \"000001\",\n
                            }
                            
                        }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic PrivateAccountKey"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
// Obtener compra
function GetPurchase(){
    $curl = curl_init();
    // Customer 1018
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic PrivateAccountKey"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
// Obtener lista de compra
function GetPurchaseList(){
    $curl = curl_init();
    // Customer 1018
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase?CustomerID=1047&From=20180525&To=20191225&Authorize=false8",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic PrivateAccountKey"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}

function RefundPurchase(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12023/refund",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic PrivateAccountKey"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
?>
