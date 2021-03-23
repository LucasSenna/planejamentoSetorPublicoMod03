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

                <h2 class="font-bold">3. Formulação Estratégica  </h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    <strong>Objetivo:</strong> Apresentar métodos para formulação de estratégias para aplicar nos processos de gestão da organização.
                </p>

                <p class="Texto">
                    <strong>
                        Ter estratégia é fazer escolhas. É escolher como uma organização vai se diferenciar das outras. Escolhas de fazer alguma coisa, como:
                    </strong>
                </p>

                <ul class="Texto">
                    <i class="fa fa-arrow-right CorLaranja"></i> que clientes atender;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> que produtos produzir e/ou vender;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> ou quais canais de venda utilizar.
                </ul>

                <p class="Texto">
                    <strong>
                        E também escolhas de deixar de fazer alguma coisa, conscientemente, como:
                    </strong>
                </p>

                <ul class="Texto">
                    <i class="fa fa-arrow-right CorLaranja"></i> que clientes não atender;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> em quais canais de venda não atuar;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> e que produtos e/ou serviços não oferecer.
                </ul>

                <p class="Texto">
                    É definir o que é o melhor para a organização, e não apenas usar o que é bom para todas as outras organizações. As escolhas estratégicas representam os grandes caminhos definidos por uma organização para alcançar vantagem competitiva, uma questão fundamental na gestão estratégica.
                </p>

                <div class="row">
                    <div class="col-sm">
                        <div class="CaixaLaranjaEad" role="alert">
                            <p class="Texto"> 
                                Para <strong class="CorLaranja">Porter</strong> ( Michael Porter escreveu o livro Estratégia Competitiva, em 1980, um marco na história do tema estratégia, pois a partir deste livro o tema ganhou grande impulso por meio de pesquisas, da literatura, do ensino e da prática. ), eficiência operacional é uma necessidade, mas não é o suficiente para a garantia do sucesso a longo prazo de uma organização. É preciso ter uma estratégia. É absolutamente imprescindível que os principais gestores de uma organização invistam tempo em traçar estratégias que a diferenciem de seus concorrentes. <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="CaixaLaranjaEad" role="alert">
                            <p class="Texto CorLaranja"> 
                                    Hamel e Prahalad escreveram o artigo <em>“The core competence of the corporation”</em> para a Harvard Bussiness Review em 1990. Nesse artigo, introduziram o termo competência essencial (<em>core competence</em>), ao apontarem que as empresas bem-sucedidas e extremamente competitivas eram mais que portfólios de negócios, eram portfólios de competências, as estratégias devem ser definidas sobre as competências básicas da organização, tentando aproveitar as oportunidades futuras do ambiente, na busca de vantagem competitiva sustentável.
                            </p>
                        </div>
                    </div>
                </div>

                <p class="Texto">
                    Existe espaço para uma série de estratégias de sucesso. O pior erro é não escolher. É tentar um pouco de tudo para, no fim, não conseguir nenhuma vantagem. Isso não funciona porque todas as boas estratégias envolvem escolhas. Para Porter, não se pode ter ao mesmo tempo custos baixos e ser líder ou único em qualidade e serviço.
                    <br><br>Uma organização pode dizer que possui uma estratégia, quando responde afirmativamente às três perguntas seguintes.
                </p>

                <div class="alert alert-light-primary" role="alert">
                    <p class="Texto"> 
                        <strong>
                        ♣ A empresa escolheu uma posição única, diferente dos concorrentes?<br>
                        ♣ Optou por desempenhar atividades de marketing e desenvolvimento de produtos de maneira diferente<br>
                        ♣ A empresa optou por não fazer determinadas coisas?
                        </strong>
                    </p>
                </div>

                <p class="Texto">
                    Quando uma organização consegue criar uma estratégia única, a sua posição no mercado se torna sustentável por muito mais tempo.
                </p>

                

                


 

                <br><br>
                <div class="text-center">
                    <a href="Topico02_1.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03_1.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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