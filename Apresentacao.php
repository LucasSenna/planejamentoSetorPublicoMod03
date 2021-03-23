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

                <h2 class="font-bold">Apresentação</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                Neste módulo final, abordaremos o planejamento estratégico setorial na perspectiva da gestão, diagnóstico e formulação estratégica, tendo por base os cinco princípios básicos do alinhamento estratégico. 
                <br><br>A elaboração do conteúdo é fundamentada, principalmente nos trabalhos produzido por: Renato Peixoto Dagnino e Marco Antonio Pereira.
                </p>

               
                <br>

                <h2 class="font-bold">Objetivo</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                Abordar o planejamento estratégico setorial na perspectiva da gestão,diagnóstico e formulação estratégica. 
                </p>


                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>