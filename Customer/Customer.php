<?php

// Obtener un usuario
function GetCustomer(){
    $curl = curl_init();
    // Customer 1018
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1018",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
// Registrar un usuario
function PostCustomer(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"Email\": \"edelossantos@cardnet.com.do\",\n
                            \"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n
                            \"BillingAddress\": \"Calle 1 No 10, Piantini\",\n
                            \"FirstName\": \"Emmanuel\",\n
                            \"LastName\": \"De los Santos\",\n
                            \"DocumentTypeId\": 2,\n
                            \"DocNumber\": \"00114918123\",\n
                            \"PhoneNumber\": \"8096043111\" ,\n
                            \"Enable\": true                            
                        }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
// Actualizar un usuario
function UpdateCustomer(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/update",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{
                            \"CustomerID\": 1047,\n   
                            \"Email\": \"edelossantos@cardnet.com.do\",\n
                            \"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n
                            \"BillingAddress\": \"Calle 1 No 10, Piantini\",\n
                            \"FirstName\": \"Emmanuel\",\n
                            \"LastName\": \"De los Santos\",\n
                            \"DocumentTypeId\": 2,\n
                            \"DocNumber\": \"00114918123\",\n
                            \"PhoneNumber\": \"8096042082\" ,\n
                            \"Enable\": true  
                            }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__"
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
}
?>
