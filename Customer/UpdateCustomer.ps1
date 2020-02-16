$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")

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

$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/update"  -Method POST -Headers $headers -Body $body
$response | ConvertTo-Json