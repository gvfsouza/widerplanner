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
                <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold">Cadastro Serviço</h3>
                <br>
              </div>

              <!-- FORMULÁRIO  -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="" role="tabpanel">
                  <form action="">
                    <div class="p-3 bg-white">
                      <div class="row">
                        <div class="col-12">
                          <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                            <div class="row">
                              <div style="margin-left:10px;"></div>

                              <div class="col">
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="" style="color: #77787a;">Foto:</label>
                                    <br>
                                    <input style="font-size:14px" type="file" class="form-control" id="foto" name="foto" value="">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="" style="color: #77787a;">Nome do Serviço:</label>
                                    <br>
                                    <input style="font-size:14px" type="text" class="form-control" id="nome" name="nome" value="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-6">
                                    <label for="" style="color: #77787a;">Descrição:</label>
                                    <br>
                                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                                  </div>
                                  <div class="dados-cliente form-group col-md-4">
                                    <label for="" style="color: #77787a;">Data Nasc.:</label>
                                    <br>
                                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-2">
                                    <label for="" style="color: #77787a;">Sexo:</label>
                                    <br>
                                    <input style="font-size:14px" type="text" class="form-control" id="sexo" name="sexo" value="" disabled="">
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
      </div>