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
                                  <div class="dados-cliente form-group col-md-12">
                                    <label for="" style="color: #77787a;">Descrição:</label>
                                    <br>
                                    <textarea class="form-control" name="descricao" id="descricao" cols="5" rows="3"></textarea>
                                  </div>
                                  <div class="dados-cliente form-group col-md-6">
                                    <label for="" style="color: #77787a;">Valor :</label>
                                    <br>
                                    <input type="number" class="form-control" id="valor" name="valor" value="">
                                  </div>
                                  <div class="dados-cliente form-group col-md-6">
                                    <label for="" style="color: #77787a;">Duração:</label>
                                    <br>
                                    <input style="font-size:14px" type="time" class="form-control" id="duracao" name="duracao" value="">
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