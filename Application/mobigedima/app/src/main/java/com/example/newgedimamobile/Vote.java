package com.example.newgedimamobile;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.Spinner;

import java.util.ArrayList;

public class Vote extends AppCompatActivity {

    Spinner spinnerRealisation = null;
    Spinner spinnerNbJaime =  null;
    GedimaginationDAO bdd;


    private ArrayList<String> lesRealisations = new ArrayList<String>();
    private String[] lesNbJaimes = {"1","2","3","4","5"};
//    private ArrayList<String> lesNbJaimes= new ArrayList<>();


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_vote);
        bdd = new GedimaginationDAO(Vote.this);
        spinnerRealisation = (Spinner)findViewById(R.id.Choix1);
        spinnerNbJaime = (Spinner)findViewById(R.id.nbJaime1);

        spinnerRealisation2 = (Spinner)findViewById(R.id.Choix2);
        spinnerNbJaime2 = (Spinner)findViewById(R.id.nbJaime2);

      /*  lesNbJaimes.add("1");
        lesNbJaimes.add("2");
        lesNbJaimes.add("3");
        lesNbJaimes.add("4");
        lesNbJaimes.add("5");*/
        ChargerSpinner();


    }
    private void ChargerSpinner(){

        Cursor curseurTous = bdd.selectionnerToutesLesRealisation();
        for(curseurTous.moveToFirst(); !curseurTous.isAfterLast(); curseurTous.moveToNext()) {
            @SuppressLint("Range")
            String realisation = curseurTous.getString(curseurTous.getColumnIndex("id_realisation"));
            lesRealisations.add(realisation);

        }
        spinnerRealisation.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item,lesRealisations));
        spinnerNbJaime.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, lesNbJaimes));
    }
}