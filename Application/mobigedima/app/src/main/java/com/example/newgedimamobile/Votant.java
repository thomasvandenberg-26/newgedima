package com.example.newgedimamobile;

public class Votant {

    private String nom_Votant;
    private String code_Votant;
    private String mail_Votant;

    public Votant(){}

    public Votant( String nom_Votant, String code_Votant, String mail_Votant ){
        this.nom_Votant= nom_Votant;
        this.code_Votant= code_Votant;
        this.mail_Votant = mail_Votant;

    }
    public String getCode() {return this.code_Votant;}
    public String getNom() {return this.nom_Votant;}
    public String  getMail() {return this.mail_Votant;}

}
