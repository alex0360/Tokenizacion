using System;

namespace Tokenizacion
{
    class WebServiceProduccionRest
    {
        private string[] URL = { "https://lab.cardnet.com.do/api/payment" };
        private static String KeyGenerate()
        {
            var client = new RestSharp.RestClient("https://ecommerce.cardnet.com.do/api/payment/idenpotency-keys")
            {
                Timeout = -1
            };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Aceptar", "application/json");

            request.AddParameter("application/json", null
                      , RestSharp.ParameterType.RequestBody);
            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content.Substring(5);
        }

        public static String Sales()
        {
            string[] merchantID = { "349000000", "349091223", "349091563", "349097176" };
            string[] merchantTerminal = { "58585858", "10310835", "10310848", "10311129" };
            int i = 0;

            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/api/payment/transactions/sales")
            {
                Timeout = -1
            };
            string key = KeyGenerate();
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Aceptar", "application/json");

            request.AddParameter("application/json", "{" +
                            "\"amount\": 1,\n" + // Variable
                            "\"card-number\": \"5168441223630339\",\n" + 
                            "\"client-ip\": \"10.0.0.1\",\n" + // Variable
                            "\"currency\": \"214\",\n" + 
                            "\"cvv\": \"999\",\n" + // Variable
                            "\"environment\": \"ECommerce\",\n" +
                            "\"expiration-date\": \"12/99\",\n" + // Variable
                            "\"idempotency-key\": \"" + key + "\",\n" +
                            "\"invoice-number\": \"123456\",\n" +
                            "\"merchant-id\": \"" + merchantID[i] + "\",\n" +
                            "\"reference-number\": \"000001\",\n" + // Variable
                            "\"tax\": 0,\n" + // Variable
                            "\"terminal-id\": \"" + merchantTerminal[i] + "\",\n" +
                            "\"tip\": 0,\n" + // Variable
                            "\"token\": \"AAZZ\"}"
                      , RestSharp.ParameterType.RequestBody);
            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content.ToString();
        }

    }
}