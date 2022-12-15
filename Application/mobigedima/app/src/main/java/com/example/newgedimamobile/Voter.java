package com.example.newgedimamobile;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.database.Cursor;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Spinner;

import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.List;

public class Voter extends AppCompatActivity {
    private ListView ListViewJaime =null;
    private String[] Jaime = {"5","4","3","2","1"};
    private Spinner spinnerJaime = null;
    private Spinner spinnerJaime2 = null;
    private Spinner spinnerJaime3= null;
    private GedimaginationDAO maBase;
    private ArrayList<String>lesRealisations = new ArrayList<>();
    private Spinner spinnerId = null;
    private Spinner spinnerId2 = null;
    private Spinner spinnerId3 = null;
    private Button btnValider;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_voter);
        btnValider = (Button) findViewById(R.id.valider);
        btnValider.setOnClickListener(listener_valider);


        spinnerJaime = (Spinner) findViewById(R.id.listJaime);
        spinnerJaime.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, Jaime));
        spinnerJaime2 = (Spinner) findViewById(R.id.listJaime2);
        // peuplement des items du spinner
        spinnerJaime2.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, Jaime));
        spinnerJaime3 = (Spinner) findViewById(R.id.listJaime3);
        // peuplement des items du spinner
        spinnerJaime3.setAdapter(new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, Jaime));
        spinnerId = (Spinner) findViewById(R.id.listRealisation);
        spinnerId2 = (Spinner) findViewById(R.id.listRealisation2);
        spinnerId3 = (Spinner) findViewById(R.id.listRealisation3);
        maBase = new GedimaginationDAO(Voter.this);
        Cursor curseurTous = maBase.getToutLesIds();

    }
    private View.OnClickListener listener_valider = new View.OnClickListener() {
        @Override
        public void onClick(View v) {

        }
    };
}