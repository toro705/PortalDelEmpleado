<?php include('include/head.php'); ?>
    <body id="loginsect">
        <section>
            <div class="container-fluid text-left">
              <div class="col-lg-offset-1 col-lg-4 col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 form-signin-container">
                <form id="login" action="" method="post" name="login" class="form-signin bg-1 wow fadeIn" data-wow-duration="2s" role="form">
                    <h2 class="text-center"><b>Ingresá con tus datos</b></h2>
                    <br>
                    <div class="clearfix"></div>
                    <input type="text" name="txtUser" id="txtUser" class="form-control" placeholder="Usuario" required>
                    <input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Contraseña" value="" required>
                    <button  class="btn btn-lg btn-primary btn-block" type="submit">INGRESAR</button>
                    <div class="clearfix"></div>
                    <a class="text-center btn btn-md btn-link btn-block" href="javascript:;">¿Olvidaste tu contraseña?</a>
                    <div class="clearfix"></div>
                </form>
              </div> 
            </div> <!-- /container -->    
          </div> -->
        </section>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/vegas/vegas.min.js"></script>
        <script src="js/vendor/wow.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#loginsect").vegas({
                    slides: [
                        { src: "/img/login/1.jpg" },
                        { src: "/img/login/2.jpg" }
                    ]
                });
            });
        </script>

    </body>
</html>
