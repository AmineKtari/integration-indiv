using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Projet
{
    #region Admins
    public class Admins
    {
        #region Member Variables
        protected int _adminid;
        protected string _AdminLogin;
        protected string _pwd;
        #endregion
        #region Constructors
        public Admins() { }
        public Admins(string AdminLogin, string pwd)
        {
            this._AdminLogin=AdminLogin;
            this._pwd=pwd;
        }
        #endregion
        #region Public Properties
        public virtual int Adminid
        {
            get {return _adminid;}
            set {_adminid=value;}
        }
        public virtual string AdminLogin
        {
            get {return _AdminLogin;}
            set {_AdminLogin=value;}
        }
        public virtual string Pwd
        {
            get {return _pwd;}
            set {_pwd=value;}
        }
        #endregion
    }
    #endregion
}