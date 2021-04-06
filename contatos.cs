using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Agenda
{
    #region Contatos
    public class Contatos
    {
        #region Member Variables
        protected int _id;
        protected string _nome;
        protected string _telefone;
        protected string _email;
        protected int _validar;
        protected string _pais;
        protected string _cidade;
        protected string _estado;
        protected string _rua;
        protected string _cep;
        protected string _bairro;
        #endregion
        #region Constructors
        public Contatos() { }
        public Contatos(string nome, string telefone, string email, int validar, string pais, string cidade, string estado, string rua, string cep, string bairro)
        {
            this._nome=nome;
            this._telefone=telefone;
            this._email=email;
            this._validar=validar;
            this._pais=pais;
            this._cidade=cidade;
            this._estado=estado;
            this._rua=rua;
            this._cep=cep;
            this._bairro=bairro;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual string Telefone
        {
            get {return _telefone;}
            set {_telefone=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual int Validar
        {
            get {return _validar;}
            set {_validar=value;}
        }
        public virtual string Pais
        {
            get {return _pais;}
            set {_pais=value;}
        }
        public virtual string Cidade
        {
            get {return _cidade;}
            set {_cidade=value;}
        }
        public virtual string Estado
        {
            get {return _estado;}
            set {_estado=value;}
        }
        public virtual string Rua
        {
            get {return _rua;}
            set {_rua=value;}
        }
        public virtual string Cep
        {
            get {return _cep;}
            set {_cep=value;}
        }
        public virtual string Bairro
        {
            get {return _bairro;}
            set {_bairro=value;}
        }
        #endregion
    }
    #endregion
}