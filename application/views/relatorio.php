
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

<br />

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white">
                <div>
                    <h3 id="dados-agenda" style="font-size: 25px; font-weight: bold"></h3>
                    <br />
                </div>

                <fieldset class="form-group" style="
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 7px;
            border: 1px solid #879bc9;
            background: #879bc9;
            color: black;
          ">
                    <div>
                        <legend class="form-group" style="color: white; font-size: 18px">
                            <strong>Relatório</strong>
                        </legend>
                    </div>
                </fieldset>

                <!-- Card Usuários -->
                <div class="col-xl-4 col-md-6 mb-3">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Usuários
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $listar_usuarios_cadastrados[0]->quantidade_usuarios;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card serviços oferecidos -->
                <div class="col-xl-4 col-md-6 mb-3">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total de Seviços
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $total_servicos[0]->quantidade_servicos; ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <div class="p-3 bg-white">
                            <div class="row">
                                <!-- Gráfico -->
                                <div class="col-md-5">
                                    <div class="card shadow mb-4">
                                        <div id="chart" style="background-color: white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <div class="col-12 text-center">
                        <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br />
                            Projeto de Conclusão de Curso - Superior de Tecnologia em Análise
                            e Deselvolvimento de Sistemas
                            <br />
                            Centro Universitário Nossa Senhora do Patrocínio <br />
                            Endereço: R. José Weissohn, 153 - Centro, Salto - SP,
                            13328-300</span>
                    </div>
                    <br />
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var options = {
        series: [
            <?php
            $monthsData = [];

            foreach ($listar_agendamentos_mes_com_servicos as $value) {
                $monthKey = $value->ano . '-' . $value->mes;
                $monthsData[$monthKey][$value->nome_servico] = $value->total_servicos;
            }

            foreach ($monthsData as $monthKey => $services) {
                echo "{\n";
                echo "  name: '$monthKey',\n";
                echo "  data: {";

                foreach ($services as $serviceName => $serviceTotal) {
                    echo "'$serviceName': $serviceTotal, ";
                }

                echo "},\n";
                echo "},\n";
            }
            ?>
        ],
        chart: {
            type: "bar",
            height: 350,
            stacked: true,
            toolbar: {
                show: true,
            },
            zoom: {
                enabled: true,
            },
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: "bottom",
                    offsetX: -10,
                    offsetY: 0,
                },
            },
        }, ],
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 10,
                dataLabels: {
                    total: {
                        enabled: true,
                        style: {
                            fontSize: "13px",
                            fontWeight: 900,
                        },
                    },
                },
            },
        },
        xaxis: {
            type: "category",
            categories: [
                <?php
                $meses = array(1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro');

                $i = 0;

                foreach ($listar_agendamentos_mes_com_servicos as $value) {
                    $i++;
                ?> '<?php echo $meses[$value->mes] . ' ' . $value->ano; ?>'
                    <?php if ($i < count($listar_agendamentos_mes_com_servicos)) {
                        echo ',';
                    }
                    ?>
                <?php
                }
                ?>
            ],
        },

        legend: {
            position: "right",
            offsetY: 40,
        },
        fill: {
            opacity: 1,
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
