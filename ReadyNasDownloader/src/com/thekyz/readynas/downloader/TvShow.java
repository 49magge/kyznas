package com.thekyz.readynas.downloader;
import java.net.URI;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * User: Kyz
 * Date: 30 oct. 2010
 * Time: 15:37:35
 * TvShow descriptor.
 */
public class TvShow {
    public enum ShowStatus {
        AIRED("Download"),
        DOWNLOADED("Watch"),
        COMING("Wait"),
        PENDING("N/A");

        private final String info;

        ShowStatus(String info) {
            this.info = info;
        }


        @Override
        public String toString() {
            return info;
        }
    }

    public class Episode {
        private String airDate = "";
        private String name = "";
        private int season = 0;
        private int number = 0;

        public Episode() {
        }

        public String getAirDate() {
            return airDate;
        }

        public void setAirDate(String airDate) {
            this.airDate = airDate;
        }

        public String getName() {
            return name;
        }

        public int getSeason() {
            return season;
        }

        public int getNumber() {
            return number;
        }

        public void setName(String name) {
            this.name = name;
        }

        public void setSeason(int season) {
            this.season = season;
        }

        public void setNumber(int number) {
            this.number = number;
        }

        @Override
        public String toString() {
            return (name.isEmpty() ? "" : name + " - ") + "S" + season + "E" + number;
        }
    }

    private final String name;
    private int id;
    private Episode newEpisode = new Episode();
    private Episode lastEpisode = new Episode();
    private ShowStatus status;

    private static final int SHOW_NAME = 0;
    private static final int LAST_EPISODE = 1;
    private static final int NEW_EPISODE = 2;
    private static final int NEW_EPISODE_NAME = 3;
    private static final int REMOVE_LINK = 4;

    public TvShow(String[] showInfo, ShowStatus status) {
        // Get show name
        name = showInfo[0];
        this.status = status;

        // Compile a pattern for season & episode number catching
        Matcher m = Pattern.compile("[0-9]+").matcher("");

        // Check if there was a last episode at all
        if (!showInfo[LAST_EPISODE].equals("-")) {
            // Get last episode info
            m.reset(showInfo[LAST_EPISODE]);
            m.find();
            lastEpisode.setSeason(Integer.parseInt(m.group(0)));
            m.find();
            lastEpisode.setNumber(Integer.parseInt(m.group(0)));
        }

        // Get show id
        m.reset(showInfo[REMOVE_LINK]);
        m.find();
        id = Integer.decode(m.group(0));

        // Get new episode info
        newEpisode.setName(showInfo[NEW_EPISODE_NAME]);
        m.reset(showInfo[NEW_EPISODE]);
        m.find();
        newEpisode.setSeason(Integer.parseInt(m.group(0)));
        m.find();
        newEpisode.setNumber(Integer.parseInt(m.group(0)));

        m = Pattern.compile("[0-9]+[-][a-wA-W]+[-][0-9]+").matcher(showInfo[NEW_EPISODE]);
        m.find();
        newEpisode.setAirDate(m.group(0));

        System.out.println("\t" + this);
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public int getId() {
        return id;
    }

    @Override
    public String toString() {
        return name + " (Last watched: " + lastEpisode + ") / " + status + " next episode: " + newEpisode;
    }
}
