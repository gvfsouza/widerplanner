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
          name: 'PRODUCT A',
          data: [44, 55, 41, 67, 22, 43]
        }, {
          name: 'PRODUCT B',
          data: [13, 23, 20, 8, 13, 27]
        }, {
          name: 'PRODUCT C',
          data: [11, 17, 15, 15, 21, 14]
        }, {
          name: 'PRODUCT D',
          data: [21, 7, 25, 13, 22, 8]
        }],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 10,
            dataLabels: {
              total: {
                enabled: true,
                style: {
                  fontSize: '13px',
                  fontWeight: 900
                }
              }
            }
          },
        },
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
            '01/05/2011 GMT', '01/06/2011 GMT'
          ],
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>