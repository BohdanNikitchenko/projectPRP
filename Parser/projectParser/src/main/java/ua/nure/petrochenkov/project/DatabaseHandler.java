package ua.nure.petrochenkov.project;

import java.sql.*;

public class DatabaseHandler extends Configs{
    Connection dbConnection;

    public Connection getDbConnection()
        throws ClassNotFoundException, SQLException {
        String connectionString = "jdbc:mysql://" + dbHost + ":" + dbPort +"/" + dbName+"?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";

        Class.forName("com.mysql.cj.jdbc.Driver");

        dbConnection = DriverManager.getConnection(connectionString, dbUser, dbPass);

        return dbConnection;
    }

/*
    public void signUPUser(String name, String age, String mail){
        String insert ="INSERT INTO " + Const.USER_TABLE + "(" +
                Const.USER_NAME + ", " + Const.USER_AGE + ", " +
                Const.USER_MAIL + ")" + "VALUES";
        try {
            Statement prSt = getDbConnection().createStatement();
           prSt.execute(insert + "(\"dawdad\",21,\"dwada\")");
        } catch (SQLException e){
            e.printStackTrace();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }
    }
*/
    public void signUPYNI(String REGION_U, String CITY_U, String ADDRESS_U,String INDEX_U, String TYPE_U, String CONTROL_FORM_U,String DIRECTOR_U,
                          String ORDER_U,String PHONE_U, String WEB_U,String NAME_UNI){
        String insert ="INSERT INTO " + Const.UNI + "(" +
                Const.REGION_U + ", " + Const.CITY_U + ", " +
                Const.ADDRESS_U + ", " + Const.INDEX_U + ", " +
                Const.TYPE_U + ", " + Const.CONTROL_FORM_U + ", " +
                Const.DIRECTOR_U + ", " + Const.ORDER_U+ ", " +
                Const.PHONE_U + ", " + Const.WEB_U + ", " +
                Const.NAME_UNI+
                ")" + "VALUES";
        try {
            Statement prSt = getDbConnection().createStatement();
            prSt.execute(insert + "(\"" + REGION_U +"\",\""+CITY_U+"\",\""+ADDRESS_U+"\",\""+INDEX_U+"\",\""+TYPE_U+"\",\""+CONTROL_FORM_U+"\",\""+DIRECTOR_U+"\",\""+
                    ORDER_U+"\",\""+PHONE_U+"\",\""+WEB_U+"\",\""+NAME_UNI+"\")");
        } catch (SQLException e){
            e.printStackTrace();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }
    }

    public void signUPLIST(String NAME_SPEC, String NAME_UNI, String BM,String FACULTY, String PROPOSITION, String MIN_BUDGET,String MIN_CONTRACT,
                          String MARKS, String ID_SPEC,
                            String MATHSU, String UHRANIAN_LANGUAGEU, String ENGLISHU,String PHYSICSU, String HISTORYU, String BIOLOGYU,String GEOGRAPHYU,
                           String CHEMISTRYU, String SCHOOLU,String OTHERU){
        String insert ="INSERT INTO " + Const.SPEC_IN_UNI + "(" +
                Const.NAME_SPEC + ", " + Const.NAME_UNI + ", " +
                Const.BM + ", " + Const.FACULTY + ", " +
                Const.PROPOSITION + ", " + Const.MIN_BUDGET + ", " +
                Const.MIN_CONTRACT+ ", " + Const.MARKS+ ", " +
                Const.ID_SPEC +", " +
                Const.MATHSU + ", " + Const.UHRANIAN_LANGUAGEU + ", " +
                Const.ENGLISHU + ", " + Const.PHYSICSU + ", " +
                Const.HISTORYU + ", " + Const.BIOLOGYU + ", " +
                Const.GEOGRAPHYU + ", " + Const.CHEMISTRYU + ", " +
                Const.SCHOOLU + ", " + Const.OTHERU +
                ")" + "VALUES";
        try {
            Statement prSt = getDbConnection().createStatement();
            prSt.execute(insert + "(\"" + NAME_SPEC +"\",\""+NAME_UNI+"\",\""+BM+"\",\""+FACULTY+"\",\""+PROPOSITION+"\",\""+MIN_BUDGET+"\",\""+MIN_CONTRACT+"\",\""+
                    MARKS+"\",\""+ ID_SPEC+ "\",\""+MATHSU+"\",\""+UHRANIAN_LANGUAGEU+"\",\""+ENGLISHU+"\",\""+PHYSICSU+"\",\""+HISTORYU+"\",\""+BIOLOGYU+"\",\""+
                    GEOGRAPHYU+ "\",\""+CHEMISTRYU+"\",\""+SCHOOLU+"\",\""+OTHERU+
                    "\")");
        } catch (SQLException e){
            e.printStackTrace();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }
    }

}
