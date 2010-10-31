package com.thekyz.readynas.downloader;

import com.thekyz.utils.Html;
import com.thekyz.utils.WrongCredentialException;
import org.apache.http.NameValuePair;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.message.BasicNameValuePair;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 * User: Kyz
 * Date: 31 oct. 2010
 * Time: 02:35:35
 */
public class MyEpisodesService {
    /**
     * Main.
     * @param argv Entry parameters
     * @throws Exception If anything bad occurs.
     **/
    public static void main(String[] argv) throws Exception {
        // Login
        login("kyze","azpenuza");
        BufferedWriter out = new BufferedWriter(new FileWriter("myshows.html"));
        out.write(readShowPage());
        out.close();
    }

    public static void login(String userName, String password)
            throws IOException, WrongCredentialException {
        // Create the post header
        HttpPost post = new HttpPost("http://www.myepisodes.com/login.php");

        // Build the data
        List<NameValuePair> pairs = new ArrayList<NameValuePair>(2);
        pairs.add(new BasicNameValuePair("username", userName));
        pairs.add(new BasicNameValuePair("password", password));
        pairs.add(new BasicNameValuePair("action", "Login"));

        // Send request
        String responsePage = Html.post("http://www.myepisodes.com/login.php", pairs);

        if (responsePage.contains("Wrong username/password")) {
            throw new WrongCredentialException();
        }
    }

    public static String readShowPage() {
        return Html.get("http://www.myepisodes.com/myshows.php");
    }
}
