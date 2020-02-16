namespace Tokenizacion
{
    public class Purchase
    {
        //public string PrivateAccountKey ="9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__";
        //public string PrivateAccountKey ="on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__";
        public static string PostPurchase()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase"){Timeout = -1};
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{" +
                        "\"TrxToken\": \"CT__6NBt_OO5gfCg7RUCF_xdtRuaohj8YOAjLqkyXVed23g_\",\n" +
                        "\"Order\": \"000001\",\n" +
                        "\"Amount\": 13000,\n" +
                        "\"Tip\": 000,\n" +
                        "\"Currency\": \"DOP\",\n" +
                        "\"Capture\": true,\n" +
                        "\"CustomerIP\": \"10.100.81.211\",\n" +
                        "\"DataDo\": { \"Tax\": 000,\n \"Invoice\": \"000001\",\n }" +
                        "}", RestSharp.ParameterType.RequestBody);

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string GetPurchase()
        {
            var client = new RestSharp.RestClient(
                "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511")
            { Timeout = -1 };
            var request = new RestSharp.RestRequest(RestSharp.Method.GET);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string GetPurchaseList()
        {
            var client = new RestSharp.RestClient(
                "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase?CustomerID=100&From=20180525&To=20191225&Authorize=false"){Timeout =-1};
            var request = new RestSharp.RestRequest(RestSharp.Method.GET);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string PurchaseRefund()
        {
            var client = new RestSharp.RestClient(
                "https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511/refund")
            { Timeout = -1 };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }
    }
}