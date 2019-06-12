package ua.nure.petrochenkov.project;

import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import static ua.nure.petrochenkov.project.Utils.getLinkFromString;


public class parserPageWithRegionNames {



    public static void main(String[] args) throws Exception {
        // пример
        Document page = Utils.getPage("http://www.vstup.info/");
        Element tableYears = page.select(("div[id=2018region]")).first();
        Elements tableNamesRegion = tableYears.select("tr");
        for (Element name : tableNamesRegion){
            String namesRegion = name.select("td").text();
            if(namesRegion.equals("Запорізька область ")){
                parserPageWithListUniversity.main(new String[]{"http://www.vstup.info/2018/i2018o9.html",namesRegion});
                continue;
            }
            String link = getLinkFromString(name.toString() , "(?Us).*href=\".*(\\/\\d.+?)\"", "http://www.vstup.info");
            System.out.println("1");
            parserPageWithListUniversity.main(new String[]{link,namesRegion});
        }
    }
}
