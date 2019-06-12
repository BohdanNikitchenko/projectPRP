package ua.nure.petrochenkov.project;

import com.sun.org.apache.bcel.internal.generic.DADD;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import java.io.IOException;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import static ua.nure.petrochenkov.project.Utils.getLinkFromString;
import static ua.nure.petrochenkov.project.Utils.getPage;

public class parserPageWithSpecialties {

    static DatabaseHandler db = new DatabaseHandler();
// Только дневная форма обучения
    private static void getFullTimeEducation(Element nameEducation, String NameUNI) throws Exception {
        String BMt ="";
        String BRANCHt ="";
        String NAME_SPECt ="";
        String FACULTYt = "";
        String PROPOSITIONt ="";
        String COURSE ="";
        String ID_SPECt="";
        String MARKSt="";

        String MATHSU = "";
        String UHRANIAN_LANGUAGEU = "";
        String ENGLISHU = "";
        String PHYSICSU  = "";
        String HISTORYU = "";
        String BIOLOGYU = "";
        String GEOGRAPHYU  = "";
        String CHEMISTRYU = "";
        String SCHOOLU = "";
        String OTHERU = "";


        String fullTimeEducation = "Денна форма";
        String extramuralStudies = "Заочна форма";
        String minBud = "";
        String minCon = "";
        String[] nameColumn = new String[]{"Спеціальність","Конкурс","Складові конкурсного балу","Link"};
        //переменная которая овечает за смену заочки и дневной формы обучения
        String change = "";
        if(fullTimeEducation.equals(nameEducation.text().substring(0,fullTimeEducation.length()))){
            change="d";
        } else if(extramuralStudies.equals(nameEducation.text().substring(0,fullTimeEducation.length()+1))){
            change="z";
        }
        //Этот костыль отвечает за бакалавра и магистра
        for(int i=1; i<3;i++ ){
        Element tableName = nameEducation.select("div[id="+change+"_o_"+i+"]").first();
        if(tableName!=null) {
            Element tableSpecialties = tableName.select("tbody").first();
            Elements specialties = tableSpecialties.select("tr");
            for (Element specialty : specialties) {
                int index = 0;
                Elements columnsSpecialty = specialty.select("td");
                String link = "";
                for (Element columnSpecialty : columnsSpecialty) {
                    //получить ссылку на специальность
                    if (index == 1) {
                        link = getLinkFromString(columnSpecialty.toString(), "(?Us).*href=\".*(\\/\\d.+?)\"", "http://www.vstup.info/2018");
                        minBud = getMinBudget(link);
                        minCon = getMinContract(link);

                    }
                    if (index == 0) {
                        Pattern pattern = Pattern.compile("(?Us)Зарахування на (\\d) курс");
                        Matcher matcher = pattern.matcher(columnSpecialty.text());
                        if (matcher.find()) {
                            if (matcher.group(1).equals("1")) {
                                COURSE = matcher.group();
                            }
                        }
                        if (COURSE.equals("Зарахування на 1 курс")) {
                            pattern = Pattern.compile("(?Us)(.+?) (\\w+:)");
                            matcher = pattern.matcher(columnSpecialty.text());
                            if (matcher.find()) {
                                BMt = matcher.group(1);

                            }
                            pattern = Pattern.compile("(?Us)Галузь: (.+?) (\\w+:)");
                            matcher = pattern.matcher(columnSpecialty.text());
                            if (matcher.find()) {
                                BRANCHt = matcher.group(1);

                            }
                            pattern = Pattern.compile("(?Us)Спеціальність: (\\d+)(.+?) (\\w+:)+?");
                            matcher = pattern.matcher(columnSpecialty.text());
                            if (matcher.find()) {
                                ID_SPECt = matcher.group(1);
                                NAME_SPECt = matcher.group(2);

                            }
                            pattern = Pattern.compile("(?Us)Факультет: (.+?) (\\w+ \\w++:)");
                            matcher = pattern.matcher(columnSpecialty.text());
                            if (matcher.find()) {
                                FACULTYt = matcher.group(1);

                            }
                            pattern = Pattern.compile("(?Us)Тип пропозиції: (.+) (Зарахування на)");
                            matcher = pattern.matcher(columnSpecialty.text());
                            if (matcher.find()) {
                                PROPOSITIONt = matcher.group(1);

                            }
                        }
                    } else {
                        if (!minBud.equals(minCon) && !minBud.equals("")) {
                        Elements list = columnSpecialty.select("li");
                        for (Element temp : list) {
                            Pattern pattern = Pattern.compile("(.+),.*k=(\\d+.\\d+)");
                            Matcher matcher = pattern.matcher(temp.text());
                            if (matcher.find()) {
                                if (matcher.group(1).equals("Українська мова та література (ЗНО)")) {
                                    UHRANIAN_LANGUAGEU = matcher.group(2);
                                }
                                if (matcher.group(1).equals("Математика (ЗНО)")) {
                                    MATHSU = matcher.group(2);
                                }
                                if (matcher.group(1).equals("Іноземна мова (ЗНО)")) {
                                    ENGLISHU = matcher.group(2);
                                }
                                if (matcher.group(1).equals("Фізика (ЗНО)")) {
                                    PHYSICSU = matcher.group(2);
                                }
                                if (matcher.group(1).equals("Історія України (ЗНО)")) {
                                    HISTORYU = matcher.group(2);

                                }
                                if (matcher.group(1).equals("Біологія (ЗНО)")) {
                                    BIOLOGYU = matcher.group(2);

                                }
                                if (matcher.group(1).equals("Хімія (ЗНО)")) {
                                    CHEMISTRYU = matcher.group(2);
                                }
                                if (matcher.group(1).equals("Географія (ЗНО)")) {
                                    GEOGRAPHYU = matcher.group(2);

                                }
                                if (matcher.group(1).equals("Середній бал документа про освіту")) {
                                    SCHOOLU = matcher.group(2);

                                }
                                if (matcher.group(1).equals("Бал за успішне закінчення підготовчих курсів закладу освіти")) {
                                    OTHERU = matcher.group(2);

                                }
                            }
                        }
                        MARKSt = columnSpecialty.text();
                    }
                    }
                    index++;
                }
                if (!minBud.equals(minCon) && !minBud.equals("") ) {

                    db.signUPLIST(NAME_SPECt, NameUNI, BMt, FACULTYt, PROPOSITIONt, minBud, minCon, MARKSt, ID_SPECt,
                            MATHSU, UHRANIAN_LANGUAGEU, ENGLISHU, PHYSICSU, HISTORYU, BIOLOGYU, GEOGRAPHYU, CHEMISTRYU, SCHOOLU, OTHERU);
                    MATHSU = "";
                    UHRANIAN_LANGUAGEU = "";
                    ENGLISHU = "";
                    PHYSICSU  = "";
                    HISTORYU = "";
                    BIOLOGYU = "";
                    GEOGRAPHYU  = "";
                    CHEMISTRYU = "";
                    SCHOOLU = "";
                    OTHERU = "";
                }
            }
        }

        }
    }




    private static void getFullInfo(Element page, String NAME_UNIt){

        String REGION_Ut = "";
        String CITY_Ut = "";
        String ADDRESS_Ut  = "";
        String INDEX_Ut = "";
        String TYPE_Ut = "";
        String CONTROL_FORM_Ut = "";
        String DIRECTOR_Ut  = "";
        String ORDER_Ut = "";
        String PHONE_Ut = "";
        String WEB_Ut = "";

        Elements tableRow = page.select("tr");
        for(Element Row :  tableRow) {
            Pattern pattern = Pattern.compile("(?Us)(.*:) (.++)");
            Matcher matcher = pattern.matcher(Row.text());
            if (matcher.find()) {
                if ("Тип ВНЗ:".equals(matcher.group(1))) {
                    TYPE_Ut = matcher.group(2);
                }
                if ("Форма власності:".equals(matcher.group(1))) {
                    CONTROL_FORM_Ut = matcher.group(2);
                }
                if ("Керівник:".equals(matcher.group(1))) {
                    DIRECTOR_Ut = matcher.group(2);
                }
                if ("Підпорядкування:".equals(matcher.group(1))) {
                    ORDER_Ut = matcher.group(2);
                }
                if ("Поштовий індекс:".equals(matcher.group(1))) {
                    INDEX_Ut = matcher.group(2);
                }
                if ("Область, населений пункт:".equals(matcher.group(1))) {
                    REGION_Ut = matcher.group(2).substring(0, matcher.group(2).indexOf(','));
                    CITY_Ut = matcher.group(2).substring( matcher.group(2).indexOf(',')+1);

                }
                if ("Адреса:".equals(matcher.group(1))) {
                    ADDRESS_Ut = matcher.group(2);
                }
                if ("Телефони:".equals(matcher.group(1))) {
                    PHONE_Ut = matcher.group(2);
                }
                if ("Веб-сайт:".equals(matcher.group(1))) {
                    WEB_Ut = matcher.group(2);
                }
            }
        }
        db.signUPYNI(REGION_Ut,  CITY_Ut, ADDRESS_Ut, INDEX_Ut,  TYPE_Ut,  CONTROL_FORM_Ut, DIRECTOR_Ut,
                ORDER_Ut, PHONE_Ut,  WEB_Ut, NAME_UNIt);
    }


    private static String getMinBudget(String url) throws IOException {
        String temp_min_budget ="";
        String min_budget ="";
        Document page = getPage(url);
        Element mainTable= page.select("table[class=tablesaw tablesaw-stack tablesaw-sortable]").first();
        Element rowsTable = mainTable.select("tbody").first();
        Elements manyRowTable = rowsTable.select("tr");

        for(Element oneRowTable : manyRowTable){
            Elements manyColumnTable = oneRowTable.select("td");
            int index = -1;
            for(Element oneColumnTable : manyColumnTable){
                index++;
                if(index==3){
                    temp_min_budget=oneColumnTable.text();
                }
                if(index==4){
                    if(oneColumnTable.text().equals("До наказу (бюджет)")){
                        min_budget=temp_min_budget;
                    }
                }
            }
        }
        return min_budget;
    }

    private static String getMinContract(String url) throws IOException {
        String temp_min_contract="";
        String  min_contract="";
        Document page = getPage(url);
        Element mainTable= page.select("table[class=tablesaw tablesaw-stack tablesaw-sortable]").first();
        Element rowsTable = mainTable.select("tbody").first();
        Elements manyRowTable = rowsTable.select("tr");

        for(Element oneRowTable : manyRowTable){
            Elements manyColumnTable = oneRowTable.select("td");
            int index = -1;
            for(Element oneColumnTable : manyColumnTable){
                index++;
                if(index==3){
                    temp_min_contract=oneColumnTable.text();
                }
                if(index==4){
                    if(oneColumnTable.text().equals("До наказу (контракт)")){
                        min_contract=temp_min_contract;
                    }
                }
            }
        }
        return min_contract;
    }

    public static void main(String[] args) throws Exception {
        String NameREG = args[1];
        String NameUNI = args[2];
        //String NameUNI = "123";
        int index = 0;
       String url = args[0];
        //String url = "http://www.vstup.info/2018/i2018i92.html";
        Document page = getPage(url);
        Elements tableName = page.select("div[class=accordion-group]");

        for(Element name : tableName){
            index++;
            if (index == 1){
               getFullInfo(name, NameUNI);
            }
            getFullTimeEducation(name,NameUNI);
        }
    }
}
