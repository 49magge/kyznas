package com.thekyz.utils;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.apache.http.params.HttpParams;
import org.apache.http.util.EntityUtils;

import java.io.*;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;

/**
 * User: Kyz
 * Date: 30 oct. 2010
 * Time: 17:38:38
 */
public final class Html {

    private static HttpClient client = new DefaultHttpClient();

    public static String post(String url, List<NameValuePair> pairs) {
        String responsePage = "";
        // Create the post header
        HttpPost post = new HttpPost(url);

        try {
            // Set the data
            post.setEntity(new UrlEncodedFormEntity(pairs));

            // Execute POST request
            HttpResponse response = client.execute(post);
            responsePage = EntityUtils.toString(response.getEntity());
        } catch (ClientProtocolException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }

        return responsePage;
    }

    public static String get(String url) {
        String responsePage = "";
        // Create the get header
        HttpGet get = new HttpGet(url);

        try {
            // Send the request
            HttpResponse response = client.execute(get);
            responsePage = EntityUtils.toString(response.getEntity());
        } catch (ClientProtocolException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }

        return responsePage;
    }
}
