<!--
BOTÃO NOVO (DESATIVADO) NO TOPO DA TABELA
<a href='<?php echo base_url(); ?>/contatos/novo' class="btn btn-success mr-2">Novo</a>
 -->
<table class="table table-hover">
<h2 class="card-title">Contatos:</h2>
    <thead>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td colspan='2'>Opções</td>
    </thead>
    <tbody>
        <?php
    
        
        foreach ($contatos as $linha) {
            
            echo 
                "<tr>" .
                "<td>" . $linha->nome . "</td>" .
                "<td>" . $linha->email . "</td>" .
                "<td>" . $linha->telefone . "</td>" .
                "<td>" .
                "<a class='btn btn-warning btn-fw'   href='/contatos/alterar/" . $linha->id . "'>" .
                "Alterar" .
                "</a>"  .
                "</td>" .
                "<td>" .
                "<a class='btn btn-danger btn-fw'   href='/contatos/apagarContato/" . $linha->id . "'>" .
                "Excluir" .
                "</a>"  .
                "</td>" .
                "</tr>";
        }
        ?>
    </tbody>

</table>
