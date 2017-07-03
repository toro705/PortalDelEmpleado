
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-2 text-center poweredby">
            <a target="_blank" href="http://www.aipem.com">Powered by <br>
              <span><img src="img/aipem-logo.png" alt="Aipem Group" /></span></a>
              <div class="clearfix">  </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-4 text-center">
            <ul class="list-unstyled">
              <li><p><a href="tel:<% =strTelEmp %>"><i class="fa fa-phone" aria-hidden="true"></i> <% =strTelEmp %></a></p></li>
              <li><p><a href="#" onClick="javascript:document.location.href='mailto:<% =Session("mail") %>?body=Ingrese su mensaje'"><i class="fa fa-envelope" aria-hidden="true"></i><% =Session("mail") %></a></p></li>
              <li><p><a href="javascript:;"><i class="fa fa-building" aria-hidden="true"></i>  <% =strDomEmp %></a></p></li>
              <li><p><a href="<% =strWebEmp %>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i><% =strWebEmp %></a></p></li>
            </ul>
          </div> 
          <div class="col-sm-2 col-md-3 col-lg-2 instructivo text-center pull-right">
            <a class="h4" href="publicacion_web.mht"><i class="fa fa-download" aria-hidden="true"></i><br>Instructivo de uso</a>            
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2 instructivo text-center pull-right">
            <a class="h4" href="publicacion_web.mht"><i class="fa fa-users" aria-hidden="true"></i><br>Soporte Técnico</a>            
          </div>
        </div>
      </div>
    </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>