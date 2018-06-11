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
            ?>
            <!--Page Body-->
            <main id="page-body" class="page-body">
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