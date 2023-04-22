<div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color: white;">

        <div>
            <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold">Perfil</h3>
            <br>
        </div>

        <!-- FORMULÁRIO  -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="" role="tabpanel">
                <form action="">
                    <div class="p-3 bg-white">
                        <div class="row">
                            <div class="col-12">
                                <fieldset class="form-group"
                                    style="border: 1px solid #ddd; border-radius: 4px; padding: 15px;">
                                    <div>
                                        <legend class="form-group col-md-4" style="font-size: 18px; color: #508fc0">
                                            <strong>Dados Pessoais</strong>
                                        </legend>
                                    </div>
                                    <div class="row">
                                        <div style="margin-left:10px;"></div>

                                        <div class="col">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Nome:</label>
                                                    <br>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="nome" name="nome" value="" disabled="">
                                                </div>
                                                <div class="dados-cliente form-group col-md-6">
                                                    <label for="">CPF:</label>
                                                    <br>
                                                    <input type="text" class="form-control" id="cpd" name="cpf"
                                                        disabled="">
                                                </div>
                                                <div class="dados-cliente form-group col-md-4">
                                                    <label for="">Data Nasc.:</label>
                                                    <br>
                                                    <input type="date" class="form-control" id="dt_nascimento"
                                                        name="dt_nascimento" value="" disabled="">
                                                </div>
                                                <div class="dados-cliente form-group col-md-2">
                                                    <label for="">Sexo:</label>
                                                    <br>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="sexo" name="sexo" value="" disabled="">
                                                </div>
                                                <div class="dados-cliente col-md-6">
                                                    <label for="">Celular:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="celular" name="celular" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="dados-cliente col-md-3">
                                                    <label for="">CEP:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="cep" name="cep" value="" disabled="">
                                                </div>
                                                <div class="dados-cliente col-md-7">
                                                    <label for="">Logradouro:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="logradouro" name="logradouro" value="" disabled="">
                                                </div>
                                                <div class="dados-cliente col-md-2">
                                                    <label for="">N°:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="numero" name="numero" value="" disabled="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="dados-cliente col-md-5">
                                                    <label for="">Complemento:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="complemento" name="complemento" value="">
                                                </div>
                                                <div class="dados-cliente col-md-7">
                                                    <label for="">Bairro:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="bairro" name="bairro" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="dados-cliente col-md-7">
                                                    <label for="">Cidade:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="cidade" name="cidade" value="">
                                                </div>
                                                <div class="dados-cliente col-md-5">
                                                    <label for="">UF:</label>
                                                    <input style="font-size:14px" type="text" class="form-control"
                                                        id="uf" name="uf" value="" disabled="">
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





<style>
    .wrapper {
        width: 600px;
        min-width: 300px;
        max-width: 100%;
        margin: auto;
    }

    form {
        margin: 10px;
    }

    form legend:hover {
        cursor: pointer;
    }

    form legend:hover i.edit {
        display: inline-block;
    }

    form i.edit {
        display: none;
    }

    form .inline label,
    form .inline input {
        float: left;
        width: 100px;
    }

    form .inline input {
        padding: 0;
        border: 0;
        height: auto;
        box-shadow: none;
        background-color: inherit !important;
    }

    form .inline:after {
        content: "";
        display: table;
        clear: both;
    }

    form button {
        font-size: 15px;
        color: white;
        padding: 10px 20px;
        float: right;
        background-color: #19438d;
    }

    fieldset.collapse div,
    fieldset.collapse .row,
    fieldset.collapse .columns,
    fieldset.collapse label {
        display: inline;
        width: auto;
        float: left;
        padding: 0;
    }

    fieldset.collapse .row:after {
        clear: none;
    }

    fieldset.collapse label {
        margin-left: 10px;
    }

    fieldset.collapse input,
    fieldset.collapse .collapsable {
        display: none;
    }

    fieldset.collapse .inline * {
        float: none;
    }

    legend a {
        color: inherit;
    }

    div.success:not(.empty) label {
        color: green;
    }

    div.success:not(.empty) label:after {
        content: " \2714";
    }

    div.error label {
        color: red;
    }

    div.error label:after {
        content: " \2718";
    }
</style>

        <form id="form">
  <div class="input-box">
    <label class="input-label">Username</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
  <div class="input-box">
    <label class="input-label">Password</label>
    <input type="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
  <div class="input-box">
    <label class="input-label">Some other</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
  <div class="input-box active">
    <label class="input-label">Always active</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
  <div class="input-box active-grey">
    <label class="input-label">Always active-grey</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
  <div class="input-box active-grey">
    <label class="input-label">Dropdown/select list</label>
    <select class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)">
      <option value="-1"></option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
  </div>
  <div class="input-box error">
    <label class="input-label">Error input</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>

  <button type="button" class="btn btn-primary pull-right">Button</button>
  <div class="clear"></div>
</form>