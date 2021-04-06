<div class="card-body">
    <h2 class="card-title">Alteração de contatos:</h2>
    

    <form method='POST' action='<?php echo base_url() ?>contatos/salvarALterar'>
        <label> Nome: </label>
        <input type='hidden' name='id' value='<?php echo $contato[0]->id; ?>' />
        <input class="form-control" type='text' name='nome' value='<?php echo $contato[0]->nome; ?>' />
        <br />
        <label> Telefone: </label>
        <input class="form-control" type='text' name='telefone' value='<?php echo $contato[0]->telefone; ?>' />
        <br />
        <label> E-mail: </label>
        <input class="form-control" type='text' name='email' value='<?php echo $contato[0]->email; ?>' />
        <br>
        <label> Rua: </label>
        <input class="form-control" type='text' name='rua' value='<?php echo $contato[0]->rua; ?>' />
        <br>
        <label> Bairro: </label>
        <input class="form-control" type='text' name='bairro' value='<?php echo $contato[0]->bairro; ?>' />
        <br>
        <label> Cidade: </label>
        <input class="form-control" type='text' name='cidade' value='<?php echo $contato[0]->cidade; ?>' />
        <br>
        <label> Estado: </label>
        <input class="form-control" type='text' name='estado' value='<?php echo $contato[0]->estado; ?>' />
        <br>
        <label> CEP: </label>
        <input class="form-control" type='text' name='cep' value='<?php echo $contato[0]->cep; ?>' />
        <br>
        <label> País: </label>
        <input class="form-control" type='text' name='pais' value='<?php echo $contato[0]->pais; ?>' />
        <br>
        <br>
        <input class="btn btn-success mr-2" type='submit' value='Enviar' />
    </form>
</div>

