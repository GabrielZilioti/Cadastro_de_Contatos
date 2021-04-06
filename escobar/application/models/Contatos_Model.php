<?php
    class Contatos_Model extends CI_Model{

        public $id;
        public $nome;
        public $telefone;
        public $email;
        public $pais;
        public $cidade;
        public $estado;
        public $rua;
        public $cep;
        public $bairro;


        public function buscarTodos() {
            //SELECT * FROM contatos
            $dados = $this->db->query("SELECT * FROM contatos WHERE validar = '0'");
            
            return $dados->result();

        }
        public function salvarNew($linha){
            $this->db->insert('contatos',$linha);
        }
        //Contatos_Model
        public function buscarId($id){
            $sql = "SELECT  * FROM contatos WHERE id = $id";    
            $retorno = $this->db->query($sql);

            return $retorno->result();
        }
        public function salvarAlterar($id,$nome,$telefone,$email,$pais,$cidade,$estado,$cep,$bairro){
            $this->db->where("id", $id);
            $this->db->set("nome", $nome);
            $this->db->set("telefone", $telefone);
            $this->db->set("email", $email);
            $this->db->set("pais", $pais);
            $this->db->set("cidade", $cidade);
            $this->db->set("estado", $estado);
            $this->db->set("cep", $cep);
            $this->db->set("bairro", $bairro);
            $this->db->update("contatos");  
        }
        //Model Delete
        public function apagarContato($id){
            
            $this->db->where('id', $id);
            $this->db->delete('contatos');
        }
        public function endereco() {
            
            $dados = $this->db->query("SELECT nome, rua, bairro, cep, cidade, estado, pais FROM contatos" );
            
            return $dados->result();
        }
    }
?>