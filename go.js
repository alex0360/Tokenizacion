// function OnTokenReceived(token) {
//     if (token.TokenId != "") {
//         console.log("On token received: " + token.TokenId);
//         var auxCustomerId = 409//$("#selectedCustomerId").val();
//         $.ajax({
//             type: "POST",
//             url: "#",
//             data: JSON.stringify({ 'customerId': auxCustomerId }),
//             contentType: "application/json; charset=utf-8",
//             dataType: "json",
//             error: function (XMLHttpRequest, textStatus, errorThrown) {
//                 alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
//             },
//             success: function (response) {
//                 var url = "#";
//                 if (url.indexOf('?') > -1) {
//                     url += '&selectedCustomer=' + auxCustomerId;
//                 } else {
//                     url += '?selectedCustomer=' + auxCustomerId;
//                 }
//                 window.location.href = url;
//             }
//         });
//     }
// }

function CustomerRun() {
    console.log("inicio");
    $.ajax({
        type: 'POST',
        url: "https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer",
        data: JSON.stringify({
            'Email': 'alexds0360@hotmail.com',
            'ShippingAddress': 'Calle 1 No 9, El millon',
            'BillingAddress': 'Calle 1 No 9, El millon',
            'FirstName': 'alex',
            'LastName': 'DS',
            'DocNumber': '00114725827',
            'DocumentTypeId': 2,
            'PhoneNumber': '8095440000',
            'Enable': true
        }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
        },
        success: function (response) {
            var url = "http://localhost/token/";
            window.location.href = url;
            console.log(response);
        }
    })
}