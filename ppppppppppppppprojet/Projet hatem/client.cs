using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Projet
{
    #region Client
    public class Client
    {
        #region Member Variables
        protected int _cin;
        protected string _nom;
        protected string _prenom;
        protected string _sexe;
        protected unknown _date_n;
        protected string _adresse_m;
        protected string _adresse;
        protected int _numero;
        protected string _mot_d_p;
        protected int _points_f;
        #endregion
        #region Constructors
        public Client() { }
        public Client(string nom, string prenom, string sexe, unknown date_n, string adresse_m, string adresse, int numero, string mot_d_p, int points_f)
        {
            this._nom=nom;
            this._prenom=prenom;
            this._sexe=sexe;
            this._date_n=date_n;
            this._adresse_m=adresse_m;
            this._adresse=adresse;
            this._numero=numero;
            this._mot_d_p=mot_d_p;
            this._points_f=points_f;
        }
        #endregion
        #region Public Properties
        public virtual int Cin
        {
            get {return _cin;}
            set {_cin=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Prenom
        {
            get {return _prenom;}
            set {_prenom=value;}
        }
        public virtual string Sexe
        {
            get {return _sexe;}
            set {_sexe=value;}
        }
        public virtual unknown Date_n
        {
            get {return _date_n;}
            set {_date_n=value;}
        }
        public virtual string Adresse_m
        {
            get {return _adresse_m;}
            set {_adresse_m=value;}
        }
        public virtual string Adresse
        {
            get {return _adresse;}
            set {_adresse=value;}
        }
        public virtual int Numero
        {
            get {return _numero;}
            set {_numero=value;}
        }
        public virtual string Mot_d_p
        {
            get {return _mot_d_p;}
            set {_mot_d_p=value;}
        }
        public virtual int Points_f
        {
            get {return _points_f;}
            set {_points_f=value;}
        }
        #endregion
    }
    #endregion
}