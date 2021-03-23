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

                <h2 class="font-bold">2 - Diagnóstico Estratégico  </h2>
                <hr class="pontLaranja">

                <p class="Texto"><strong>Objetivo:</strong> Apresentar conceitos e tipos de diagnóstico, considerando ambientes externos e internos, a fim de identificar oportunidades e ameaças da organização.</p>

                <!-- Citação -->
                    <blockquote class="blockquoteEad3">
                        <p class="Texto"><strong>“A realidade é como ela é e não como gostaríamos que ela fosse.”</strong>
                        <footer class="blockquote-footer CorLaranja"><i class="fas fa-graduation-cap CorLaranja"></i> Maquiavel</footer>
                    </blockquote>
                    <br>

                <p class="Texto">
                    O Diagnóstico Estratégico de uma organização, também chamado por muitos autores de Análise do Ambiente, tem por objetivo mapear o maior número de variáveis que de alguma forma afetam direta ou indiretamente uma organização.
                    <br><br><strong>Para Ansoff e McDonnell (1993), o Diagnóstico Estratégico é o procedimento necessário para responder a duas perguntas:</strong>
                </p>

                <div class="alert alert-light-primary" role="alert">
                    <p class="Texto"> 
                        <strong>
                        Como diagnosticar os desafios ambientais futuros com os quais se defrontará a instituição? 
                        <br><br>Como determinar a reação estratégica da instituição que garantirá o sucesso?.
                        </strong>
                    </p>
                </div>

                <p class="Texto">Mudanças são inevitáveis e algumas vezes inesperadas. O Diagnóstico Estratégico é uma ferramenta valiosíssima para prever ou adaptar-se às mudanças ou, no mínimo, não ser surpreendido por elas. É um instrumento que permite ao gestor verificar a situação real de uma organização bem como:</p>

                <ul class="Texto">
                    <i class="fa fa-arrow-right CorLaranja"></i> Descobrir a sua essência;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> Criar um contexto para a formulação das  estratégias;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> Conhecer aspectos importantes (natureza do setor, tendências do mercado, intensidade da concorrência etc.) que não estão sob seu controle;<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> Revelar forças e fraquezas em um dado momento.
                </ul>

                



                <br><br>
                <div class="text-center">
                    <a href="Topico01_3.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02_1.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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