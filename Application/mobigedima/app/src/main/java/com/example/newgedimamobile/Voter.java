package com.example.newgedimamobile;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Voter extends AppCompatActivity {
    EditText editCode = null;
    EditText editMail = null;
    EditText editNom = null;
    Button btnValide = null;
    Button btnVote = null;
    GedimaginationDAO bdd;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_voter);
        editCode = (EditText) findViewById(R.id.editCode);
        editMail = (EditText) findViewById(R.id.editMail);
        editNom = (EditText) findViewById(R.id.editNom);
        btnValide = (Button) findViewById(R.id.valider);
        Intent i = getIntent();
        btnValide.setOnClickListener(listener_valider);
        btnVote = (Button) findViewById(R.id.vote);
        btnVote.setOnClickListener(listener_vote);


    }

    public View.OnClickListener listener_valider = new View.OnClickListener() {
        public void onClick(View view) {

            switch (view.getId()){
                case R.id.valider:
                    String code_votant = editCode.getText().toString();
                    String mail = editMail.getText().toString();
                    String nom = editNom.getText().toString();

                Votant v  = new Votant();
                v.setCode(code_votant);
                v.setMail(mail);
                v.setNom(nom);
                bdd = new GedimaginationDAO(Voter.this);
                bdd.ajouterVotant(v);

            }
        }
    };
    private View.OnClickListener listener_vote= new View.OnClickListener() {
        public void onClick(View v) {
            Intent voter = new Intent(Voter.this, Vote.class);
            startActivity(voter);
        }
    };
}

