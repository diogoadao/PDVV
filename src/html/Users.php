<?php
    include '../../assets/php/db.php';
?>
    <!--Start HTML document-->
    <!--HTML-->
    <html lang="en">
    <!--Head-->
    <?php 
        require_once 'template/Head.html';
    ?>

    <head>
        <title>Dashboard - Visual Thinking</title>
    </head>
    <!--body-->

    <body onload="">
        <!--Page wrapper-->
        <div class="page-wrapper">
            <!--Control page-->
            <div id="control-body" class="fixed-sidebar medium-sidebar fixed-nav collapsed-sidebar">
                <?php 
                    require_once 'template/Preloader.html';
                    require_once 'template/Nav-A.html';
                    require_once 'template/Modal.html';
                ?>
                <!--Page Body-->
                <main class="page-body">
                    <!--page title box-->
                    <!--start section-->
                    <section class="section">
                        <!--start row-->
                        <div class="row">
                            <div class="card z-depth-3">
                                <div class="card-content z-depth-3 greyer">
                                    <span>|</span>
                                    <button data-target="modal-creater" class="btn modal-trigger z-depth-3 indigo darken-2">Novo Registo</button>
                                    <span>|</span>
                                    <button onclick="Refresh();" class="btn z-depth-3 indigo darken-2">Atualizar Tabelas</button>
                                    <span>|</span>
                                </div>
                            </div>
                            <!--start column-->
                            <div class="col s12">
                                <!--start card-->
                                <div class="card z-depth 4">
                                    <div class="card-content greyer">
                                        <ul class="collapsible rounder">
                                            <li class="active">
                                                <div class="collapsible-header active">
                                                    <i class="material-icons">supervisor_account</i>Utilizadores</div>
                                                <div class="collapsible-body greyerer">
                                                    <div class="card">
                                                        <!-- custom filter length Table -->
                                                        <?php
                                                            require_once 'template/Admin/UserTable.php';
                                                        ?>
                                                            <!-- End custom filter length Table -->
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons">supervisor_account</i>Clientes</div>
                                                <div class="collapsible-body greyerer">
                                                    <div class="card">
                                                        <!-- custom filter length Table -->
                                                        <?php
                                                             require_once 'template/Admin/ClientTable.php';
                                                        ?>
                                                            <!-- End custom filter length Table -->
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end column-->
                        </div>
                        <!--end row-->
                    </section>
                    <!--end section-->
                </main>
                <!--End page body-->
                <?php 
                    require_once 'template/Footer.html';
                    require_once 'template/Scripts-A.html';
                    require_once 'template/Admin/UserTable-scripts.html';
                    require_once 'template/Admin/ClientTable-scripts.html';
                ?>
            </div>
            <!--End page control-->
        </div>
        <!--End page wrapper-->
    </body>
    <!--End body-->

    </html>
    <!--End HTML-->