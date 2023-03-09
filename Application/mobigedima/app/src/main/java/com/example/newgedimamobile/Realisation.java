package com.example.newgedimamobile;


public class Realisation {
    // attributs privés
    private String realisation;
    private String titre;
    private String description;
    private Integer nbJaime;
    // constructeurs
    public Realisation() {}

    public void setNbJaime(Integer nbJaime) {
        this.nbJaime = nbJaime;
    }

    public Realisation(String id_realisation, String titre_rea, String description_rea, Integer nbJaime) {
        this.realisation = id_realisation;
        this.titre = titre_rea;
        this.description = description_rea;
        this.nbJaime = nbJaime;
    }
    public String getId() {return this.realisation;}
    public String getTitre() {return this.titre;}
    public String  getDescription() {return this.description;}
    public Integer getNbJaime() {return this.nbJaime;}

}