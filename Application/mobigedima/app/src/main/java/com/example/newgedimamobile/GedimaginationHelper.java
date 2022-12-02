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
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS Realisation;");
        db.execSQL("DROP TABLE IF EXISTS Votant;");
        db.execSQL("DROP TABLE IF EXISTS Admin;");
        onCreate(db);
    }

}