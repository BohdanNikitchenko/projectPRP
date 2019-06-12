package ua.nure.petrochenkov.project;

import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import static ua.nure.petrochenkov.project.Utils.*;


public class parserPageWithListUniversity {

    //Получаем "Университет"



    public static void main(String[] args) throws Exception {
        //Пример страницы
        String NameREG = args[1];
        Document page = Utils.getPage(args[0]);

        //Получаем "Университет"
        Element tableGlobalName = page.select("div[class=accordion-heading togglize]").first();
        String globalName = getGlobalName(tableGlobalName.text());

        // получаем таблицу с названиями универов (Только универы)
        if(globalName.equals("Університети")) {
            Element tableNamesUniversite = page.select("table[id=vnzt0]").first();
            Elements NamesUniversite = tableNamesUniversite.select("td");
            for(Element nameUni : NamesUniversite){
               String temp = Utils.getLinkFromString(nameUni.toString(),"(?Us).*href=\".*(\\/.+?)\"", "http://www.vstup.info/2018");
               parserPageWithSpecialties.main(new String[]{temp,NameREG,nameUni.text()});
            }
        }
    }
}
