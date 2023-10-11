<style>
label{
    color:black;
}
</style>

<br>

<div>
    <div class="container-fluid">
      <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">

              <div>
                <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold">Cadastro de Cliente</h3>
                <br>
              </div>

             <!-- FORMULÁRIO  -->
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="" role="tabpanel">
                  <form action="">
                    <div class="p-3 bg-white">
                      <div class="row">
                        <div class="col-12">
                          <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                            <div>
                              <legend class="form-group" style="color: white; font-size: 18px;">
                                <strong>Dados Pessoais</strong>
                              </legend>
                            </div>
                          </fieldset>
                          <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                            <div class="row">
                              <div style="margin-left:10px;"></div>

                              <div class="col">
                                <div class="row">
                                    
                                  
                                  <div class="form-group col-md-6">
                                    <label for="" style="color: #77787a;">Nome:</label>
                                    <br>
                                    <input style="font-size:14px" type="text" class="form-control" id="nome" name="nome" value="" disabled="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-6">
                                    <label for="" style="color: #77787a;">CPF:</label>
                                    <br>
                                    <input type="text" class="form-control" id="cpd" name="cpf" disabled="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-4">
                                    <label for="" style="color: #77787a;">Data Nasc.:</label>
                                    <br>
                                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="" disabled="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-2">
                                    <label for="" style="color: #77787a;">Sexo:</label>
                                    <br>
                                    <input style="font-size:14px" type="text" class="form-control" id="sexo" name="sexo" value="" disabled="">
                                  </div>
                                  <div class="dados-cliente col-md-6">
                                    <label for="" style="color: #77787a;">Celular:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="celular" name="celular" value="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="dados-cliente col-md-3">
                                    <label for="" style="color: #77787a;">CEP:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="cep" name="cep" value="">
                                  </div>
                                  <div class="dados-cliente col-md-7">
                                    <label for="" style="color: #77787a;">Logradouro:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="logradouro" name="logradouro" value="">
                                  </div>
                                  <div class="dados-cliente col-md-2">
                                    <label for="" style="color: #77787a;">N°:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="numero" name="numero" value="">
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="dados-cliente col-md-5">
                                    <label for="" style="color: #77787a;">Complemento:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="complemento" name="complemento" value="">
                                  </div>
                                  <div class="dados-cliente col-md-7">
                                    <label for="" style="color: #77787a;">Bairro:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="bairro" name="bairro" value="">
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="dados-cliente col-md-7">
                                    <label for="" style="color: #77787a;">Cidade:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="cidade" name="cidade" value="">
                                  </div>
                                  <div class="dados-cliente col-md-5">
                                    <label for="" style="color: #77787a;">UF:</label>
                                    <input style="font-size:14px" type="text" class="form-control" id="uf" name="uf" value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <br>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>