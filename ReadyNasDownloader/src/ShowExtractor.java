import com.sun.org.apache.xerces.internal.parsers.DOMParser;
import org.w3c.dom.Node;
import org.xml.sax.InputSource;

import java.io.FileInputStream;
import java.io.InputStream;

/**
 * User: alexandre.garcia
 * Date: 29 oct. 2010
 * Time: 12:40:05
 * Copyright (c) Horiba Medical. All rights reserved.
 */
public class ShowExtractor {


    /** Main. */
    public static void main(String[] argv) throws Exception {
        DOMParser parser = new DOMParser();

        FileInputStream fis = new FileInputStream("myepisodes.xhtml");
        InputSource i = new InputSource(fis);

        parser.parse(i);
        print(parser.getDocument(), "");
    }

    private static boolean started = false;

    /** Prints a node's class name. */
    public static void print(Node node, String indent) {
        String value = node.getNodeValue();

        if (value != null) {
            String testValue = value.replaceAll("[\\s]*", "");
            if (!testValue.isEmpty()) {
                if (value.contains("Operations")) {
                    started = true;
                } else if (value.contains("©")) {
                    started = false;
                } else if (started) {
                    System.out.println(indent + value.replaceAll("[\\n\\f\\r]", ""));
                }
            }
        }

        Node child = node.getFirstChild();
        while (child != null) {
            print(child, indent+" ");
            child = child.getNextSibling();
        }
    }
}
