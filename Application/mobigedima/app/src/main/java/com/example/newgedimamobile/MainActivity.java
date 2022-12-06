package com.example.newgedimamobile;

import android.annotation.SuppressLint;
import android.database.Cursor;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.example.newgedimamobile.GedimaginationDAO;
import com.example.newgedimamobile.Realisation;
import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.AsyncHttpResponseHandler;
import com.loopj.android.http.JsonHttpResponseHandler;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.UnsupportedEncodingException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
public class MainActivity extends AppCompatActivity {
    private GedimaginationDAO maBase;
    private ArrayList<HashMap<String, String>> lesRealisations;
    private Button btnImporter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnImporter = (Button) findViewById(R.id.importer);
        btnImporter.setOnClickListener(listener_importer);
    }

    private View.OnClickListener listener_importer = new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
            try {
                Date dateDebutVote = sdf.parse("2022-03-25");
                Date dateFinIncription = sdf.parse("2022-03-20");
                Date dateJour = sdf.parse("2022-03-24");
                if (dateFinIncription.before(dateJour) && dateDebutVote.   after(dateJour)) {
                    // Requête HTTP GET
                    String url = "http://10.0.2.2/newgedima/Application/realisation.php";
                    AsyncHttpClient request = new AsyncHttpClient();
                    request.get(url, new JsonHttpResponseHandler() {
                        @Override
                        public void onSuccess(int statusCode, cz.msebera.android.httpclient.Header[] headers, JSONArray response) {
                            super.onSuccess(statusCode, headers, response);
                            Log.i("Json", response.toString());
                            maBase = new GedimaginationDAO(MainActivity.this);
                            for (int i = 0; i < response.length(); i++) {
                                try {
                                    String id_realisation = response.getJSONObject(i).getString("id_realisation");
                                    String titre_rea = response.getJSONObject(i).getString("titre_rea");
                                    String description_rea = response.getJSONObject(i).getString("description_rea");
                                    maBase.ajouterRealisation(new Realisation(id_realisation, titre_rea, description_rea));
                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                            }
                            Toast.makeText(getApplicationContext(), "Importation terminée", Toast.LENGTH_LONG).show();

                        }

                        @Override
                        public void onFailure(int statusCode, cz.msebera.android.httpclient.Header[] headers, String responseString, Throwable throwable) {
                            super.onFailure(statusCode, headers, responseString, throwable);
                            Log.i("Erreur", String.valueOf(statusCode) + "Erreur = " + responseString);
                            Toast.makeText(getApplicationContext(), "Echec de l'importation ", Toast.LENGTH_LONG).show();
                        }
                    });
                } else {
                    btnImporter.setEnabled(false);
                    Toast.makeText(getApplicationContext(), "les importations sont fermées veuillez attendre la période d'importation comprise entre la fin des inscriptions et le début des votes ", Toast.LENGTH_LONG).show();
                }
            } catch (ParseException parseException) {
                parseException.printStackTrace();
            }
        }
    };
}