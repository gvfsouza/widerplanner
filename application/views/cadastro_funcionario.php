<div class="container-fluid" style="margin-top:30px">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: white;">

            <div>
                <h3 id="dados-cleinte" style="font-size: 25px;"><b>Cadastro de Profissional</b></h3><br>
            </div>

            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                <div><br></div>
            </fieldset>

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
                                                    <div class="form-group col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Foto:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="file" class="form-control" id="foto" name="foto" value="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="" style="color: #4e4e4e;"><b>Nome Completo:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="nome_funcionario" name="nome_funcionario" value="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for=""><b>CPF:</b></label>
                                                        <br>
                                                        <input type="text" class="form-control" id="cpf_usuario" name="cpf_usuario" maxlength="14">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for=""><b>Data Nasc.:</b></label>
                                                        <br>
                                                        <input type="date" class="form-control" id="dt_nasc_usuario" name="dt_nasc_usuario" value="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for=""><b>Sexo:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="sexo_usuario" name="sexo_usuario" value="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for=""><b>E-mail:</b></label>
                                                        <br>
                                                        <input type="email" class="form-control" id="email_usuario" name="email_usuario" value="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for=""><b>Telefone:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="telefone_usuario" name="telefone_usuario" value="">
                                                    </div>
                                                    <div class="col-10">
                                                        <label for="" style="color: #4e4e4e;"><b>Serviço:</b></label>
                                                        <br>
                                                        <select name="fk_servico[]" class="form-control adicionar_servico" style="cursor: pointer;" required>
                                                            <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                            <option value="opcao1">Opção 1</option>
                                                            <option value="opcao2">Opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-2">
                                                        <!-- O botão "Remover" está oculto inicialmente -->
                                                        <button type="button" class="btn btn-danger" style="display: none;" onclick="removerCampo(this)">Remover</button>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" onclick="adicionarCampo()">Adicionar Serviço</button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                        <div class="row">
                                            <div style="margin-left:10px;"></div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for=""><b>CEP:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="cep_usuario" name="cep_usuario" value="">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label for=""><b>Logradouro:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="logradouro_usuario" name="logradouro_usuario" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for=""><b>N°:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="numero_usuario" name="numero_usuario" value="">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for=""><b>Complemento</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="complemento_usuario" name="complemento_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for=""><b>Bairro</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for=""><b>Cidade:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for=""><b>UF:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="uf" name="uf" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>

        <div class="col-12 text-center">
            <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br> Projeto de Conclusão de Curso -
                Superior de Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do
                Patrocínio <br> Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
        </div>
        <br>
    </div>
</div>

<script>
    function adicionarCampo() {
        var divCampos = document.getElementById("campos");
        var campoPrincipal = divCampos.querySelector(".row.form-group");
        var novoCampo = campoPrincipal.cloneNode(true);
        // Torna o botão "Remover" visível no campo adicionado
        novoCampo.querySelector("button").style.display = "block";
        divCampos.appendChild(novoCampo);
    }

    function removerCampo(botaoRemover) {
        var divCampos = document.getElementById("campos");
        var campoParaRemover = botaoRemover.closest(".row.form-group");
        divCampos.removeChild(campoParaRemover);
    }
</script>