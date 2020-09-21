$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic PrivateAccountKey")

$body = "{
    `n  `"PaymentProfileId`":`"1914`",
    `n  `"Expiration`":`"202008`",
    `n  `"Enabled`": true
    `n  }"

$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/PaymentProfileUpdate"  -Method POST -Headers $headers -Body $body
$response | ConvertTo-Json
