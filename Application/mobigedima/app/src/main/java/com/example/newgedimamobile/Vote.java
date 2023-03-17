package com.example.newgedimamobile;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import java.util.ArrayList;

public class Vote extends AppCompatActivity {

    public Spinner spinnerRealisation = null;
    public Spinner spinnerNbJaime =  null;
    public Spinner spinnerRealisation2 = null;
   public  Spinner spinnerNbJaime2 = null;
    public Spinner spinnerRealisation3 = null;
    public Spinner spinnerNbJaime3 = null;

    Button btnValide = null;

    GedimaginationDAO bdd;


    private ArrayList<String> lesRealisations = new ArrayList<String>();
    private Integer[] lesNbJaimes = {1,2,3,4,5};
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


        spinnerRealisation3 = (Spinner)findViewById(R.id.Choix3);
        spinnerNbJaime3 = (Spinner)findViewById(R.id.nbJaime3);
        btnValide = (Button) findViewById(R.id.btnValider);
        btnValide.setOnClickListener(EcouteurBouton);
      /*  lesNbJaimes.add("1");
        lesNbJaimes.add("2");
        lesNbJaimes.add("3");
        lesNbJaimes.add("4");
        lesNbJaimes.add("5");*/
        ChargerSpinner();


    }

    public View.OnClickListener EcouteurBouton = new View.OnClickListener() {
        public void onClick(View view) {
            switch (view.getId()) {
                case R.id.btnValider:
                    Integer nbJaime = Integer.parseInt(spinnerNbJaime.getSelectedItem().toString());
                    Integer nbJaime2 = Integer.parseInt(spinnerNbJaime2.getSelectedItem().toString());
                    Integer nbJaime3 = Integer.parseInt(spinnerNbJaime3.getSelectedItem().toString());
//                    Toast.makeText(getApplicationContext(), nbJaime, Toast.LENGTH_LONG).show();
                    Log.i("nbJaime", String.valueOf(nbJaime));
                    int idreal = Integer.parseInt(spinnerRealisation.getSelectedItem().toString());
                    int idreal2 = Integer.parseInt(spinnerRealisation2.getSelectedItem().toString());
                    int idreal3 = Integer.parseInt(spinnerRealisation3.getSelectedItem().toString());
                    Realisation r = new Realisation();
                    r.setNbJaime(nbJaime);
                    r.setNbJaime(nbJaime2);
                    r.setNbJaime(nbJaime3);
                    Log.i("Infos", r.toString());
                    bdd = new GedimaginationDAO(Vote.this);
                    bdd.ModifierRealisation(r);
                    Toast.makeText(getApplicationContext(),"MODIFICATION NB JAIME", Toast.LENGTH_LONG).show();
            }

        }
    };

    public  void ChargerSpinner() {
        Log.i("charger spinner","ok");
        Cursor curseurTous = bdd.getToutLesIds();
        Log.i("nb",String.valueOf(curseurTous.getCount()));
        for (curseurTous.moveToFirst(); !curseurTous.isAfterLast(); curseurTous.moveToNext()) {
            @SuppressLint("Range")

            String realisation = curseurTous.getString(curseurTous.getColumnIndex("id_realisation"));
            Log.i("realisation", realisation);
            lesRealisations.add(realisation);

        }
        spinnerRealisation.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, lesRealisations));
        spinnerNbJaime.setAdapter(new ArrayAdapter<Integer>(this, android.R.layout.simple_spinner_item, lesNbJaimes));
        spinnerRealisation2.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, lesRealisations));
        spinnerNbJaime2.setAdapter(new ArrayAdapter<Integer>(this, android.R.layout.simple_spinner_item, lesNbJaimes));
        spinnerRealisation3.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item,lesRealisations));
        spinnerNbJaime3.setAdapter(new ArrayAdapter<Integer>(this, android.R.layout.simple_spinner_item,lesNbJaimes));

    }

}