package com.example.newgedimamobile;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

public class GedimaginationDAO {

    private SQLiteDatabase maBase;
    private GedimaginationHelper maGedimaginationHelper;

    public GedimaginationDAO(Context context) {
        maGedimaginationHelper = new GedimaginationHelper(context);
        maBase = maGedimaginationHelper.getWritableDatabase();
    }

    public Cursor selectionnerToutesLesRealisation() {
        Cursor curseurContact = maBase.rawQuery("SELECT titre_rea, description_rea, id_realisation from Realisation", new String[]{});
        return curseurContact;
    }

    public void ajouterRealisation(Realisation uneRealisation) {
        //création d'un ContentValues
        ContentValues v = new ContentValues();
        // ajout des propriétés au ContentValues
        v.put("id_realisation", uneRealisation.getId());
        v.put("titre_rea", uneRealisation.getTitre());
        v.put("description_rea", uneRealisation.getDescription());
        // ajout du réalisation dans la table
        maBase.insert("realisation", null, v);
    }

}