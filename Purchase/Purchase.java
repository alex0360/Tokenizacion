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
public class Purchase {

    public static String PostPurchase() throws IOException {

        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{\n"
                + "\"TrxToken\": \"CT__6NBt_OO5gfCg7RUCF_xdtRuaohj8YOAjLqkyXVed23g_\",\n"
                + "\"Order\": \"000001\",\n"
                + "\"Amount\": 13000,\n"
                + "\"Tip\": 000,\n"
                + "\"Currency\": \"DOP\",\n"
                + "\"Capture\": true,\n"
                + "\"CustomerIP\": \"10.100.81.211\",\n"
                + "\"DataDo\": { \"Tax\": 000,\n \"Invoice\": \"000001\",\n }"
                + "}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String GetPurchase() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511")
                .method("GET", null)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();

        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String GetPurchaseList() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase?CustomerID=100&From=20180525&To=20191225&Authorize=false")
                .method("GET", null)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();

        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

    public static String PurchaseRefund() throws IOException {
        OkHttpClient client = new OkHttpClient()
                .newBuilder()
                .build();
        RequestBody body = create(MediaType.parse("application/json; charset=utf-8"), "{\n"
                + "}");
        Request request = new Request.Builder()
                .url("https://lab.cardnet.com.do/servicios/tokens/v1/api/Purchase/12511/refund")
                .method("POST", body)
                .addHeader("Content-Type", "application/json")
                .addHeader("Authorization", "Basic 9kYH2uY5zoTD-WBMEoc0KNRQYrC7crPRJ7zPegg3suXguw_8L-rZDQ__")
                .build();
        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }

}
