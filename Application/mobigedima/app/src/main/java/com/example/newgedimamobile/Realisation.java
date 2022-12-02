package com.example.newgedimamobile;


public class Realisation {
    // attributs privés
    private String realisation;
    private String titre;
    private String description;

    // constructeurs
    public Realisation() {}

    public Realisation(String id_realisation, String titre_rea, String description_rea) {
        this.realisation = id_realisation;
        this.titre = titre_rea;
        this.description = description_rea;
    }
    public String getId() {return this.realisation;}
    public String getTitre() {return this.titre;}
    public String  getDescription() {return this.description;}
}