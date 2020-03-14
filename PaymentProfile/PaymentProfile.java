/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TokenizacionGradle;

import java.io.IOException;
import okhttp3.MediaType;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.RequestBody;
import static okhttp3.RequestBody.create;
import okhttp3.Response;

/**
 *
 * @author alex0360
 */
public class PaymentProfile {

    public static String PaymentProfileActivation() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{"
                + "\"Token\": \"CT___mI2B-hLk3nI--7Pyl8U6_VPYyA-8Za2M4Gj0WncLfg_\",\n"
                + "\"ActivationCode\": \"KWA94Z\"}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/62057/activate")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String PaymentProfileUpdate() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{"
                + "\"PaymentProfileId\": \"345\",\n"
                + "\"Expiration\": \"202108\",\n"
                + "\"Enabled\": true"
                + "}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/100/PaymentProfileUpdate")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String PaymentProfileDelete() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{ \"PaymentProfileId\": \"1915\"}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Customer/100/PaymentProfileDelete")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

}
