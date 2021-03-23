<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">

            <h2 class="font-bold">3 - Missão, Visão e Valores: Conceitos </h2>
                <hr class="pontLaranja">

                <!-- collapse1 -->
                <section id="Missão">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        <h3><center>Missão</center></h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                <p class="Texto">
                                  Significa dizer qual a razão de ser da instituição, para que ela existe. 
                                  <br><br>Fórmula da missão do ponto de vista da qualidade:
                                </p>
                                
                                <ul class="Texto">
                                    <i class="fa fa-arrow-right CorLaranja"></i>  O QUE FAZER + POR QUE FAZER + PARA QUEM FAZER
                                </ul>

                                <p class="Texto">
                                  <strong>
                                    A missão tem como foco o produto/serviço e os clientes/público beneficiário. 
                                  </strong>
                                </p>
                                
                                <div class="table-responsive">
                                  <table class="table">
                                      <tr>
                                          <th class="BackLaranja text-white textmiddle">
                                              <h5> Exemplo</h5>
                                          </th>
                                          <td>
                                            <p class="Texto">
                                              "Integrar as ações governamentais, por meio da coordenação do planejamento de gestão pública, visando ao desenvolvimento do Estado e à promoção da cidadania." (Secretaria de Estado e Planejamento e Gestão de Minas Gerais) 
                                              <br><br>"Gerir o planejamento de forma a promover o desenvolvimento sustentável do Estado do Pará."(Secretaria de Planejamento do Estado do Pará)
                                            </p>
                                          </td>
                                        </tr>
                                    </table>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <!-- collapse2 -->
            <section id="Visão">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingtwo">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3><center>Visão</center></h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                É uma imagem mental, uma descrição daquela situação futura e desejada, que todos os envolvidos almejam. Representa aonde se quer chegar, em um período de tempo determinado.
                                <br><br>A visão descreve o futuro desejado, a partir dos esforços individuais, dos esforços das equipes e da alocação de recursos. Embora desafiadora, a visão precisa ser prática, realista e visível. Se não podemos ver claramente o que queremos ser no futuro, certamente não conseguiremos alcançar. Tudo não passará de uma ilusão. Por outro lado, se a visão não for um desafio que mobilize os esforços, não passará de rotineira continuidade. 
                                </p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="BackLaranja text-white textmiddle">
                                                <h5> Exemplo</h5>
                                            </th>
                                            <td>
                                                <p class="Texto">
                                                    <em>"Ser excelência em gestão pública, incorporando-a como valor de Estado." (Secretaria de Estado e Planejamento e Gestão de Minas Gerais) 
                                                    <br><br>"Ser referência na gestão do planejamento estadual."(Secretaria de Planejamento do Estado do Pará)</em>
                                                </p>
                                            </td>
                                        </tr>
                                    </table> 
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <!-- collapse3 -->
            <section id="Valores">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingthree">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <h3><center>Valores </center></h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                            <div class="card-body">

                                <p class="Texto">
                                    Servem de guia e estabelecem critérios para os comportamentos e atitudes das pessoas responsáveis por tomar decisões e implementar ações na organização.
                                    <br><br>Os valores são, em outros termos, os limites éticos pelos quais se pautam todos que constituem a organização.
                                </p>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="BackLaranja text-white textmiddle">
                                                <h5> Exemplo</h5>
                                            </th>
                                            <td>
                                                <p class="Texto">
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Compromisso com o social;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Ações desenvolvidas com competência, ética, honestidade e transparência;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Flexibilidade para aceitar e promover as mudanças;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Respeito e zelo pela coisa pública;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Senso de equipe e valorização do ser humano;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Entender e satisfazer as expectativas dos clientes internos e externos;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Agir proativamente visando alcançar melhores índices de desempenho;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Servidores comprometidos com os resultados da organização;<br>
                                                    <i class="fa fa-arrow-right CorLaranja"></i> Seriedade e transparência nas ações.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>       
                                </div>

                                <p class="Texto">
                                    <strong>Objetivos Estratégicos</strong>
                                    <br><br>Intenções assertivas e factíveis na busca por algo de valor, de resultados de progresso, vantagens e melhorias, nas quais a situação futura almejada seja melhor que a presente. Devem ser globais e amplos, definidos com foco no longo prazo, com o propósito de cumprir a missão e alcançar a visão da instituição.
                                    <br><br><strong>Características dos objetivos (SMART):</strong>
                                    <br><br>Ao contrário da missão, que é definida de forma genérica, os objetivos devem ser definidos de forma concreta e devem apresentar as seguintes características:
                                </p><br>

                                <!-- Botão para acionar modal -->
                                <center>
                                    <button type="button" class="btn BackLaranja text-white" data-toggle="modal" data-target="#Specific"> 
                                        Specific (Específicos)
                                    </button>
                                    <button type="button" class="btn BackLaranja text-white" data-toggle="modal" data-target="#Mensurable"> 
                                        Mensurable (Mensuráveis)
                                    </button>
                                    <button type="button" class="btn BackLaranja text-white" data-toggle="modal" data-target="#Attainable"> 
                                        Attainable (Alcançáveis) 
                                    </button>
                                    <button type="button" class="btn BackLaranja text-white" data-toggle="modal" data-target="#Realistics"> 
                                        Realistics (Realistas)
                                    </button>
                                    <button type="button" class="btn BackLaranja text-white" data-toggle="modal" data-target="#Time">
                                        Time Bound (Tempo)
                                    </button>
                                </center>

                                <!-- Modal -->
                                <div class="modal fade" id="Specific" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Specific (Específicos)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Os objetivos devem ser específicos, claros, concisos e fáceis de entender (não devem ser generalistas). Devem compreender algo que possa ser claramente atingido
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Mensurable" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Mensurable (Mensuráveis)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Sendo os objetivos constituídos por desejos ou aspirações, devem ser passíveis de serem avaliados, através da definição de parâmetros que verifiquem se foram ou não atingidos. 
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Attainable" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Attainable (Alcançáveis)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Os objetivos têm que ser alcançáveis. Esse aspecto implica que os objetivos sejam propostos em consonância com todos os seus intervenientes, para que estejam motivados e compreendam os objetivos e suas dificuldades. Devem ser definidos de modo congruente com o momento e os recursos. 
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Realistics" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Realistics (Realistas)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Os objetivos devem ser tangíveis e condizentes com a realidade da organização, deve existir a possibilidade de poderem vir a ser alcançados. 
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Time" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TituloModalCentralizado">Time Bound (Tempo)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Os objetivos devem ser estabelecidos com um limite temporal bem definido (ou uma série de fases). 
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                            </div>
                            <br><br>    
                        </div>
                    </div>
                </div>
            </section>
            <br>


                <br><br>
                <div class="text-center">
                    <a href="topico01_2.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
                </div>


                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });

                    $(function() {
                        $('[data-toggle="popover"]').popover()
                    })

                    $('.popover-dismiss').popover({
                        trigger: 'focus'
                    })

                    $(document).ready(function() {
                        new WOW().init();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>