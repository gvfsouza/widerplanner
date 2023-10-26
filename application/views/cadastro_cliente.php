<!-- <style>
  body {
    height: 100%
  }
</style> -->

<br>

<div class="container-fluid" style="margin-top:30px">
  <div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color: white;">

      <div>
        <h3 id="dados-cleinte" style="font-size: 25px;">Cadastro de Cliente</h3>
        <br>
      </div>

      <!-- FORMULÁRIO  -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="" role="tabpanel">

          <!-- Mensagem de sucesso cadastro  -->
          <?php if ($this->session->flashdata('sucesso')) {    ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('sucesso'); ?>
            </div>
          <?php } ?>

          <?php if ($this->session->flashdata('erro')) : ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('erro'); ?>
            </div>
          <?php endif; ?>
          
          <form action="" method="POST">
            <div class="p-3 bg-white">
              <div class="row">
                <div class="col-12">
                  <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                    <div class="row">
                      <div style="margin-left:10px;"></div>
                      <div class="col">
                        <div class="row">
                          <div class="form-group col-md-4">
                            <label for=""><b>Nome:</b></label>
                            <br>
                            <input style="font-size:14px" type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="">
                          </div>
                          <div class="dados-cliente form-group col-md-4">
                            <label for=""><b>CPF:</b></label>
                            <br>
                            <input type="text" class="form-control" id="cpf_usuario" name="cpf_usuario">
                          </div>
                          <div class="dados-cliente form-group col-md-4">
                            <label for=""><b>Data Nasc.:</b></label>
                            <br>
                            <input type="date" class="form-control" id="dt_nasc_usuario" name="dt_nasc_usuario" value="">
                          </div>
                          <div class="dados-cliente form-group col-md-4">
                            <label for=""><b>Sexo:</b></label>
                            <br>
                            <input style="font-size:14px" type="text" class="form-control" id="sexo_usuario" name="sexo_usuario" value="">
                          </div>
                          <div class="dados-cliente form-group col-md-4">
                            <label for=""><b>E-mail:</b></label>
                            <br>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-4">
                            <label for=""><b>Telefone:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="telefone_usuario" name="telefone_usuario" value="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="dados-cliente col-md-3">
                            <label for=""><b>CEP:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="cep_usuario" name="cep_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-7">
                            <label for=""><b>Logradouro:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="logradouro_usuario" name="logradouro_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-2">
                            <label for=""><b>N°:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="numero_usuario" name="numero_usuario" value="">
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="dados-cliente col-md-3">
                            <label for=""><b>Complemento</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="complemento_usuario" name="complemento_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-3">
                            <label for=""><b>Bairro</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-3">
                            <label for=""><b>Cidade:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" value="">
                          </div>
                          <div class="dados-cliente col-md-3">
                            <label for=""><b>UF:</b></label>
                            <input style="font-size:14px" type="text" class="form-control" id="uf" name="uf" value="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button href="<?php echo base_url(); ?>/cadastro_cliente/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
            </div>
          </form>
        </div>
        <br>
        <br>
        <div class="col-12 text-center">
          <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
            Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas
            <br>
            Centro Universitário Nossa Senhora do Patrocínio <br>
            Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
<script>
  // Função para aplicar a máscara de CPF
  function mascaraCpf(campo) {
      campo.value = campo.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
      campo.value = campo.value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o primeiro ponto
      campo.value = campo.value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o segundo ponto
      campo.value = campo.value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona o traço
  }

  // Obtém o campo de CPF pelo ID
  var cpfInput = document.getElementById('cpf_usuario');

  // Adiciona um ouvinte de evento para chamar a função de máscara quando o usuário digitar
  cpfInput.addEventListener('input', function() {
      mascaraCpf(cpfInput);
  });
</script>