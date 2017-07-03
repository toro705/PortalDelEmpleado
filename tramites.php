<!doctype html>

 <?php include('include/head.php'); ?>
 <?php include('include/nav.php'); ?>
    <body>
        <section>
			<div class="container">
				<div class="tramites">	
					<div class="filtros__top">
						<div class="form-inline search">	
								<input type="search" class="form-control" placeholder="Buscar Trámite">
						</div>
						<div class="filtros__filtros">
							  <p><b>Filtrar:</b></p>
							  <div class="btn-group">
								  <button class="btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipo <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a href="javascript:;">Pedido de Uniforme</a></li>
								    <li><a href="javascript:;">Vacaciones</a></li>
								    <li><a href="javascript:;">SAC</a></li>
								  </ul>
							  </div>
							  <div class="btn-group">
								  <button class="btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a href="javascript:;">Abierto</a></li>
								    <li><a href="javascript:;">Pendiente</a></li>
								    <li><a href="javascript:;">En espera</a></li>
								    <li><a href="javascript:;">Resuelto</a></li>
								  </ul>
							  </div>
							  <div class="clearfix"></div>
						</div> <!-- End filtros__filtros -->
						<button data-toggle="modal" data-target="#nuevoTramite" class="hidden-xs btn btn-sm btn-primary pull-right">Nuevo Trámite</button>
						<button data-toggle="modal" data-target="#nuevoTramite" class="visible-xs btn btn-lg btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i></button>

					</div> <!-- end filtros__top -->
					<div class="modal fade" id="nuevoTramite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Nuevo Trámite</h4>
					      </div>
					      <form class="modal-body" method="" action="">
								<div class="form-group">
								    <label for="tipo">Tipo</label>
								    <select class="form-control" id="tipo">
								    	<option disabled selected value>Elija una opción</option>
								    	<option value="uniforme">Pedido de Uniforme</option>
								    	<option value="vacaciones">Pedido de Vacaciónes</option>
								    	<option value="horasExtra">Pago horas extra</option>
								    </select>
								</div>
								<div class="form-group">
								    <label for="descripcion">Descripción</label>
								    <input type="text" class="form-control" id="descripcion" placeholder="">					        	
								</div>
								<div class="form-group">
								    <label for="comentario">Comentario</label>
								    <textarea type="text" class="form-control" id="comentario" placeholder="" rows="4"></textarea>			        	
								</div>
								<div class="form-group fileinput">
									<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
									<input type="file" class="form-control" id="exampleInputFile">
									<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
								</div>					        
					      </form>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					        <button type="button" class="btn btn-primary">Crear Trámite</button>
					      </div>
					    </div>
					  </div>
					</div>					
					<div class="clearfix"></div>
					<div class="tramites__filtro-aplicado">
						<p class="text-primary"><i><b> Filtro de Estado aplicado.</b></i></p>
					</div>
					<div class="clearfix"></div>
						<div class="tramites__head">
							<div class="visible-xs col-xs-12"><p class="h3">Trámites</p></div>
							<div class="hidden-xs col-sm-2"><p>Fecha</p></div>
							<div class="hidden-xs col-sm-2"><p>Tipo</p></div>
							<div class="hidden-xs col-sm-4 col-md-5"><p>Descripción</p></div>
							<div class="hidden-xs col-sm-2 text-center"><p>Comentario</p></div>
							<div class="hidden-xs col-sm-2 col-md-1 text-center"><p>Estado</p></div>
							<div class="clearfix"></div>
						</div>
	
						<div class="clearfix"></div>
						<div class="panel-group" id="tramites" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								    <div class="panel-heading animated" role="tab" id="tramite-1">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#tramite1" href="#tramite1" aria-expanded="true" aria-controls="tramite1">
											<div class="col-xs-4 col-sm-2 tramite__fechahora"><p>20.09.16 <span class="hidden-xs">-</span><br class="visible-xs"> 12:45</p></div>
											<div class="col-xs-8 col-sm-2 tramite__tipo"><p>Tipo 1</p></div>
											<div class="col-xs-8 visible-xs tramite__estado"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en mobile -->
											<div class="col-xs-10 col-sm-4 col-md-5 tramite__titulo"><p><b>Pedido de Uniforme.por rotura de manga en un inconveniente con un ingresante</b></p></div>
											<div class="col-xs-2 col-sm-2 tramite__comentario text-center">
												<i class="fa fa-comment animated pulse infinite text-primary" aria-hidden="true"></i>
											</div>
											<div class="col-sm-2 col-md-1 hidden-xs tramite__estado text-center"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en el resto de los dispositivos -->
											<span class="clearfix">	</span>
								        </a>
								      </h4>
								    </div>
								    <div id="tramite1" class="panel-collapse collapse animated" role="tabpanel" aria-labelledby="tramite1">
								      <div class="panel-body">
								      		<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-2"></div>
												<div class="col-md-8 comentario">
													<div class="comentario__admin">
														<div class="comentario__remitente">
															<p><b>María Velazques</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-left" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
													</div>
													<div class="comentario__user">
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-right" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
														<div class="comentario__remitente">
															<p><b>Alberto Barril</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														
													</div>
													<div class="comentario__acciones">
														<a href="javascript:;" data-toggle="modal" data-target="#tramiteComentar" class="btn btn-md btn-link">Comentar</a>
														<a href="javascript:;" class="btn btn-md btn-link">Editar</a>
														<a href="javascript:;" class="btn btn-md btn-link text-danger">Borrar</a>
													</div>
													<div class="modal fade" id="tramiteComentar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
													      </div>
													      <form class="modal-body" method="" action="">
																<div class="form-group">
																    <label for="comentario">Comentario</label>
																    <textarea type="text" class="form-control" id="comentario" placeholder="" rows="4"></textarea>			        	
																</div>
																<div class="form-group fileinput">
																	<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
																	<input type="file" class="form-control" id="exampleInputFile">
																	<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
																</div>					        
													      </form>
													      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
														        <button type="button" class="btn btn-primary">Crear Trámite</button>
													      </div>
													    </div>
													  </div>
													</div>	<!-- Popup Comentar -->
												</div>
								      		</div>
								      </div>
								    </div>
							  </div> <!-- Panel -->
<div class="panel panel-default">
								    <div class="panel-heading animated" role="tab" id="tramite-1">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#tramite1" href="#tramite1" aria-expanded="true" aria-controls="tramite1">
											<div class="col-xs-4 col-sm-2 tramite__fechahora"><p>20.09.16 <span class="hidden-xs">-</span><br class="visible-xs"> 12:45</p></div>
											<div class="col-xs-8 col-sm-2 tramite__tipo"><p>Tipo 1</p></div>
											<div class="col-xs-8 visible-xs tramite__estado"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en mobile -->
											<div class="col-xs-10 col-sm-4 col-md-5 tramite__titulo"><p><b>Pedido de Uniforme.por rotura de manga en un inconveniente con un ingresante</b></p></div>
											<div class="col-xs-2 col-sm-2 tramite__comentario text-center">
												<i class="fa fa-comment animated pulse infinite text-primary" aria-hidden="true"></i>
											</div>
											<div class="col-sm-2 col-md-1 hidden-xs tramite__estado text-center"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en el resto de los dispositivos -->
											<span class="clearfix">	</span>
								        </a>
								      </h4>
								    </div>
								    <div id="tramite1" class="panel-collapse collapse animated" role="tabpanel" aria-labelledby="tramite1">
								      <div class="panel-body">
								      		<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-2"></div>
												<div class="col-md-8 comentario">
													<div class="comentario__admin">
														<div class="comentario__remitente">
															<p><b>María Velazques</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-left" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
													</div>
													<div class="comentario__user">
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-right" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
														<div class="comentario__remitente">
															<p><b>Alberto Barril</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														
													</div>
													<div class="comentario__acciones">
														<a href="javascript:;" data-toggle="modal" data-target="#tramiteComentar" class="btn btn-md btn-link">Comentar</a>
														<a href="javascript:;" class="btn btn-md btn-link">Editar</a>
														<a href="javascript:;" class="btn btn-md btn-link text-danger">Borrar</a>
													</div>
													<div class="modal fade" id="tramiteComentar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
													      </div>
													      <form class="modal-body" method="" action="">
																<div class="form-group">
																    <label for="comentario">Comentario</label>
																    <textarea type="text" class="form-control" id="comentario" placeholder="" rows="4"></textarea>			        	
																</div>
																<div class="form-group fileinput">
																	<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
																	<input type="file" class="form-control" id="exampleInputFile">
																	<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
																</div>					        
													      </form>
													      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
														        <button type="button" class="btn btn-primary">Crear Trámite</button>
													      </div>
													    </div>
													  </div>
													</div>	<!-- Popup Comentar -->
												</div>
								      		</div>
								      </div>
								    </div>
							  </div> <!-- Panel -->
<div class="panel panel-default">
								    <div class="panel-heading animated" role="tab" id="tramite-1">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#tramite1" href="#tramite1" aria-expanded="true" aria-controls="tramite1">
											<div class="col-xs-4 col-sm-2 tramite__fechahora"><p>20.09.16 <span class="hidden-xs">-</span><br class="visible-xs"> 12:45</p></div>
											<div class="col-xs-8 col-sm-2 tramite__tipo"><p>Tipo 1</p></div>
											<div class="col-xs-8 visible-xs tramite__estado"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en mobile -->
											<div class="col-xs-10 col-sm-4 col-md-5 tramite__titulo"><p><b>Pedido de Uniforme.por rotura de manga en un inconveniente con un ingresante</b></p></div>
											<div class="col-xs-2 col-sm-2 tramite__comentario text-center">
												<i class="fa fa-comment animated pulse infinite text-primary" aria-hidden="true"></i>
											</div>
											<div class="col-sm-2 col-md-1 hidden-xs tramite__estado text-center"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en el resto de los dispositivos -->
											<span class="clearfix">	</span>
								        </a>
								      </h4>
								    </div>
								    <div id="tramite1" class="panel-collapse collapse animated" role="tabpanel" aria-labelledby="tramite1">
								      <div class="panel-body">
								      		<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-2"></div>
												<div class="col-md-8 comentario">
													<div class="comentario__admin">
														<div class="comentario__remitente">
															<p><b>María Velazques</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-left" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
													</div>
													<div class="comentario__user">
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-right" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
														<div class="comentario__remitente">
															<p><b>Alberto Barril</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														
													</div>
													<div class="comentario__acciones">
														<a href="javascript:;" data-toggle="modal" data-target="#tramiteComentar" class="btn btn-md btn-link">Comentar</a>
														<a href="javascript:;" class="btn btn-md btn-link">Editar</a>
														<a href="javascript:;" class="btn btn-md btn-link text-danger">Borrar</a>
													</div>
													<div class="modal fade" id="tramiteComentar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
													      </div>
													      <form class="modal-body" method="" action="">
																<div class="form-group">
																    <label for="comentario">Comentario</label>
																    <textarea type="text" class="form-control" id="comentario" placeholder="" rows="4"></textarea>			        	
																</div>
																<div class="form-group fileinput">
																	<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
																	<input type="file" class="form-control" id="exampleInputFile">
																	<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
																</div>					        
													      </form>
													      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
														        <button type="button" class="btn btn-primary">Crear Trámite</button>
													      </div>
													    </div>
													  </div>
													</div>	<!-- Popup Comentar -->
												</div>
								      		</div>
								      </div>
								    </div>
							  </div> <!-- Panel -->
<div class="panel panel-default">
								    <div class="panel-heading animated" role="tab" id="tramite-1">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#tramite1" href="#tramite1" aria-expanded="true" aria-controls="tramite1">
											<div class="col-xs-4 col-sm-2 tramite__fechahora"><p>20.09.16 <span class="hidden-xs">-</span><br class="visible-xs"> 12:45</p></div>
											<div class="col-xs-8 col-sm-2 tramite__tipo"><p>Tipo 1</p></div>
											<div class="col-xs-8 visible-xs tramite__estado"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en mobile -->
											<div class="col-xs-10 col-sm-4 col-md-5 tramite__titulo"><p><b>Pedido de Uniforme.por rotura de manga en un inconveniente con un ingresante</b></p></div>
											<div class="col-xs-2 col-sm-2 tramite__comentario text-center">
												<i class="fa fa-comment animated pulse infinite text-primary" aria-hidden="true"></i>
											</div>
											<div class="col-sm-2 col-md-1 hidden-xs tramite__estado text-center"><p class="text-danger"  data-toggle="tooltip" title="26/05/2017 - 14:30 ">Cerrado</p></div>
											<!-- estado visible en el resto de los dispositivos -->
											<span class="clearfix">	</span>
								        </a>
								      </h4>
								    </div>
								    <div id="tramite1" class="panel-collapse collapse animated" role="tabpanel" aria-labelledby="tramite1">
								      <div class="panel-body">
								      		<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-2"></div>
												<div class="col-md-8 comentario">
													<div class="comentario__admin">
														<div class="comentario__remitente">
															<p><b>María Velazques</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-left" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
													</div>
													<div class="comentario__user">
														<div class="comentario__comentario">
															<div class="comentario__comentario__dialogo">
											                    <i class="fa fa-caret-right" aria-hidden="true"></i>

																<p>Esto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subidoEsto es un comentario sobre el tramite subido.</p>
															</div>
														</div>
														<div class="comentario__remitente">
															<p><b>Alberto Barril</b></p>
															<p><i>27/02/2017
															<br>15:30</i></p>
														</div>
														
													</div>
													<div class="comentario__acciones">
														<a href="javascript:;" data-toggle="modal" data-target="#tramiteComentar" class="btn btn-md btn-link">Comentar</a>
														<a href="javascript:;" class="btn btn-md btn-link">Editar</a>
														<a href="javascript:;" class="btn btn-md btn-link text-danger">Borrar</a>
													</div>
													<div class="modal fade" id="tramiteComentar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
													      </div>
													      <form class="modal-body" method="" action="">
																<div class="form-group">
																    <label for="comentario">Comentario</label>
																    <textarea type="text" class="form-control" id="comentario" placeholder="" rows="4"></textarea>			        	
																</div>
																<div class="form-group fileinput">
																	<label class="btn btn-md btn-primary" for="exampleInputFile">Seleccionar Archivo</label>
																	<input type="file" class="form-control" id="exampleInputFile">
																	<p class="help-block">El archivo puede tener un tamaño máximo de 5mb.</p>
																</div>					        
													      </form>
													      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
														        <button type="button" class="btn btn-primary">Crear Trámite</button>
													      </div>
													    </div>
													  </div>
													</div>	<!-- Popup Comentar -->
												</div>
								      		</div>
								      </div>
								    </div>
							  </div> <!-- Panel -->
							 
						</div> <!-- End Panel-group -->
				</div>


			 </div>
        </section>
 <?php include('include/footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
		    $("body").tooltip({ 
		    	'selector': '[data-toggle=tooltip]', 
			    'placement': 'bottom',
			    'container':'body'
  
		});
		});
	</script>        
    </body>
</html>
