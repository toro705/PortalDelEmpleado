<!doctype html>

 <?php include('include/head.php'); ?>
 <?php include('include/nav.php'); ?>
    <body>

	    <section id="sec-documentos">
	      <div class="container">
		        <div class="row">
		        <div class="collapse filter-collapse">

		        </div>
				<div class="filtros__top col-xs-12">
					<div class="filtros__filtros">
						  <p><b>Filtrar:</b></p>
						  <div class="btn-group">
							  <button class="btn-link btn-xs dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">Tipo <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a href="javascript:;">Imagen</a></li>
							    <li><a href="javascript:;">Legajo</a></li>
							    <li><a href="javascript:;">Documento</a></li>
							    <li><a href="javascript:;">Otro</a></li>
							  </ul>
						  </div>
						  <div class="btn-group">
							  <button class="btn-link btn-xs dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">Visto <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a href="javascript:;">Si</a></li>
							    <li><a href="javascript:;">No</a></li>
							  </ul>
						  </div>
						  <div class="btn-group">
							  <button class="btn-link btn-xs dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">Fecha <span class="caret"></span>
							  </button>
								<form action="" class="filtros__fechas dropdown-menu">
									<div class="form-inline fecha">	
							              <input type="text"  id="IdFechaIni" name="fechafin" class="form-control datepicker" velue="" placeholder="Fecha Inicio">
						            </div><!-- End Fecha inicio form-group -->				
									<div class="form-inline fecha">	
							              <input type="text"  id="IdFechafin" name="fechaini" class="form-control datepicker" velue="" placeholder="Fecha Fin">
						            </div><!-- End Fecha inicio form-group -->	
									<button type="submit" class="btn btn-sm btn-success col-xs-12">Filtrar</button>
								</form>						  
						  </div>					  
						  <div class="btn-group pull-right">	
									<button data-toggle="modal" data-target="#nuevoDoc" class=" btn btn-md btn-primary">	Nuevo Documento</button>
						  </div>
						  <div class="clearfix"></div>
					</div> <!-- End filtros__filtros -->
					<div class="clearfix"></div>
				</div> <!-- end filtros__top -->
				<div class="modal fade" id="nuevoDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Nuevo Archivo</h4>
				      </div>
				      <form class="modal-body" method="" action="">
							<div class="form-group">
							    <label for="tipo">Tipo</label>
							    <select class="form-control" id="tipo">
							    	<option disabled selected value>Elija una opción</option>
							    	<option value="uniforme">Imagen</option>
							    	<option value="vacaciones">Recibo</option>
							    	<option value="horasExtra">Otros</option>
							    </select>
							</div>
							<div class="form-group fileinput">
								<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
								<input type="file" class="form-control" id="exampleInputFile">
								<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
							</div>					        
				      </form>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button type="button" class="btn btn-primary">Subir Archivo</button>
				      </div>
				    </div>
				  </div>
				</div>					
				<div class="clearfix"></div>
				<div class="filtro-aplicado col-xs-12">
					<p class="text-primary"><i><b> Filtro de Estado aplicado.</b></i></p>
				</div>
	         	<div id="documentos" class="col-xs-12 scrollbar-outer">
	              <table class="table">
	               		<thead>
	               			 <tr>
	               			 	 <th>Fecha</th>
	               			 	 <th>Tipo</th> 
	               			 	 <th>Descrioción</th> 
	               			 	 <th class="text-center">Visto</th> 
	               			 	 <th class="text-right"></th>
	           			 	 </tr>
	   			 	  	</thead> 
				 	  		<tbody> 
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
	 	  						</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
	 	  						</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
	 	  						</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
	 	  						</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
				 	  			<tr> 
				 	  				<td class="text-center">20/11<span class="hidden-xs">/</span><br class="visible-xs">2016</td>
				 	  				<td>Img</td>
				 	  				<td>Focumentación de pedido de uniforme nuevo</td>
				 	  				<td class="text-center"><i class="fa fa-check-square text-success" aria-hidden="true" title="Remitente Pendiente de Envio"></i></td>
				 	  				<td>
	   			 	  				<div class="btn-group">
									  <button type="button" class="btn bnt-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <i class="fa fa-cog" aria-hidden="true"></i> <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right text-left">
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-success text-left" title="Ver archivo"><span> Ver </span> <i class="fa fa-eye" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-primary text-left" title="Descargar"><span> Descargar </span> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-warning text-left" title="Imprimir"><span> Imprimir </span> <i class="fa fa-print" aria-hidden="true"></i></a>
											</li>
											<li>
			   			 	  					<a href="javascript:;" class="btn btn-sm btn-danger text-left" title="Enviar por correo electrónico"><span> Enviar </span> <i class="fa fa-share" aria-hidden="true"></i></a>
											</li>
									  </ul>
									</div>   			 	  					
				 	  				</td>
		 	  				</tr>
							</tbody> 
	               </table>
	         	</div>
		        </div>
	      </div>
	    </section>

            
 <?php include('include/footer.php'); ?>
		 <script>	
		 		App.datepicker();
		 </script>
    </body>
</html>
