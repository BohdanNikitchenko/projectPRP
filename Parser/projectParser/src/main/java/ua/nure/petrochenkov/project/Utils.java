package ua.nure.petrochenkov.project;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;

import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Utils {

    static public Document getPage(String url) throws IOException {
        Document page = Jsoup.parse(new URL(url), 30000);
        return page;
    }

    public static String getLinkFromString(String stringDate, String url, String oldUrl) throws Exception {
        Pattern pattern = Pattern.compile(url);
        Matcher matcher = pattern.matcher(stringDate);
        if(matcher.find()){
            return oldUrl + matcher.group(1);
        }
        return "";

    }



    public static String getGlobalName(String include) throws Exception {
        Pattern pattern = Pattern.compile("(?Us)([а-яА-я].*[а-яА-я])");
        Matcher matcher = pattern.matcher(include);
        if(matcher.find()){
            return  matcher.group(1);
        }
        throw new Exception("404");
    }

}
