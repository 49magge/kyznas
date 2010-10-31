package com.thekyz.readynas.downloader;

import com.thekyz.readynas.downloader.MyEpisodeEntry.ShowStatus;
import com.thekyz.readynas.downloader.RssService.RssFeed;
import com.thekyz.utils.HtmlHelper;
import com.thekyz.utils.TagSoupHelper;
import com.thekyz.utils.WrongCredentialException;
import org.xml.sax.SAXException;

import java.io.ByteArrayInputStream;
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 * User: Kyz
 * Date: 31 oct. 2010
 * Time: 14:57:38
 */
public class Downloader {

    private static final String SHOWS_FILE = "myshows.xhtml";

    /**
     * Main.
     * @param argv Entry parameters
     * @throws Exception If anything bad occurs.
     **/
    public static void main(String[] argv) throws Exception {
        Downloader dl = new Downloader("kyze", "azpenuza");
        for (String link : dl.getDownloadLinks()) {
            //HtmlHelper.download(link, ".");
            HtmlHelper.download(link, "C:" + File.separator);
        }
    }

    private RssService rss;
    private ShowExtractor extractor;

    public Downloader(String userName, String password) throws IOException, WrongCredentialException, SAXException {
        // Login to MyEpisodes.com
        MyEpisodesService.login(userName, password);
        // Clean-up the stream
        TagSoupHelper.cleanUp(SHOWS_FILE, new ByteArrayInputStream(MyEpisodesService.readShowPage().getBytes()));
        // Get the show list from MyEpisodes.com
        extractor = new ShowExtractor(SHOWS_FILE);
        // Read the EZTV rss feed
        rss = new RssService(RssFeed.EZTV);
    }

    private List<Episode> getDownloadableEpisodes() {
        return rss.getEpisodes();
    }

    private List<Episode> getDownloadableLdEpisodes() {
        return rss.getLdEpisodes();
    }

    public List<String> getDownloadLinks() {
        List<String> torrents = new ArrayList<String>();

        // For each episode to download
        for (MyEpisodeEntry show : extractor.getShows().get(ShowStatus.AIRED)) {
            // For each episode in the feed
            for (Episode episode : rss.getLdEpisodes()) {
                if (show.getName().equalsIgnoreCase(episode.getShowName())
                    && show.getNewEpisode().getNumber() == episode.getNumber()
                    && show.getNewEpisode().getSeason() == episode.getSeason()) {
                    torrents.add(episode.getDownloadLink());
                }
            }
        }

        return torrents;
    }
}
