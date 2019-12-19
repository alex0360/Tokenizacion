namespace Tokenizacion
{
   public class Customer
    {
        public string GetCustomer()
        {
            var client = new RestSharp.RestClient("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1018");
            client.Timeout = -1;

            var request = new RestSharp.RestRequest(RestSharp.Method.GET);
            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__");

            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content.ToString();
        }

        public string PostGustomer()
        {
            var client = new RestSharp.RestClient("https://{{providerApiEndpoint}}/payments");
            client.Timeout = -1;
            var request = new RestSharp.RestRequest(RestSharp.Method.POST);

            request.AddHeader("Content-Type", "application/json");
            request.AddHeader("Authorization", "Basic on3smurlSFA-_xT9IRGDv6v17bAY8Ri6acwsmjpjIojkNmByKuUJkA__");

            request.AddParameter("application/json", "{" +
                " \"TrxToken\": \"CT__6ptd1_ZYo6mg7RUCF_xdtdBUCZEhM3yseg9J8gSkprE_\",\n" +
                " \"Order\": \"000001\",\n" +
                " \"Amount\": 13000,\n"  +
                " \"Tip\": 000,\n " +
                " \"Currency\": \"DOP\",\n "+
                "  \"Capture\": true,\n " +
                "  \"CustomerIP\": \"10.100.81.211\",\n "+
                "    \"DataDo\": { "+
                "  \"Tax\": 000,\n "+
                " \"Invoice\": \"000001\",\n}"
                      , RestSharp.ParameterType.RequestBody);
            RestSharp.IRestResponse response = client.Execute(request);
            return response.Content.ToString();
        }
    }
}
