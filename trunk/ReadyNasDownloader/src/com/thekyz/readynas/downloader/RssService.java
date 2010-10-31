package com.thekyz.readynas.downloader;

import org.w3c.dom.Node;
import com.sun.org.apache.xerces.internal.parsers.DOMParser;
import com.thekyz.utils.HtmlHelper;
import org.xml.sax.InputSource;
import org.xml.sax.SAXException;

import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * User: Kyz
 * Date: 31 oct. 2010
 * Time: 17:20:41
 */
public class RssService {

    private static final String BTCHAT_RSS_EZTV = "http://rss.bt-chat.com/?group=3&cat=9";
    private static final String EZTV_RSS = "http://www.ezrss.it/feed/";

    private static final String BTCHAT_REGEX =
        "([\\w\\.]+)[\\.]" +
        "(?:(?:[S]([0-9]+)[E]([0-9]+))" +
                "|(?:([0-9]+)of[0-9]+)" +
                "|(?:([0-9]{4})[\\.]([0-9]+[\\.][0-9]+))" +
                "|(?:([0-9]+)[xX]([0-9]+)))" +
        "[\\.]([\\w\\.\\-\\[\\]]+)" +
        "\\.torrent";

    private static final String EZTV_REGEX =
        "([\\w\\s]+)[\\s](?:[\\-][\\w\\s]+)?" +
        "(?:(?:[S]([0-9]+)[E]([0-9]+))" +
                "|(?:([0-9]+)of[0-9]+)" +
                "|(?:([0-9]{4})[\\s]([0-9]+[\\s][0-9]+))" +
                "|(?:([0-9]+)[xX]([0-9]+)))" +
        "[\\s]([\\w\\s\\-\\[\\]]+)";

    public enum RssFeed {
        EZTV(EZTV_RSS, EZTV_REGEX, "title"),
        BTCHAT(BTCHAT_RSS_EZTV, BTCHAT_REGEX, "title");

        private String episodeTag;
        private String feed;
        private String regex;

        RssFeed(String feed, String regex, String episodeTag) {
            this.episodeTag = episodeTag;
            this.feed = feed;
            this.regex = regex;
        }

        public String getFeed() {
            return feed;
        }

        public String getEpisodeTag() {
            return episodeTag;
        }

        public String getRegex() {
            return regex;
        }
    }

    /**
     * Main.
     * @param argv Entry parameters
     * @throws Exception If anything bad occurs.
     **/
    public static void main(String[] argv) throws Exception {
        System.out.println("EZTV Feed -------------------");
        RssService rss = new RssService(RssFeed.EZTV);
        for (Episode episode : rss.getEpisodes()) {
            System.out.println("\t" + episode.getShowName() + " : " + episode);
        }
       // System.out.println("BTCHAT Feed -------------------");
       // rss = new RssService(RssFeed.BTCHAT);
       // for (Episode episode : rss.getEpisodes()) {
       //     System.out.println("\t" + episode.getShowName() + " : " + episode);
       // }
    }

    private RssFeed rssFeed;

    public RssService(RssFeed rssFeed) throws IOException, SAXException {
        this.rssFeed = rssFeed;
        String feed = HtmlHelper.get(rssFeed.getFeed());
        // Allocate a DOM parser which we'll use for reading the feed
        DOMParser parser = new DOMParser();
        // Create a source from the feed
        InputSource is = new InputSource(new ByteArrayInputStream(feed.getBytes()));
        // Parse the feed
        parser.parse(is);
        parse(parser.getDocument());
    }

    private List<Episode> episodes = new ArrayList<Episode>();

    public List<Episode> getEpisodes() {
        return episodes;
    }

    /**
     * Parse the root node looking for the episodes.
     * @param node The root node of the feed.
     */
    private void parse(Node node) {
        // If it's an item node, it contains an episode description
        if (node.getNodeName().equals("item")) {
            Episode episode = new Episode();
            // Get the show information
            parseEpisode(node, episode);
            // Add it to the list
            episodes.add(episode);
        }

        // Check the child node
        Node child = node.getFirstChild();
        while (child != null) {
            // Parse it
            parse(child);
            // Check the browser nodes
            child = child.getNextSibling();
        }
    }

    /**
     * Parse an item node to read episode info
     * @param node An item node.
     * @param episode The episode to edit.
     */
    private void parseEpisode(Node node, Episode episode) {
        if (node.getNodeName().equals(rssFeed.getEpisodeTag())) {
            regexScan(node.getFirstChild().getNodeValue(), episode);
        } else if (node.getNodeName().equals("link")) {
            episode.setDownloadLink(node.getFirstChild().getNodeValue());
        }

        // Check the child node
        Node child = node.getFirstChild();
        while (child != null) {
            // Parse it
            parseEpisode(child, episode);
            // Check the browser nodes
            child = child.getNextSibling();
        }
    }

    private static final int NO_SEASON = 1;

    private void regexScan(String nodeValue, Episode episode) {
        Matcher m = Pattern.compile(rssFeed.getRegex()).matcher(nodeValue);
        if (m.find()) {
            episode.setShowName(m.group(1).replaceAll("\\.", " ").trim());
            episode.setName(m.group(9).replaceAll("\\.", " ").trim());
            if (m.group(2) != null && m.group(3) != null) {
                episode.setSeason(Integer.parseInt(m.group(2)));
                episode.setNumber(Integer.parseInt(m.group(3)));
            } else if (m.group(4) != null) {
                episode.setSeason(NO_SEASON);
                episode.setNumber(Integer.parseInt(m.group(4)));
            } else if (m.group(5) != null && m.group(6) != null) {
                episode.setSeason(Integer.parseInt(m.group(5)));
                episode.setNumber(Integer.parseInt(m.group(6).replaceAll("\\.", "")));
            } else if (m.group(7) != null && m.group(8) != null) {
                episode.setSeason(Integer.parseInt(m.group(7)));
                episode.setNumber(Integer.parseInt(m.group(8)));
            }
        } else {
            episode.setName(nodeValue.replace(".torrent", "").trim());
        }
    }

    public List<Episode> getLdEpisodes() {
        List<Episode> ldList = new ArrayList<Episode>();

        for (Episode episode : episodes) {
            if (!episode.getName().contains("h264") && !episode.getName().contains("720P")
                     && !episode.getName().contains("1080P")) {
                ldList.add(episode);
            }
        }

        return ldList;
    }
}
