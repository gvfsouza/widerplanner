<div class="container-fluid">
      <div>
        <style>
          label{
              color:black;
          }
          </style>
          
          <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: white;">
          
                  <div>
                    <!DOCTYPE html>
                    <html>
                      <body>
                        <style>
                          div.a {
                            text-align: center;
                          }
                        </style>
                        <div class="a">
                          <h2>Agendamento</h2>
                        </div>
                      </body>
                    </html>
                    <br>
                  </div>
                  <style>
                    body {
                        background: white }
                    section {
                        background:black (255, 255, 255);
                        color: rgb(255, 255, 255);
                        border-radius: 1em;
                        padding: 1em;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        margin-right: -50%;
                        transform: translate(-50%, -50%) }
                      </style>
                      <section>

                          </section>
                  </style>
                  <section>
    	<form class="form-horizontal" action="processa.php" method="POST"> 
  			<div class="col-sm-3 col-sm-offset-3">         
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required> 
        </div>
        <div class="col-sm-3"> 
          <label>Telefone</label>         
          <input class="form-control" type="text" name="telefone" placeholder="Digite seu telefone" required>
        </div>
        <div class="col-sm-6 col-sm-offset-3">	
    			<label>Serviços</label>
      			<select name="servicos" class="form-control">
                <option value="" selected=>Selecione um serviço</option>
                <option>teste01 -- R$00,00</option>
                <option>teste02 -- R$00,00</option> 
                <option>teste03 -- R$00,00</option> 
                <option>teste04 -- R$00,00</option> 
                <option>teste05 -- Sob consulta</option>     
            </select>  			
  			</div>
  			<div class="col-sm-6 col-sm-offset-3">
    			<label>Data e hora</label>
    				<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
    					<input class="form-control" type="text" name="data" placeholder="Data do serviço">
    					<span class="input-group-addon">
    						<span class="glyphicon glyphicon-th"></span>
    					</span>
					  </div> 
  			</div>
  			
    			<div class="col-sm-offset-3 col-sm-6"><br>
      				<button type="submit" class="btn btn-success">Agendar</button>
              <a class="btn btn-primary btn_carrega_conteudo" href='#' id="pagina">Ver agendamentos</a><br><br>
              <php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
              ?>
    			</div>
  			
		</form>
    
      
          <div class="col-sm-6 col-sm-offset-3" id="div_conteudo"><!-- div onde será exibido o conteúdo-->
              <img id="loader" src="loader.gif" style="display:none;margin: 0 auto;">
          </div>  
      
  

    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   	<script src="js/bootstrap-datetimepicker.min.js"></script>
   	<script src="css/bootstrap-datetimepicker.pt-BR.css"></script>
   	<script type="text/javascript">
   		$('.data_formato').datetimepicker({
   			weeKStart: 1,
   			todayBtn: 1,
   			autoclose: 1,
   			todayHighlight: 1,
   			startView: 2,
   			forceParse: 0,
   			showMeridian: 1,
   			language: "pt-BR",
   			startDate: '-0d'
   		});

       $(document).ready(function(){// Ao carregar a página faça o conteudo abaixo
            $('.btn_carrega_conteudo').click(function(){// Ao clicar no elemento que contenha a classe .btn_carrega_conteudo faça...
                            
            var carrega_url = this.id; //Carregar url pegando os dados pelo ID
            carrega_url = carrega_url+'_listar.php'; //Carregar a url e o conteudo da página
                            
                $.ajax({ //Carregar a função ajax embutida no jQuery
                    url: carrega_url,
                               
                    //Variável DATA armazena o conteúdo da requisição
                    success: function(data){//Caso a requisição seja completada com sucesso faça...
                        $('#div_conteudo').html(data);// Incluir o conteúdo dentro da DIV
                    },
                               
                    beforeSend: function(){//Antes do envio do cabeçalho faça...
                        $('#loader').css({display:"block"});//carregar a imagem de load
                    },
                               
                    complete: function(){//Após o envio do cabeçalho faça...
                        $('#loader').css({display:"none"});//esconder a imagem de load
                    }
                });  
            });
        });
   	</script>
