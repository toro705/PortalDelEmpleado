<!doctype html>

 <?php include('include/head.php'); ?>
 <?php include('include/nav.php'); ?>
    <body>
        <section id="dashboard">
          <div class="container ">
            <div class="col-sm-7 col-md-8 data">
                <p class="h1 text-center">Bienvenido USUARIO</p>
                <div class="row">
                    <div class="col-sm-6 text-center">
                    	<p class="h3 text-center">Nuevos Documentos<br>
                    	<span class="h1 text-success">5</span></p>
                        <a href="documentos.php" class="btn btn-primary btn-md">Nuevo Documento</a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p class="h3 text-center">Nuevos Tramites<br>
                        <span class="h1 text-success">16</span></p>
                        <a href="tramites.php" class="btn btn-primary btn-md">Nuevo Trámite</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                
            </div>
            <div class="col-sm-5 col-md-4 news">
        	   <p class="h3">Noticias</p>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <p>Se comunica que en las proximas semanas se subira el aguinaldo.</p>
                    </li>
                    <li>
                        <p>Se comunica que en las proximas semanas se subira el aguinaldo.</p>
                    </li>
                    <li>
                        <p>Se comunica que en las proximas semanas se subira el aguinaldo.</p>
                    </li>
                </ul>
            </div>
          </div>
        </section>
 <?php include('include/footer.php'); ?>
    </body>
</html>
