import requests

def PostPurchase():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    params = { "TrxToken": "CT__zY7fKlVa0eSg7RUCF_xdtSfywmvsfGn1xtpKnGKuR3M_",
                            "Orden": "000001",
                            "Amount": 13000,
                            "Tip": 000,
                            "Currency": "DOP",
                            "Capture": True,
                            "CustomerIP": "100.00.0.2",
                            "DataDo": {"Tax": 000, "Invoice": "000001"}
              }

    response = requests.post(url, headers=headers, json=params)
    print(response.json())

def GetPurchase():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    response = requests.get(url, headers=headers)
    print(response.json())

def PurchaseRefund():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511/refund"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    params = {}

    response = requests.post(url, headers=headers, json=params)
    print(response.json())

def PurchaseList():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase?CustomerID=100&From=20180525&To=20191225&Authorize=false"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic PrivateAccountKey'
    }

    response = requests.get(url, headers=headers)
    print(response.json())
