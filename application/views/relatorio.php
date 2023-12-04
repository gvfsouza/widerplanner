<style>
  body {
    display: grid;
    min-height: 100vh;
  }

  figure {
    width: 500px;
    aspect-ratio: 7 / 4;
    --bg: hsl(330 80% calc(90% - (var(--hover) * 10%)));
    /* --accent: hsl(280 80% 40%); */
    transition: background 0.2s;
    /* background:
      radial-gradient(circle at top left, var(--accent), transparent 75%),
      var(--bg); */
    margin: 0;
    position: relative;
    overflow: hidden;
    border-radius: 1.5rem;
    margin: 10px;
  }

  figure:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    bottom: 0%;
    left: 10%;
  }

  img {
    position: absolute;
  }

  article {
    --hover: 0;
  }

  article:hover {
    --hover: 1;
  }
</style>

<br>

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">
                <div>
                <h3 id="dados-agenda" style="font-size: 25px;font-weight:bold"></h3>
                <br>
                </div>

                <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                <div>
                    <legend class="form-group" style="color: white; font-size: 18px;">
                    <strong>Relatório</strong>
                    </legend>
                </div>
                </fieldset>

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <div class="p-3 bg-white">
                            <div class="row">
                                <!-- Gráfico Animais micrchipados -->
                                <div class="col-md-5">
                                    <div class="card shadow mb-4">
                                        <div id="" style="background-color:white;"></div>
                                    </div>
                                </div>

                                <!-- Gráfico Vacina -->
                                <div class="col-md-7">
                                    <div class="card shadow mb-4">
                                        <div id="" style="background-color: white;"></div>
                                    </div>
                                </div>
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
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var options = {
        series: [{
            data: [
                <?php
                foreach ($listar_animais_mes as $value) {

                ?>
                    <?php echo $value->quantidade; ?>,
                <?php
                }
                ?>
            ]
        }],
        title: {
            // Puxa o ano atual
            text: 'Animais Microchipados (<?php echo $value->ano; ?>)',
            align: 'center',
        },
        categories: {
            align: 'right',
        },
        // tamanho do gráfico
        chart: {
            height: 480,
            type: 'bar',
            events: {
                click: function(chart, w, e) {
                    // console.log(chart, w, e)
                }
            }
        },
        colors: ['#FAAB00', '#0DCB93', '#F8A500', '#FF2344', '#775DD0',
            '#64b2ee', '#9CE4CB', '#FFC95C', '#FC7186', '#C4B9E7',
            '#B1D3EC', '#0DB67B', '#FFE1A4', '#F8B7C0',

            '#FF7700', '#9400D3', '#fbff12', '#708090', '#ff206e', '#adf6b1', '#41ead4', '#DC143C', '#5A5CDD', '#4B0082',
            '#295135', '#FF0000', '#0000FF', '#FFB6C1', '#533b4d', '#13d8aa', '#00ffc5', '#2b908f', '#d55672', '#481620',
            '#5a6650', '#0075a2', '#adf5ff', '#00ffc5', '#276fbf', '#829298', '#f03a47', '#e7decd', '#af5b5b', '#804e49',
            '#9fcc2e', '#183059', '#0e402d', '#546E7A', '#d4526e', '#13d8aa', '#A5978B', '#2b908f', '#f9a3a4', '#90ee7e',

        ],

        // Tamanho da barrinha
        plotOptions: {
            bar: {
                columnWidth: '10%',
                distributed: true,
            }
        },
        dataLabels: {
            // enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: [

                <?php
                $meses = array(1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro');

                $i = 0;

                foreach ($listar_animais_mes as $value) {
                    $i++;
                ?> '<?php echo $meses[$value->mes]; ?>'
                    <?php if ($i < count($listar_animais_mes)) {
                        echo ',';
                    }
                    ?>
                <?php
                }
                ?>,
            ],
            // nome que aparece embaixo da barrinha
            labels: {
                show: true,
                style: {
                    // colors: colors
                    // height:1000,
                    fontSize: '12px'
                }
            }

        },
        tooltip: {
            theme: 'dark',
            x: {
                show: true
            },
            y: {
                title: {
                    formatter: function() {
                        return ''
                    }
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#grafico_animais_microchipados"), options);
    chart.render();
</script>