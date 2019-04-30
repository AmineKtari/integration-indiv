using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Projet
{
    #region Packs
    public class Packs
    {
        #region Member Variables
        protected int _ref;
        protected string _nom;
        protected string _description;
        protected int _quantite;
        protected long _image;
        protected unknown _prix;
        protected int _x;
        protected int _y;
        protected int _z;
        #endregion
        #region Constructors
        public Packs() { }
        public Packs(string nom, string description, int quantite, long image, unknown prix, int x, int y, int z)
        {
            this._nom=nom;
            this._description=description;
            this._quantite=quantite;
            this._image=image;
            this._prix=prix;
            this._x=x;
            this._y=y;
            this._z=z;
        }
        #endregion
        #region Public Properties
        public virtual int Ref
        {
            get {return _ref;}
            set {_ref=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual int Quantite
        {
            get {return _quantite;}
            set {_quantite=value;}
        }
        public virtual long Image
        {
            get {return _image;}
            set {_image=value;}
        }
        public virtual unknown Prix
        {
            get {return _prix;}
            set {_prix=value;}
        }
        public virtual int X
        {
            get {return _x;}
            set {_x=value;}
        }
        public virtual int Y
        {
            get {return _y;}
            set {_y=value;}
        }
        public virtual int Z
        {
            get {return _z;}
            set {_z=value;}
        }
        #endregion
    }
    #endregion
}