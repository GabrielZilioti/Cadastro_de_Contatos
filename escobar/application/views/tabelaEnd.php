 <table class="table table-hover">
<h2 class="card-title">Endereço:</h2>
    <thead>
        <td>Nome</td>
        <td>Rua</td>
        <td>Bairro</td>
        <td>CEP</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Pais</td>
    </thead>
    <tbody>
        <?php
        
        
        foreach ($contatos as $linha) {
            
            echo 
                "<tr>" .
                "<td>" . $linha->nome . "</td>" .
                "<td>" . $linha->rua . "</td>" .
                "<td>" . $linha->bairro . "</td>" .
                "<td>" . $linha->cep . "</td>" .
                "<td>" . $linha->cidade . "</td>" .
                "<td>" . $linha->estado . "</td>" .
                "<td>" . $linha->pais . "</td>" .
                // "<td>" .
                // "<a class='btn btn-warning btn-fw'   href='/contatos/alterar/" . $linha->id . "'>" .
                // "Alterar" .
                // "</a>"  .
                // "</td>" .
                // "<td>" .
                // "<a class='btn btn-danger btn-fw'   href='/contatos/apagarContato/" . $linha->id . "'>" .
                // "Excluir" .
                // "</a>"  .
                // "</td>" .
                "</tr>";
        }
        ?>
    </tbody>

</table>
