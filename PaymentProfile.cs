using System;
namespace Tokenizacion
{
    class PaymentProfile
    {
        //public string PrivateAccountKey ="9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__";
        //public string PrivateAccountKey ="on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__";
        public static string PaymentProfileActivation()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/62057/activate") { Timeout = -1 };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{" +
                                                        "\"Token\": \"CT___mI2B-hLk3nI--7Pyl8U6_VPYyA-8Za2M4Gj0WncLfg_\",\n"+
                                                        "\"ActivationCode\": \"KWA94Z\"}", 
                                RestSharp.ParameterType.RequestBody);

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string PaymentProfileUpdate()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/62057/activate") { Timeout = -1 };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{" +
                                                        "\"PaymentProfileId\": \"456\",\n" + 
                                                        "\"Expiration\": \"202008\",\n" +
                                                        "\"Enabled\": true" +                            
                                                     "}", RestSharp.ParameterType.RequestBody);

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string PaymentProfileDelete()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/140/PaymentProfileDelete") { Timeout = -1 };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{ \"PaymentProfileId\": \"388\"}", RestSharp.ParameterType.RequestBody);

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }
    }
}
