<?php

class Contatos extends CI_Controller
{

    public function index()
    {

        $this->load->model("Contatos_Model");


        $contatos = $this->Contatos_Model->buscarTodos();

        $pacote = array(
            "contatos" => $contatos,
            "pagina" => "tabela.php"
        );

        $this->load->view("index", $pacote);
    }




    //Controller Criar contato
    public function novo()
    {
        $pacote = array(
            "pagina" => "contatoNovo.php"
        );
        $this->load->view("index", $pacote);
    }
    //Controller Salvar Novo
    public function salvarNovo()
    {
        $dados = array(
            'nome' => $_POST['nome'],
            'telefone' => $_POST['telefone'],
            'email' => $_POST['e-mail'],
            'cidade' => $_POST['cidade'],
            'estado' => $_POST['estado'],
            'rua' => $_POST['rua'],
            'cep' => $_POST['cep'],
            'bairro' => $_POST['bairro'],
            'pais' =>$_POST['pais']
        );
        $this->load->model("Contatos_Model");
        $this->Contatos_Model->salvarNew($dados);


        redirect('contatos');
    }
    //Controller Alterar
    public function alterar($identificador)
    {
        $this->load->model("Contatos_Model");

        $contato = $this->Contatos_Model->buscarId($identificador);
        $pacote = array(
            "contato" => $contato,
            "pagina" => "contatoAlterar.php"
        );
        $this->load->view('index', $pacote);
    }
    //Controller Salvar
    public function salvarAlterar(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];

        $this->load->model("Contatos_Model");
        $this->Contatos_Model->salvarAlterar($id, $nome, $telefone, $email, $rua, $bairro, $cep, $cidade, $estado, $pais );
        redirect("contatos");
    }
    //Controller Excluir
    public function apagarContato($id){
        $this->load->model("Contatos_Model");
        $this->Contatos_Model->apagarContato($id);
        redirect("contatos");
        
    }
    public function endereco()
    {

        $this->load->model("Contatos_Model");


        $tbendereco = $this->Contatos_Model->endereco();

        $pacote = array(
            "contatos" => $tbendereco,
            "pagina" => "tabelaEnd.php"
        );

        $this->load->view("index", $pacote);
    }

}
