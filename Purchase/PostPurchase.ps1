$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("Content-Type", "application/json")
$headers.Add("Authorization", "Basic PrivateAccountKey")

$body = "{
    `n  `"TrxToken`":`"CT__xDDBNF5ZGyug7RUCF_xdtdwQgnXstYHnHtyx3jl34Eo_`",
    `n  `"Order`":`"000001`",
    `n  `"Amount`": 13000,
    `n  `"Tip`":`"000`",
    `n  `"Currency`":`"DOP`",
    `n  `"Capture`": true,
    `n  `"CustomerIP`":`"10.100.81.211`",
    `n  `"DataDo`": {`"Tax`":000, `"Invoice`":`"000001`"}
    `n  }"
$response = Invoke-RestMethod -Uri "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase"  -Method POST -Headers $headers -Body $body
$response | ConvertTo-Json
