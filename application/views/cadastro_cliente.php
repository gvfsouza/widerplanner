<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
  }

  body {

    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #879bc942;
  }

  .container {
    background-color: white;
    padding: 6px;
    width: 350px;
    height: 450px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 0 20px 0 darkgrey;
  }

  form {
    position: absolute;
    margin-top: 80px;
    transition: 0.5s;
    width: 300px;
    height: 400px;
  }

  .buttonsForm {
    margin-top: 40px;
    position: relative;
    border-radius: 5px;
    box-shadow: 0 0 7px 0 #879bc9;
  }

  .buttonsForm button {
    cursor: pointer;
    background: transparent;
    border: none;
    position: relative;
    padding: 10px 29px;
  }

  .btnColor {
    position: absolute;
    width: 108px;
    height: 100%;
    background: #879bc9;
    border-radius: 5px;
    transition: 0.3s;
  }

  input[type="text"],
  input[type="password"] {
    border: none;
    margin-top: 10px;
    border-radius: 5px;
    padding: 8px 0 8px 35px;
    outline: none;
    width: 100%;
    box-shadow: 0 0 7px 0 #879bc994;
  }

  button[type="submit"] {
    background: #879bc9;
    color: white;
    border-radius: 5px;
    width: 100%;
    border: none;
    outline: none;
    padding: 8px 0 8px 15px;
    font-size: 15px;
    margin-top: 40px;
    cursor: pointer;
  }

  .divCheck {
    margin: 10px 0 0 5px;
    width: 80%;
    font-size: 13px;
  }

  i {
    position: absolute;
    left: 0;
    padding: 10px 10px;
  }

  .iPassword {
    top: 114px;
  }

  .iPassword2 {
    top: 190px;
  }

  label{
    color: #879BC9;
  }

  a{
    text-decoration: none;
  }
</style>

<div class="container">
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