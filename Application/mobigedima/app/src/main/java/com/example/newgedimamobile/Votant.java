package com.example.newgedimamobile;

public class Votant {

    private String nom_votant;
    private String code_votant;
    private String mail_votant;

    public Votant(){}

    public Votant( String nom_Votant, String code_Votant, String mail_Votant ){
        this.nom_votant= nom_Votant;
        this.code_votant= code_Votant;
        this.mail_votant = mail_Votant;

    }
    public String getCode() {return this.code_votant;}
    public String getNom() {return this.nom_votant;}
    public String  getMail() {return this.mail_votant;}

    public void setCode(String code_votant){
        this.code_votant= code_votant;
    }
    public void setMail(String mail_votant){
        this.mail_votant = mail_votant;
    }
    public void setNom(String nom_votant){
        this.nom_votant = nom_votant;
    }
}
