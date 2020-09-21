$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic PrivateAccountKey")

$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511"  -Method GET -Headers $headers -Body $body
$response | ConvertTo-Json
