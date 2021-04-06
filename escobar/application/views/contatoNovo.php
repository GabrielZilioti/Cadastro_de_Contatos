<form method='POST' action='<?php echo base_url() ?>contatos/salvarNovo'>
  <div class="col-md-8">
    <div class="card">
      <h4 class="card-title">Novo Contato</h4>
    </div>
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Nome</label>
              <input type="text" class="form-control" name='nome'>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Telefone</label>
              <input type="text" class="form-control" name='telefone'>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">E-mail</label>
              <input type="text" class="form-control" name='e-mail'>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Cidade</label>
              <input type="text" class="form-control" name='cidade'>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Bairro</label>
              <input type="text" class="form-control" name='bairro'>
            </div>
          </div>
            <div class="col-md-4">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Estado</label>
                <input type="text" class="form-control" name='estado'>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Rua</label>
                <input type="text" class="form-control" name='rua'>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">CEP</label>
                <input type="text" class="form-control" name='cep'>
              </div>
              </div>
              <div class="col-md-4">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">País</label>
                  <input type="text" class="form-control" name='pais'>
                </div>
              </div>
              <input class="btn btn-success mr-2" type='submit' value='Enviar' />
      </form>
    </div>
  </div>