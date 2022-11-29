package com.example.newgedimamobile;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;


public class GedimaginationHelper extends SQLiteOpenHelper {
    public GedimaginationHelper(Context context) {
        super(context, "baseGedimagination.db", null, 1);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        // création des tables de la base embarquée
        // création de la table Realisation
        db.execSQL("CREATE TABLE  Realisation("
                + "id_realisation INTEGER NOT NULL PRIMARY KEY,"
                + "titre_rea TEXT NOT NULL,"
                + "description_rea TEXT NOT NULL,"
                + "nb_jaime INT );");
        db.execSQL("CREATE TABLE  Votant("
                + "bon_votant TEXT NOT NULL ,"
                + "nom_votant TEXT NOT NULL,"
                + "mail_votant TEXT NOT NULL PRIMARY KEY);");
        db.execSQL("CREATE TABLE  Admin("
                + "bon_admin TEXT NOT NULL ,"
                + "nom_admin TEXT NOT NULL,"
                + "mail_admin TEXT NOT NULL PRIMARY KEY);");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS Realisation;");
        db.execSQL("DROP TABLE IF EXISTS Votant;");
        db.execSQL("DROP TABLE IF EXISTS Admin;");
        onCreate(db);
    }

}