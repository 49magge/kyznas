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
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.StringTokenizer;

/**
 * User: Kyz
 * Date: 30 oct. 2010
 * Time: 17:38:38
 */
public final class HtmlHelper {

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

    public static void download(String remoteFile, String localFolder) throws IOException {
        URL url = new URL(remoteFile);
        // Open the connection
        System.out.println("Opening connection to " + remoteFile + "...");
        URLConnection urlC = url.openConnection();

        // Copy resource to local file
        InputStream is = url.openStream();

        // Print info about resource
        System.out.println("Copying resource (type: " + urlC.getContentType() + ")");

        // Get remote filename
        String localFile = null;
        StringTokenizer st = new StringTokenizer(url.getFile(), "/");
        while (st.hasMoreTokens()) {
            localFile = st.nextToken();
        }
        localFile = localFolder + File.separator + localFile;
        
        FileOutputStream fos = new FileOutputStream(new File(localFile));
        int oneChar, count=0;
        while ((oneChar = is.read()) != -1) {
            fos.write(oneChar);
            count++;
        }

        // Close the streams
        is.close();
        fos.close();

        System.out.println(count + " byte(s) copied");
    }
}
