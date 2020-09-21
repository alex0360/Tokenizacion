$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic PrivateAccountKey")

$body = "{
    `n  `"Token`":`"CT__zY7fKlVa0eSg7RUCF_xdtSfywmvsfGn1xtpKnGKuR3M_`",
    `n  `"ActivationCode`":`"NX0K8G`"
    `n  }"
$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/activate"  -Method POST -Headers $headers -Body $body
$response | ConvertTo-Json
