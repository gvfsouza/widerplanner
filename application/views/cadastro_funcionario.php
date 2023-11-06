<div class="container-fluid" style="margin-top:30px">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: white;">

            <div>
                <h3 style="font-size: 25px;">Cadastro de Profissional</h3><br>
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
                                                    <div class="form-group col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>Foto:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="file" class="form-control" id="foto" name="foto" value="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="" style="color: #4e4e4e;"><b>Nome Completo:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="nome_funcionario" name="nome_funcionario" value="">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>CPF:</b></label>
                                                        <span id="cpfUsuario"></span>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="cpf_usuario" name="cpf_usuario" onkeydown="mascara(this,cpf)" maxlength="14" onkeyup="cpfCheck(this)" value="">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>Data Nasc.:</b></label>
                                                        <br>
                                                        <input type="date" class="form-control" id="dt_nasc_usuario" name="dt_nasc_usuario" value="">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>Sexo:</b></label>
                                                        <select name="sexo_usuario" id="sexo_usuario" class="form-control" style="cursor: pointer;" required>
                                                            <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                            <option value="Feminino">Feminino</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Prefiro não dizer">Prefiro não dizer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>E-mail:</b></label>
                                                        <span id="emailResponsavel"></span>
                                                        <br>
                                                        <input style="font-size:14px" type="email" class="form-control" id="email_usuario" name="email_usuario" maxlength="60" onblur="validacaoEmail(this)" required>
                                                        <div id="emailErro" style="color: red;"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>Telefone:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="telefone_usuario" name="telefone_usuario" value="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="color: #4e4e4e;"><b>Serviço:</b></label>
                                                        <br>
                                                        <select name="fk_servico[]" class="form-control adicionar_servico" style="cursor: pointer;" required>
                                                            <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                            <option value="opcao1">Opção 1</option>
                                                            <option value="opcao2">Opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3" style="margin-top: 30px;">
                                                        <span style="width: 160px" title="addServico" class="btn btn-primary" onclick="adicionarCampo()">Adicionar Serviço</span>
                                                        <span style="width: 100px" title="removerServico" class="btn btn-danger" onclick="removerCampo(this) ">Remover</span>
                                                    </div>
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
                                                        <label for="" style="color: #4e4e4e;"><b>CEP:</b></label>
                                                        <input type="text" class="form-control cep" id="cep_usuario" name="cep_usuario" onkeypress="mascara(this, cep)" oninput="formatarCep(this)" maxlength="9" value="" style="font-size:14px">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label for="" style="color: #4e4e4e;"><b>Logradouro:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="logradouro_usuario" name="logradouro_usuario" value="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>N°:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="numero_usuario" name="numero_usuario" value="">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Complemento</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="complemento_usuario" name="complemento_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Bairro</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Cidade:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" value="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>UF:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="estado_usuario" name="estado_usuario" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="text-right">
                            <button href="<?php echo base_url(); ?>/cadastro_funcionario/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
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

    function is_cpf(c) {
        if ((c = c.replace(/[^\d]/g, "")).length == 14) {
            cnpj = c;
            cnpj = cnpj.replace(/[^\d]+/g, '');

            if (cnpj == '') return false;

            if (cnpj.length != 14)
                return false;

            // Elimina CNPJs invalidos conhecidos
            if (cnpj == "00000000000000" ||
                cnpj == "11111111111111" ||
                cnpj == "22222222222222" ||
                cnpj == "33333333333333" ||
                cnpj == "44444444444444" ||
                cnpj == "55555555555555" ||
                cnpj == "66666666666666" ||
                cnpj == "77777777777777" ||
                cnpj == "88888888888888" ||
                cnpj == "99999999999999")
                return false;

            // Valida DVs
            tamanho = cnpj.length - 2
            numeros = cnpj.substring(0, tamanho);
            digitos = cnpj.substring(tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0))
                return false;

            tamanho = tamanho + 1;
            numeros = cnpj.substring(0, tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1))
                return false;

            return true;
        } else {
            if ((c = c.replace(/[^\d]/g, "")).length != 11)
                return false

            if (c == "00000000000")
                return false;

            var r;
            var s = 0;

            for (i = 1; i <= 9; i++)
                s = s + parseInt(c[i - 1]) * (11 - i);

            r = (s * 10) % 11;

            if ((r == 10) || (r == 11))
                r = 0;

            if (r != parseInt(c[9]))
                return false;

            s = 0;

            for (i = 1; i <= 10; i++)
                s = s + parseInt(c[i - 1]) * (12 - i);

            r = (s * 10) % 11;

            if ((r == 10) || (r == 11))
                r = 0;

            if (r != parseInt(c[10]))
                return false;

            return true;
        }
    }

    //VERIFICA SE O CPF É VÁLIDO OU NÃO
    cpfCheck = function(el) {
        document.getElementById('cpfUsuario').innerHTML = is_cpf(el.value) ? '<span style="color:green">Válido</span>' : '<span style="color:red">Inválido</span>';
        if (el.value == '') document.getElementById('cpfUsuario').innerHTML = '';
    }

    // Função para formatar o CEP (removendo caracteres não numéricos)
    function formatarCep(cep) {
        return cep.replace(/\D/g, '');
    }

    // Função para buscar e preencher os campos de endereço
    function preencherEndereco() {
        var cep = formatarCep(document.getElementById('cep_usuario').value);

        if (cep.length === 8) {
            // Fazer a consulta à API ViaCEP
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(data) {
                if (!data.erro) {
                    document.getElementById('logradouro_usuario').value = data.logradouro;
                    document.getElementById('bairro_usuario').value = data.bairro;
                    document.getElementById('cidade_usuario').value = data.localidade;
                    document.getElementById('estado_usuario').value = data.uf;
                }
            });
        }
    }

    // Evento que dispara a consulta ao preencher o CEP
    document.getElementById('cep_usuario').addEventListener('blur', preencherEndereco);

    // Validação E-mail de usuários
    function validacaoEmail(input) {
        var email = input.value.trim(); // Remova os espaços em branco no início e no fim do e-mail
        var emailErro = document.getElementById('emailErro');

        // Padrão de expressão regular para validar o formato de e-mail
        var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (!regex.test(email)) {
            emailErro.innerHTML = 'Por favor, insira um endereço de e-mail válido.';
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
        } else {
            emailErro.innerHTML = '';
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        }
    }

    // Função para formatar o número de telefone
    function formatarTelefone(input) {
        const numeroTelefone = input.value.replace(/\D/g, '');
        const tamanhoNumeroTelefone = numeroTelefone.length;

        if (tamanhoNumeroTelefone === 0) {
            input.value = '';
        } else if (tamanhoNumeroTelefone <= 2) {
            input.value = '(' + numeroTelefone;
        } else if (tamanhoNumeroTelefone <= 6) {
            input.value = '(' + numeroTelefone.substring(0, 2) + ') ' + numeroTelefone.substring(2);
        } else if (tamanhoNumeroTelefone <= 10) {
            input.value = '(' + numeroTelefone.substring(0, 2) + ') ' + numeroTelefone.substring(2, 6) + '-' + numeroTelefone.substring(6);
        } else {
            input.value = '(' + numeroTelefone.substring(0, 2) + ') ' + numeroTelefone.substring(2, 7) + '-' + numeroTelefone.substring(7, 11);
        }
    }

    // Obter os elementos de input dos telefones
    const inputTelefone_usuario = document.getElementById('telefone_usuario');

    // Adicionar event listeners para mudanças nos inputs dos telefones
    inputTelefone_usuario.addEventListener('input', function() {
        formatarTelefone(this);
    });
    // FIM DO FORMATA NÚMERO
</script>