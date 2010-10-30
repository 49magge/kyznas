package com.thekyz.readynas.downloader;

import com.sun.org.apache.xerces.internal.parsers.DOMParser;
import org.w3c.dom.Node;
import org.xml.sax.InputSource;

import java.io.FileInputStream;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import com.thekyz.readynas.downloader.TvShow.ShowStatus;

/**
 * User: Kyz
 * Date: 29 oct. 2010
 * Time: 12:40:05
 * TvShow extractor.
 */
public final class ShowExtractor {
    /**
     * Main.
     * @param argv Entry parameters
     * @throws Exception If anything bad occurs.
     **/
    public static void main(String[] argv) throws Exception {
        DOMParser parser = new DOMParser();

        FileInputStream fis = new FileInputStream("myepisodes.xhtml");
        InputSource i = new InputSource(fis);

        parser.parse(i);
        parse(parser.getDocument());
    }

    private static boolean started = false;

    private static Map<ShowStatus, List<TvShow>> shows = new HashMap<ShowStatus, List<TvShow>>();

    private static TvShow tempShow;
    private static String[] showInfo = new String[5];
    private static int counter = 0;
    private static ShowStatus tempStatus = ShowStatus.PENDING;

    /**
     * Prints a node's class name.
     * @param node The node to parse
     **/
    public static void parse(Node node) {
        String value = node.getNodeValue();

        // Encapsulate the show declaration part
        if (value != null) {
            if (value.contains("Operations")) {
                started = true;
            } else if (value.contains("©")) {
                started = false;
            }
        }

        if (started) {
            // Check if there's an image in the node
            if (node.getAttributes() != null && node.getAttributes().getNamedItem("src") != null) {
                String imgName = node.getAttributes().getNamedItem("src").getNodeValue();

                // Look for the image, it will tell us the show status
                if (imgName.contains("icon_acquire.gif")) {
                    tempStatus = ShowStatus.AIRED;
                } else if (imgName.contains("icon_watch.gif")) {
                    tempStatus = ShowStatus.DOWNLOADED;
                } else if (imgName.contains("icon_coming.gif")) {
                    tempStatus = ShowStatus.COMING;
                } else if (imgName.contains("icon_unknown.gif")) {
                    // We don't care about those, we're finished
                    tempStatus = ShowStatus.PENDING;
                    started = false;
                    return;
                }
            }

            // Check if there's some text in the node
            if (value != null) {
                String testValue = value.replaceAll("[\\s]*", "");
                value = value.replaceAll("[\\n\\f\\r]", "").trim();

                if (!testValue.isEmpty() && !value.contains("Guide") && !value.equals("/")
                        && !value.equals("Disallow Split") && !value.equals("ACQUIRED") && !value.equals("Operations")
                        && !value.equals("[?]") && !value.equals("SEEN") && !value.equals("Ignore")
                        && (counter != 0 || !value.equals("-"))) {
                    // From the remove line, we can easily get the show id
                    if (value.equals("REMOVE")) {
                        // Go through all elements in the node
                        for (String split : node.getParentNode().getAttributes().getNamedItem("href").getNodeValue().split("'")) {
                            // Look for our link
                            if (split.contains("showid")) {
                                showInfo[counter++] = split;
                                break;
                            }
                        }
                    } else {
                        // Standard info line, just get the value
                        showInfo[counter++] = value;
                    }

                    // We're reading 5 lines per show, so add the show if we reached that
                    if (counter >= 5) {
                        // Allocate a list for empty statuses
                        if (shows.get(tempStatus) == null) {
                            shows.put(tempStatus, new ArrayList<TvShow>());
                        }

                        // Create the show
                        shows.get(tempStatus).add(new TvShow(showInfo, tempStatus));
                        // Reset the counter for the next show
                        counter = 0;
                    }
                }
            }
        }

        Node child = node.getFirstChild();
        while (child != null) {
            parse(child);
            child = child.getNextSibling();
        }
    }
}
