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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
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
                            \"CustomerIP\": \"10.100.81.211\",\n
                            \"DataDo\": {
                                \"Tax\": 000,\n
                                \"Invoice\": \"000001\",\n
                            }
                            
                        }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
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
    CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase?CustomerID=100&From=20180525&To=20191225&Authorize=false8",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
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
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/142/PaymentProfileUpdate",
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
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
        CURLOPT_URL => "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/140/PaymentProfileDelete",
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
// Anular compra
function Refund(){
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
            "Authorization: Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
?>
