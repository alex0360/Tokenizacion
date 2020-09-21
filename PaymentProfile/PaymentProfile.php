<?php
// Activar medio de pago
function Activation(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/62057/activate",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"Token\": \"CT___mI2B-hLk3nI--7Pyl8U6_VPYyA-8Za2M4Gj0WncLfg_\",\n
                            \"ActivationCode\": \"KWA94Z\"                     
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
// Actualizar medio de pago
function PaymentProfileUpdate(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/PaymentProfileUpdate",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"PaymentProfileId\": \"456\",\n
                            \"Expiration\": \"202008\",\n
                            \"Enabled\": true
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
// Eliminar Medio de pago
function PaymentProfileDelete(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/PaymentProfileDelete",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{   
                            \"PaymentProfileId\": \"388\"              
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
?>
