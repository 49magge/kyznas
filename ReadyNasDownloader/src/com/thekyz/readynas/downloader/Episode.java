package com.thekyz.readynas.downloader;

/**
 * User: Kyz
 * Date: 31 oct. 2010
 * Time: 17:24:29
 */
public class Episode {
    private String downloadLink = "";
    private String airDate = "";
    private String name = "";
    private String showName = "";
    private int season = 0;
    private int number = 0;

    public Episode() {
    }

    public String getShowName() {
        return showName;
    }

    public void setShowName(String showName) {
        this.showName = showName;
    }

    public String getDownloadLink() {
        return downloadLink;
    }

    public void setDownloadLink(String downloadLink) {
        this.downloadLink = downloadLink;
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
