
<!--HTML-->
<html lang="en">
<!--Head-->
<?php 
    require_once 'template/Head.html';
?>
<head>
    <title>Locked - Visual Thinking</title>
</head>
<!--body-->
<body>
    <!--Page wrapper-->
    <div class="page-wrapper">
        <!--Control page-->
        <div id="control-body">
            <!--prepage loader-->
            <?php 
                require_once 'template/Preloader.html';
            ?>
            <!-- End prepage loader-->
            <!--form Page Body-->
            <main>
                <!--start section-->
                <section class="section">
                    <!--start row-->
                    <div class="row ">
                        <!--start column-->
                        <div class="col s12">
                            <!--Brand logo-->
                            <a id="form-logo-container" href="#" class="form-brand-logo">Visual Thinking</a>
                            <!--start card-->
                            <div Id="action-form" class="card">
                                <!--card content-->
                                <div class="card-content">
                                    <!--form-->
                                    <div class="input-field center">
                                        <img src="../../assets/images/user5.jpg" onerror="this.src='../../assets/images/default-avatar.png';" class="circle responsive-img valign profile-image-login">
                                        <h4 id="fullname" class="avatar-header"></h4>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" class="validate" autocomplete="off" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field">
                                        <button onclick="Dologin()" class="btn btn-block waves-effect waves-light theme-bg">Entrar</button>
                                    </div>
                                    <!--end form-->
                                </div>
                                <!--end card content-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end column-->
                    </div>
                    <!--end row-->
                </section>
                <!--end section-->
            </main>
            <!--End form page body-->
            <!--Footer-->
            <footer class="form-footer">
                <div class="row">
                    <div class="col s12 center">
                        <ul class="footer-list">
                            <li>
                                <a href="#">&copy; Visual Thinking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!--End footer-->
        </div>
        <!--End page control-->
    </div>
    <!--End page wrapper-->
    <!--  Scripts-->
    <!-- Jquery -->
    <script src="../../assets/vendors/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- Materialize js -->
    <script src="../../assets/vendors/materialize/materialize.min.js" type="text/javascript"></script>
    <!-- prism syntax highlighter -->
    <!-- materialcss theme script -->
    <script src="../../assets/js/app.js" type="text/javascript"></script>
    <!--Custom Script-->
    <script src="../../assets/js/Custom.js"></script>
    <script src="../../assets/vendors/sweetalert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script>
        LockUpdate();

        function Dologin() {
            Login(localStorage.getItem('email'), document.getElementById('password').value);
        }

        var submit_pass = document.getElementById("password");
        submit_pass.addEventListener("keydown", function (e) {
            if (e.keyCode === 13) { //checks whether the pressed key is "Enter"
                Dologin();
            } else {
                console.log(e.keyCode);
            }
        });
    </script>
    <!--End scripts-->
</body>
<!--End body-->
<!-- Mirrored from vuelayout.com/materialcss/html/lock.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 09:22:50 GMT -->

</html>
<!--End HTML-->