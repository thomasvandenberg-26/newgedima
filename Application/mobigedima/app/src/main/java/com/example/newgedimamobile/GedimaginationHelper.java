package com.example.newgedimamobile;

import static java.sql.Types.INTEGER;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;


public class GedimaginationHelper extends SQLiteOpenHelper {
    public GedimaginationHelper(Context context) {
        super(context, "baseGedimagination.db", null, 14);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        // création des tables de la base embarquée
        // création de la table Realisation
        db.execSQL("CREATE TABLE  Realisation("
                + "id_realisation INTEGER NOT NULL PRIMARY KEY ,"
                + "titre_rea TEXT NOT NULL,"
                + "description_rea TEXT NOT NULL)");
        db.execSQL("CREATE TABLE Votant("
                + "code_votant INTEGER NOT NULL,"
                + "nom_votant TEXT NOT NULL,"
                + "mail_votant TEXT NOT NULL)");
        db.execSQL("CREATE TABLE Vote("
                + "id_vote INTEGER NOT NULL PRIMARY KEY,"
                + "nbJaime INTEGER NOT NULL PRIMARY KEY)");


    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS Realisation;");
        onCreate(db);
    }

}