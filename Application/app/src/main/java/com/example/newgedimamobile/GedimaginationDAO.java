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

    public Cursor selectionnerToutesLesVotant() {
        Cursor curseurContact = maBase.rawQuery("SELECT id_code, nom_votant, mail_votant from Votant", new String[]{});
        return curseurContact;
    }

    public void ajouterVotant(String bon, String nom, String mail) {
        //création d'un ContentValues
        ContentValues v = new ContentValues();
        // ajout des propriétés au ContentValues
        v.put("bon_votant", bon);
        v.put("nom_votant", nom);
        v.put("mail_votant", mail);
        // ajout un votant dans la table
        maBase.insert("votant", null, v);
    }

    public Cursor getBon(String Bon) {
        Cursor curseurContact = maBase.rawQuery("SELECT count(bon_votant) AS NB from Votant where bon_votant = ?", new String[]{Bon});
        return curseurContact;
    }

    public Cursor getVerification(String mail) {
        Cursor curseurContact = maBase.rawQuery("SELECT bon_admin from Admin where mail_admin = ?", new String[]{mail});
        return curseurContact;
    }
    public void Ajout(String password,String name,String email ){
        ContentValues v = new ContentValues();
        v.put("bon_admin", password);
        v.put("nom_admin", name);
        v.put("mail_admin", email);
        maBase.insert("Admin",null,v);
    }
    public Cursor getToutLesIds() {
        Cursor curseurContact = maBase.rawQuery("SELECT id_realisation from Realisation ", new String[]{});
        return curseurContact;
    }
    public void modifierJaime(String idR, int nbG) {
        //création d'un ContentValues
        String requete = "UPDATE Realisation set nb_jaime = nb_jaime +"+  nbG +" WHERE id_realisation = " + idR + "; ";
        // ajout des propriétés au ContentValues
        maBase.execSQL(requete);
    }
    public Cursor selectionnerNbJaimes() {
        Cursor curseurContact = maBase.rawQuery("SELECT nb_jaime from Realisation ", new String[]{});
        return curseurContact;
    }
}