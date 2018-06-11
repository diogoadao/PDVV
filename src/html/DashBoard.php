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
                require_once 'template/Nav.html';
            ?>
            <!--Page Body-->
            <main class="page-body">
                <section class="section">
                    <!--start row-->
                    <div class="row">
                        <!--start column-->
                        <div class="col s12">
                            
                            <div class="card z-depth-3">

                                <div class="card-content z-depth-3">
                                    <?php 
                                        require_once 'template/Admin/Metabase/Metabase.php';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
            <!--End page body-->
            <?php 
                require_once 'template/Footer.html';
                require_once 'template/Scripts.html';
            ?>
        </div>
        <!--End page control-->
    </div>
    <!--End page wrapper-->
    <?php ?>
</body>
<!--End body-->

</html>
<!--End HTML-->