package com.thekyz.utils;

import org.ccil.cowan.tagsoup.HTMLSchema;
import org.ccil.cowan.tagsoup.XMLWriter;
import org.xml.sax.ContentHandler;
import org.xml.sax.InputSource;
import org.xml.sax.SAXException;
import org.xml.sax.XMLReader;
import org.ccil.cowan.tagsoup.Parser;

import java.io.*;

/**
 * User: Kyz
 * Date: 31 oct. 2010
 * Time: 02:42:30
 */
public final class TagSoupHelper {
    /**
     * Main.
     * @param argv Entry parameters
     * @throws Exception If anything bad occurs.
     **/
    public static void main(String[] argv) throws Exception {
        cleanUp("myshows.html");
    }

    public static void cleanUp(String htmlFile) throws IOException, SAXException {
        String dstFile;

        // If the file does not have any extension, just add the new one
        if (htmlFile.lastIndexOf('.') == -1) {
            dstFile = htmlFile + ".xhtml";
        // Otherwise change the extension
        } else {
            dstFile = htmlFile.substring(0, htmlFile.lastIndexOf('.')) + ".xhtml";
        }

        // Open a stream to the newly formatted file
        OutputStream os = new FileOutputStream(dstFile);
        // Create a parser
        XMLReader r = new Parser();
        r.setProperty(Parser.schemaProperty, new HTMLSchema());
        // Configure a writer
        Writer w = new OutputStreamWriter(os);
        ContentHandler h = new XMLWriter(w);
        // Set the output  to our parser
        r.setContentHandler(h);
        // Configure the input source
        InputSource s = new InputSource();
        s.setSystemId(htmlFile);
        // Parse the original file
        r.parse(s);
    }
}
