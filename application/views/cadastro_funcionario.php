<div class="container-fluid" style="margin-top:30px">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: white;">

            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                <div>
                    <legend class="form-group" style="color: white; font-size: 18px;">
                        <strong>Cadastro Funcionário</strong>
                    </legend>
                </div>
            </fieldset>

            <!-- FORMULÁRIO  -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="" role="tabpanel">

                    <?php if ($this->session->flashdata('sucesso')) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('sucesso'); ?>
                        </div>
                    <?php } ?>
                    <!----------------FIM-----MENSAGEM DE SUCESSO AO CADASTRAR ---------------->

                    <!----------------INICIO-----MENSAGEM DE ERRO AO CADASTRAR ---------------->
                    <?php if ($this->session->flashdata('erro')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('erro'); ?>
                        </div>
                    <?php endif; ?>
                    <!----------------FIM-----MENSAGEM DE ERRO AO CADASTRAR ---------------->

                    <?php if ($this->session->flashdata('success_email')) {    ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $this->session->flashdata('success_email'); ?>
                        </div>
                    <?php } ?>

                    <!-- Mensagem de erro cadastro/e-mail -->
                    <?php if ($this->session->flashdata('error_email')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error_email'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="p-3 bg-white">
                            <div class="row">
                                <div class="col-12">
                                    <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                        <div class="row">
                                            <div style="margin-left:10px;"></div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label style="color: #4e4e4e"><b>Foto:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="file" class="form-control" id="foto_usuario" name="foto_usuario" accept="image/*">
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="" style="color: #4e4e4e;"><b>Nome Completo:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>CPF:</b></label>
                                                        <span id="cpfUsuario"></span>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="cpf_usuario" name="cpf_usuario" onkeydown="mascara(this,cpf)" maxlength="14" onkeyup="cpfCheck(this)" value="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="" style="color: #4e4e4e;"><b>Data Nasc.:</b></label>
                                                        <br>
                                                        <input type="date" max="9999-12-31" class="form-control" id="dt_nasc_usuario" name="dt_nasc_usuario" value="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Sexo:</b></label>
                                                        <select name="sexo_usuario" id="sexo_usuario" class="form-control" style="cursor: pointer;" required>
                                                            <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                            <option value="Feminino">Feminino</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Prefiro não dizer">Prefiro não dizer</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>E-mail:</b></label>
                                                        <span id="emailResponsavel"></span>
                                                        <br>
                                                        <input style="font-size:14px" type="email" class="form-control" id="email_usuario" name="email_usuario" maxlength="60" onblur="validacaoEmail(this)" required>
                                                        <div id="emailErro" style="color: red;"></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="color: #4e4e4e;"><b>Telefone:</b></label>
                                                        <input style="font-size:14px" type="text" class="form-control" id="telefone_usuario" name="telefone_usuario" value="">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="" style="color: #4e4e4e;"><b>Breve descrição de Função:</b></label>
                                                        <textarea type="text" class="form-control" id="descricao_usuario" name="descricao_usuario" rows="1" cols="350"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="" style="color: #4e4e4e;"><b>Serviço:</b></label>
                                                <br>
                                                <select name="fk_servicos[]" id="fk_servicos" class="form-control servico" style="cursor: pointer;" required>
                                                    <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                    <?php foreach ($listar_servicos as $value) { ?>
                                                        <option value="<?php echo $value->id_servicos; ?>" data-nome="<?php echo $value->nome_servico; ?>"><?php echo $value->nome_servico; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3" style="margin-top: 30px;">
                                                <div class="servicos_add">
                                                    <button type="button" class="btn btn-primary add_novo_Servico" style="width: 185px; height: 40px; font-size: 14px;"><i class="fas fa-plus"></i> Adicionar Serviço</button>
                                                    <button type="button" class="btn btn-danger botao_remover" style="width: 150px; height: 40px; font-size: 14px; margin-left: 10px;"><i class="fas fa-trash-alt"></i> Remover</button>
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
            <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
                Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas
                <br>
                Centro Universitário Nossa Senhora do Patrocínio <br>
                Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
            <br><br>
        </div>
        <br>
    </div>
</div>

<script>
    var maxButtons = 9999; // Remova o limite de adição de serviços

    $('.add_novo_Servico').click(function(e) {
        var container = $(this).closest('.row');
        var element_copy = container.clone();
        var botao_excluir = '<div class="btn btn-outline-danger botao_remover" style="width: 100px; height: 40px; font-size: 14px; margin-top: 10px;"><i class="fas fa-trash-alt"></i> Remover</div>';

        element_copy.find('select, input').val('');
        element_copy.find('.select2').remove(); // Limpa o campo
        element_copy.find('.add_novo_Servico').remove(); // Remove o botão "Adicionar Serviço"

        container.after(element_copy);

        if (element_copy.find('.botao_remover').length === 0) {
            element_copy.find('.col-md-3').append(botao_excluir);
        }

        $('.botao_remover').click(function(e) {
            $(this).closest('.row').remove();
        });

        // Select picker
        $('.servico').select2({
            width: '100%'
        });
    });

    //------------------------------------------------------------------------------------------------------

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