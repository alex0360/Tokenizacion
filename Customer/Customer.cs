namespace Tokenizacion
{
    public class Customer
    {
        //public string PrivateAccountKey ="9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__";
        public static string GetCustomer()
        {
            //1047
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/100")
            {
                Timeout = -1
            };

            RestSharp.RestRequest restRequest = new RestSharp.RestRequest(RestSharp.Method.GET);
            var request = restRequest;
            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string PostCustomer()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer")
            {
                Timeout = -1
            };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{" +
                        "\"Email\": \"ds@gmail.com\",\n" +
                        "\"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n" +
                        "\"BillingAddress\": \"Calle 1 No 10, Piantini\",\n" +
                        "\"FirstName\": \"Emmanuel\",\n" +
                        "\"LastName\": \"De los Santos\",\n" +
                        "\"DocumentTypeId\": 2,\n" +
                        "\"DocNumber\": \"00114918123\",\n" +
                        "\"PhoneNumber\": \"8096043111\" ,\n" +
                        "\"Enable\": true  }"
                      , RestSharp.ParameterType.RequestBody);
            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }

        public static string UpdateCustomer()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/update")
            {
                Timeout = -1
            };
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__");

            request.AddParameter("application/json", "{" +
                        "\"CustomerID\": 1047,\n" +
                        "\"Email\": \"edelossantos@cardnet.com.do\",\n" +
                        "\"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n" +
                        "\"BillingAddress\": \"Calle 1 No 10, Piantini\",\n" +
                        "\"FirstName\": \"Emmanuel\",\n" +
                        "\"LastName\": \"De los Santos\",\n" +
                        "\"DocumentTypeId\": 2,\n" +
                        "\"DocNumber\": \"00114918123\",\n" +
                        "\"PhoneNumber\": \"8096043111\" ,\n" +
                        "\"Enable\": true  }"
                      , RestSharp.ParameterType.RequestBody);
            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content;
        }
    }
}
