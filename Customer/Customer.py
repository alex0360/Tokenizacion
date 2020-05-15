import requests

def GetCustomer():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/100"

    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__'
    }

    response = requests.get(url, headers=headers)

    print(response.json())

def PostCustomer():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__'
    }

    params = {"Email": "edelossantos24@cardnet.com.do",
            "ShippingAddress": "Calle Max Henriquez Ureña No. 6",
            "BillingAddress": "Calle 1 No 10, Piantini",
            "FirstName": "Emmanuel",
            "LastName": "De los Santos",
            "DocumentTypeId": 2,
            "DocNumber": "00114918123",
            "PhoneNumber": "8096042082",
            "Enable": "True"}

    response = requests.post(url, headers=headers, json=params)
    print(response.json())

def UpdateCustomer():
    url = "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/update"
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__'
    }

    params = {"CustomerID": 1047,
            "Email": "edelossantos@cardnet.com.do",
            "ShippingAddress": "Calle Max Henriquez Ureña No. 6",
            "BillingAddress": "Calle 1 No 10, Piantini",
            "FirstName": "Emmanuel",
            "LastName": "De los Santos",
            "DocumentTypeId": 2,
            "DocNumber": "00114918123",
            "PhoneNumber": "8096042082",
            "Enable": "True"}

    response = requests.post(url, headers=headers, json=params)
    print(response.json())