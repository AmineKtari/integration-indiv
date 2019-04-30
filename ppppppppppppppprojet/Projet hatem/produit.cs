using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Projet
{
    #region Produit
    public class Produit
    {
        #region Member Variables
        protected int _Ref;
        protected string _Nom;
        protected string _Categorie;
        protected string _Description;
        protected int _Quantite;
        protected long _Image;
        protected unknown _Prix;
        #endregion
        #region Constructors
        public Produit() { }
        public Produit(string Nom, string Categorie, string Description, int Quantite, long Image, unknown Prix)
        {
            this._Nom=Nom;
            this._Categorie=Categorie;
            this._Description=Description;
            this._Quantite=Quantite;
            this._Image=Image;
            this._Prix=Prix;
        }
        #endregion
        #region Public Properties
        public virtual int Ref
        {
            get {return _Ref;}
            set {_Ref=value;}
        }
        public virtual string Nom
        {
            get {return _Nom;}
            set {_Nom=value;}
        }
        public virtual string Categorie
        {
            get {return _Categorie;}
            set {_Categorie=value;}
        }
        public virtual string Description
        {
            get {return _Description;}
            set {_Description=value;}
        }
        public virtual int Quantite
        {
            get {return _Quantite;}
            set {_Quantite=value;}
        }
        public virtual long Image
        {
            get {return _Image;}
            set {_Image=value;}
        }
        public virtual unknown Prix
        {
            get {return _Prix;}
            set {_Prix=value;}
        }
        #endregion
    }
    #endregion
}