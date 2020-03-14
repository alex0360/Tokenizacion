/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TokenizacionGradle;

import static okhttp3.RequestBody.create;

import java.io.IOException;
import okhttp3.MediaType;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.RequestBody;
import okhttp3.Response;

/**
 *
 * @author alex0360
 */
public class Customer {

    public static String PostCustomer() throws IOException {

        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{\n"
                + "\"Email\": \"edelossantos@cardnet.com.do\",\n"
                + "\"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n"
                + "\"BillingAddress\": \"Calle 1 No 10, Piantini\",\n"
                + "\"FirstName\": \"Emmanuel\",\n"
                + "\"LastName\": \"De los Santos\",\n"
                + "\"DocumentTypeId\": 2,\r\n"
                + "\"DocNumber\": \"00114918123\",\n"
                + "\"PhoneNumber\": \"8096042082\" ,\n"
                + "\"Enable\": true"
                + "}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String GetCustomer() throws IOException {

        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047")
                .method("GET", null)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();

        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }
    
    public static String UpdateCustomer() throws IOException {

        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = RequestBody.create(MediaType.parse("application/json; charset=utf-8"), "{\n"
                + "\"Email\": \"edelossantos@cardnet.com.do\",\n"
                + "\"ShippingAddress\": \"Calle Max Henriquez Ureña No. 6\",\n"
                + "\"BillingAddress\": \"Calle 1 No 10, Piantini\",\n"
                + "\"FirstName\": \"Emmanuel\",\n"
                + "\"LastName\": \"De los Santos\",\n"
                + "\"DocumentTypeId\": 2,\r\n"
                + "\"DocNumber\": \"00114918123\",\n"
                + "\"PhoneNumber\": \"8096042082\" ,\n"
                + "\"Enable\": true"
                + "}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/1047/update")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

}
