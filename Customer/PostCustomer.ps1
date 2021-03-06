$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic PrivateAccountKey")

$body = "{
    `n  `"Email`":`"edelossantos@cardnet.com.do`",
    `n  `"ShippingAddress`":`"Calle Max Henriquez Ureña No. 6`",
    `n  `"BillingAddress`":`"Calle 1 No 10, Piantini`",
    `n  `"FirstName`":`"Emmanuel`",
    `n  `"LastName`":`"De los Santos`",
    `n  `"DocumentTypeId`": 2,
    `n  `"DocNumber`":`"00114918123`",
    `n  `"PhoneNumber`":`"8096042082`",
    `n  `"Enable`": true
    `n}"

$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer"  -Method POST -Headers $headers -Body $body
$response | ConvertTo-Json
