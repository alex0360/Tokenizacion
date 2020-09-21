import requests

def PaymentProfileActivation():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/activate"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    params = {"Token": "CT__zY7fKlVa0eSg7RUCF_xdtSfywmvsfGn1xtpKnGKuR3M_",
                        "ActivationCode": "NX0K8G"}

    response = requests.post(url, headers=headers, json=params)
    print(response.json())

def PaymentProfileUpdate():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/PaymentProfileUpdate"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    params = {"PaymentProfileId": "1914",
            "Expiration": "202008",
            "Enabled": "True" }

    response = requests.post(url, headers=headers, json=params)
    print(response.json())

def PaymentProfileDelete():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/PaymentProfileDelete"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    params = {"PaymentProfileId": "1914"}

    response = requests.post(url, headers=headers, json=params)
    print(response.status_code)
    print(response.json())
