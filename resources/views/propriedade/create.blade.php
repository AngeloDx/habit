	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
		<link rel="icon" type="image/png" href="assets/img/favicon.png" />
		<title>Habitat</title>
		<!-- CSS Files -->
	    <link href="{{ asset('css/custom/wizard/bootstrap.min.css') }}" rel="stylesheet" />
	    <link href="{{ asset('css/custom/wizard/check.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/custom/wizard/paper-bootstrap-wizard.css') }}" rel="stylesheet" />

	  <link href="{{ asset('css/custom/icooness/font/flaticon.css') }}" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
		 <link href="{{ asset('css/custom/plug.css') }}" rel="stylesheet" />
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/custom/owl.carousel.min.css') }}" rel="stylesheet">
		<!-- Fonts and Icons -->
	    <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"> -->
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<!-- <link href="{{ asset('css/custom/wizard/themify-icons.css') }}" rel="stylesheet"> -->
		<style type="text/css">

        .main-section{

            margin:0 auto;

            padding: 20px;

            margin-top: 100px;

            background-color: #fff;

            box-shadow: 0px 0px 20px #c1c1c1;

        }

        .fileinput-remove,

        .fileinput-upload{

            display: none;

        }

				.file-drop-zone {
    border: 1px dashed #aaa;
    border-radius: 4px;
    height: 100%;
    text-align: center;
    vertical-align: middle;
    margin: 0 !important;
    padding: 5px;
}
.file-size-info {
    display: none !important;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 160px;
    height: 15px;
    margin: auto;
}
.file-caption-main {
    width: 75%;
}
.input-group-btn .btn {
    border-width: 1px;
    padding: 4px 18px;
        padding-top: 4px;
        padding-right: 18px;
        padding-bottom: 4px;
        padding-left: 18px;
    padding-right: 59px;
}
.krajee-default .file-caption-info, .krajee-default .file-size-info {
    display: none;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 160px;
    height: 15px;
    margin: auto;
}
.file-upload-indicator {

    display: none;
	}

	/* overide do paper bootstrap  */
	.input-group-addon {
    background-color: #F3F2EE;
    border: 1px solid #e8e7e3;
        border-left-color: rgb(232, 231, 227);
        border-left-style: solid;
        border-left-width: 1px;
    border-radius: 4px;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
				padding-bottom: 0;
			padding-right: 28px;
			padding-left: 4px;
}
/* .logo-container {
    left: 50px;
    position: absolute;
    top: 20px;
    z-index: 3;
}
.logo-container .logo {
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #333333;
    width: 60px;
    float: left;
}
}
.logo-container .brand {
    font-size: 18px;
    color: #FFFFFF;
    line-height: 20px;
    float: left;
    margin-left: 10px;
    margin-top: 10px;
    width: 60px;
} */

    </style>


		</head>

		<body>

		<div class="image-container set-full-height" style="background-image: url('../images/img_1.jpg')">

<!--
			<a href="{{route('index')}}">
							 <div class="logo-container">
									<div class="logo">
											<img src="../images/casa.jpg">
									</div>
									<div class="brand">
											Pagina Inicial
									</div>
							</div>
					</a> -->

		    <!--   Big container   -->
		    <div class="container">
		        <div class="row">
			        <div class="col-sm-8 col-sm-offset-2">

			            <!--      Wizard container        -->
			            <div class="wizard-container">
			                <div class="card wizard-card" data-color="azure" id="wizard">
	                     <form  method="post" action="{{ route('propriedade.store') }}" id="msg_form" autocomplete="off" enctype="multipart/form-data">

	                            @csrf
			                    	<div class="wizard-header">
			                        	<h3 class="wizard-title">Publique a sua Propriedade</h3>

			                    	</div>

									<div class="wizard-navigation">
										<div class="progress-with-circle">
										     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
										</div>
										<ul>
				                            <li>
												<a href="#Informacao_Basica" data-toggle="tab">
													<div class="icon-circle">
														<i class="far fa-info" style="font-weight:800; line-height:3;"></i>
													</div>
													Informacao Basica
												</a>
											</li>
				                            <li>
												<a href="#Localizacao" data-toggle="tab">
													<div class="icon-circle">
														<i class="fas fa-map-marker-alt" style="font-weight:800; line-height:3;"></i>

													</div>
													Localizacao
												</a>
											</li>
				                            <li>
												<a href="#detalhes" data-toggle="tab">
													<div class="icon-circle">
														<i class="far fa-calendar" style="font-weight:800; line-height:3;"></i>
													</div>
													detalhes
												</a>
											</li>
				                        </ul>
									</div>
			                        <div class="tab-content">
			                            <div class="tab-pane" id="Informacao_Basica">
			                          <h4 class="info-text">Quem Publica? </h4>

	@if($errors->any())
	<div class="alert alert-danger">
	 <ul>
	  @foreach($errors->all() as $error)
	  <li>{{ $error }}</li>
	  @endforeach
	 </ul>
	</div>
	@endif

	<div class="row">
	                                      <div class="col-sm-8 col-sm-offset-2">
	                                          <div class="col-sm-4 col-sm-offset-2">
	                        <div class="choice" data-toggle="owner-radio">
	                                                  <input type="checkbox" name="Proprietario" value="Proprietario">
	                                                  <div class="card card-checkboxes card-hover-effect">
	                                                      <i class="far fa-user"></i>
	                            <p>Proprietario</p>
	                                                  </div>
	                                              </div>
	                                          </div>
	     <div class="col-sm-4">
	    <div class="choice" data-toggle="owner-radio">
	          <input type="checkbox" name="broker" value="broker">
	            <div class="card card-checkboxes card-hover-effect">
	              <i class=" far fa-calendar"></i>
	        <p>Agente</p>
	            </div>
	                                              </div>
	                                          </div>
	                                      </div>
	                                  </div>
	<div class="row">
	 <div class="col-sm-5">
	   <div class="form-group">
	   <label>Listar Para</label>
	   <select name="intencao_id" class="form-control">
	    <option disabled="" selected="">- Intencao-</option>
	                                           @forelse($intencao as $intencao)
	   <option value="{{$intencao->id}}"> {{$intencao->nome}} </option>
	                                          @empty
	                                          <div> nao ha intencao</div>
	                                          @endforelse
	       </select>
	 </div>
	 </div>


	</div>
	<label class="cat">Categoria <span class="text-danger">*</span></label>
	<div class="row">

		 <ul class="nav nav-tabs">
		   <li class="nav-item">

				 	<a href="#residencial" data-toggle="tab"><div class="comer active">Residencial</div></a>
		   </li>

		   <li class="nav-item">
		  <a href="#comercial" data-toggle="tab"><div class="comer">Comercial</div></a>
		   </li>

		 </ul>
	</div>

	<div class="icon-container row ">
		<div class="tab-content w-100" style="padding:0; padding-left:20px; padding-right:20px; min-height:auto;">
			<div class="tab-pane active" id="residencial">
	            @foreach($residencial as $residencial)

							    <div class="col-sm-3">
							          <div class="choice" data-toggle="wizard-radio">
																	<input type="radio" name="{{$residencial->nome}}" value="" id="{{$residencial->nome}}" onclick="javascript:mostrar()">
							                         <div class="card card-checkboxes card-hover-effect">
							                             <img src="{{ URL::to('/') }}/resicones/{{ $residencial->icon }}" height="20px" width="20px" style="margin:0 auto;">

							                                     <p>{{$residencial->nome}}</p>
							                             </div>
							           </div>
							     </div>


	                @endforeach

	                            </div>
	                            <div class="tab-pane " id="comercial">
	                               @foreach($comercial as $comercial)
																 <div class="col-sm-3">
																			 <div class="choice" data-toggle="wizard-radio">
																								 <input type="radio" name="{{$comercial->nome}}" value="" id="{{$comercial->nome}}" onclick="javascript:mostar()">
																											<div class="card card-checkboxes card-hover-effect">
																													<img src="{{ URL::to('/') }}/comercial/{{ $comercial->icon }}" height="20px" width="20px" style="margin:0 auto;">
																																	<p>{{$comercial->nome}}</p>
																													</div>
																				</div>
																	</div>
	                                @endforeach
	                            </div>
	                          </div>
	                        </div>

			                        	</div>
			                            <div class="tab-pane" id="Localizacao">
	                                  <div class="row">
	                                     <div class="col-sm-12">
	                                      <h4 class="info-text"> Detalhes sobre a localizacao</h4>
	                                    </div>
																		</div>
																		<div class="row">
	                                    <div class="form-group col-md-4">
	                                      <label>Designacao <span class="text-danger">*</span></label>
	                                        <input type="text" class="form-control" name="designacao" value="" placeholder="Designacao" />
	                                    </div>
	                                    <div class="col-md-4 form-group">

																	 							<label>Provincia</label>
																	 							 <select name="provincia_id" class="form-control">
	                                                 	<option disabled="" selected="">- Provincia -</option>
	                                                 @forelse($provincia as $provincia)

																	 									<option value="{{$provincia->id}}"> {{$provincia->nome}} </option>
	                                                  @empty

	                                                          <option>nao tem provincia</option>
	                                                 @endforelse

																	 							</select>

			                                   </div>
	                  <div class="col-md-4 form-group">
	                      <label>Cidade</label>
									    	<select name="cidade_id" class="form-control">
	                               <option disabled="" selected="">- Cidade -</option>
	                                @forelse($cidade as $cidade)
				                          <option value="{{$cidade->id}}"> {{$cidade->nome}}</option>
	                               @empty
	                              <option>nao tem cidade</option>
	                              @endforelse

	                    </select>

	                 </div>
	          <div class="col-md-4 form-group">

				        <label>Distrito</label>
				         	<select name="distrito_id" class="form-control">
	                       <option disabled="" selected="">- Distrito -</option>
	                            @forelse($distrito as $distrito)
	                          <option value="{{$distrito->id}}"> {{$distrito->nome}}</option>
	                         @empty
	                        <option>nao tem distrito</option>
	                       @endforelse
				         	</select>

	            </div>
	              <div class="form-group col-md-4">
		           	<label>Bairo <span class="text-danger">*</span></label>
		            <input type="text" class="form-control" name="bairo" value="" placeholder="Bairo" />
	        	</div>
	           <div class="form-group col-md-4">
	            <label>Avenida <span class="text-danger">*</span></label>
	            <input type="text" class="form-control" name="avenida" value="" placeholder="Avenida" />
	          </div>
	        <div class="form-group col-md-4">
		         <label>Rua <span class="text-danger">*</span></label>
		         <input type="text" class="form-control"  name="rua" value="" placeholder="Rua" />
	      </div>
	      <div class="form-group col-md-4 desc"id="quarteirao">
	         <label>Quarteirao <span class="text-danger">*</span></label>
	         <input type="text" class="form-control"  name="quarteirao" value="" placeholder="Quarteirao" />
	      </div>
	        <div class="form-group col-md-4" id="andar">
	          	<label>Andar <span class="text-danger">*</span></label>
	          	<input type="text" class="form-control" name="andar" value="" placeholder="Andar"  />
	       </div>
	          <div class="form-group col-md-4">
	              <label>Numero da casa <span class="text-danger">*</span></label>
	              <input type=" number" class="form-control"  name="nrcasa" value="" placeholder="Numero da Casa" />
						</div>


	            <div class="col-md-3 form-group mr-2">
	                <label>Disponibilidade</label>
	                <div class="input-group">
	               <input type="date" name="disponibilidade" class="form-control" placeholder="">
	                                              <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
					      </div>
	           </div>
	            <div class="col-md-4 form-group">
	                <label>Ano da construcao</label>
	                <div class="input-group">
	               <input type="date" name="construcao" class="form-control" placeholder="">
	                                              <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
	            </div>
	         </div>

	      </div>
	  </div>

		<div class="tab-pane" id="detalhes">
	      <div class="row">
	          <div class="form-group col-md-4 mr-2" id="area">
	              <label>Area <span class="text-danger">*</span></label>
	              <input type=" number" class="form-control"  name="area" value="" placeholder="Area da Propriedade" />

	         </div>
	          <div class="form-group col-md-3 mr-2 " id="quarto">
	          <label>Quartos <span class="text-danger">*</span></label>
	          <input type=" number" class="form-control"  name="quarto" value="" placeholder=" Numero de Quartos" />
	          </div>

	        <div class="form-group col-md-4 mr-2" id="wc">
	           <label>Casa de banho <span class="text-danger">*</span></label>
	           <input type=" number" class="form-control"  name="wc" value="" placeholder="Casas de Banho" />
	      </div>
	    </div>

	<div class="container-fluid">
		<h4>Outras Facilidades</h4>
	    <ul class="checklista">
	        <li class="illista">
	          <input type="checkbox" id="myCheckbox1" class="check" name="consinha" rel="tooltip" title="Armazem"/>

	            <label for="myCheckbox1">
						<img src="../images/png/kitchen.png" />
							</label>
	      </li>
	     <li class="illista">
	         <input type="checkbox" id="myCheckbox2" name="escritorio"  />
	       <label for="myCheckbox2">
		      <img src="../images/png/desk.png" />
					<span>escritorio</span>
	      </label>
	    </li>
	    <li class="illista">
	  <input type="checkbox" id="myCheckbox3" name="psicinas" />
	  <label for="myCheckbox3">
		<img src="../images/png/swimming.png" />
		</label>
	  </li>

	<li class="illista">
	  <input type="checkbox" id="myCheckbox4" name="jardin"   />
	  <label for="myCheckbox4">
		<img src="../images/png/farming.png" />
		</label>
	</li>
	<li class="illista">
	    <input type="checkbox" id="myCheckbox5" name="garagen"   />
	    <label for="myCheckbox5">
				<img src="../images/png/garage.png" />
			</label>
	</li>
	  <li class="illista">
	      <input type="checkbox" id="myCheckbox6" name="cerca_electrica"   />
	      <label for="myCheckbox6">
					<img src="../images/png/fence.png" />
				</label>
	  </li>
	  <li class="illista">
	      <input type="checkbox" id="myCheckbox7" name="Seguranca"  />
	      <label for="myCheckbox7">
			<img src="../images/png/policeman.png" />
				</label>
	 </li>
	  <li class="illista">
	    <input type="checkbox" id="myCheckbox8" name="gerador"  />
	    <label for="myCheckbox8">
			<img src="../images/png/electric-generator.png" />
			</label>
	</li>
	<li class="illista">
		<input type="checkbox" id="myCheckbox9" name="cctv"  />
		<label for="myCheckbox9">
		<img src="../images/png/cctv.png" />
		</label>
</li>

	</ul>





			</div>

				<div class="container">

	        <div class="row">

	            <!-- <div class="col-lg-12 col-sm-12 col-11 main-section"> -->

	                <!-- <h1 class="text-center text-info">Carregar Fotos</h1><br> -->




	                    <div class="form-group w-100">

	                        <div class="file-loading">

	                            <input id="file-1" type="file" name="fotos" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">

	                        </div>

	                    </div>



	            <!-- </div> -->

	        </div>

	    </div>
	<!-- <input name="fotos" type="file" multiple /> -->

	<div class="container-fluid">

<label for="descricao">Descrição Da propriedade<span class="text-danger">*</span></label>
<textarea name="descricao" id="descricao" rows="6" class="form-control mb-2"></textarea>



	<div class="col-md-4 ">
		<div class="form-group">
			<label>Preco<span class="text-danger">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Preco" name="preco" >
				<span class="input-group-addon">Mzn</span>
			</div>
		</div>
 </div>

</div>
	<input name="capa" type="file" />




			<div class="col-lg-12">
			                                        <div class="card br-all" style="min-height:423px">
			                                            <!-- <div class="">
			                                                <h6 class="card-header-title">Marque a Localização no Mapa</h6>
			                                            </div> -->
			                                            <div class="card-body" id="map"></div>

			                                            <div class="card-footer p-sm-1 no-bg">
			                                                <div class="col-4">
			                                                    <div class="form-group">
			                                                      		<input type="text" class="form-control" placeholder="latitude" name="latitude" id="latitude" >
			                                                    </div>
			                                                </div>
			                                                <div class="col-4">
			                                                    <div class="form-group ">
			                                                    	  	<input type="text" class="form-control" placeholder="longitude" name="longitude"  id="longitude">
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>



			                            </div>
			                        </div>
			                        <div class="wizard-footer">
			                        	<div class="pull-right">
			                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Proximo' />
			                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Salvar' />
			                            </div>

			                            <div class="pull-left">
			                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
			                            </div>
			                            <div class="clearfix"></div>
			                        </div>
			                    </form>
			                </div>
			            </div> <!-- wizard container -->
			        </div>
		        </div> <!-- row -->
		    </div> <!--  big container -->

			<div class="footer">
		        <div class="container text-center">
		            Produto  da <a href="https://www.maximus.com">Maximus</a>
		        </div>
		    </div>

		</div>

	</body>

		<!--   Core JS Files   -->
		<script src="{{asset('js/custom/wizard/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

		<script src="{{asset('js/custom/wizard/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/custom/wizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

		<!--  Plugin for the Wizard -->
		<script src="{{asset('js/custom/wizard/demo.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/custom/wizard/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

		<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
		<script src="{{asset('js/custom/wizard/jquery.validate.min.js')}}" type="text/javascript"></script>

			<!-- <script src="{{asset('js/custom/dropzone.js')}}"></script> -->
		<script>
			// $(document).ready(
		// function mostrar(){
		// 	if(document.getElementById('apartamento').checked){
		// 		 document.getElementById('andar').style.display = 'none';
		//
		// 	}
		// 	else {
		// 		document.getElementById('andar').style.display = 'block';
		// 	}
		// });

		$(document).ready(function(){
			$("input[name$='apartamento']").click(function() {
	        var test = $(this).val();

	        $("div.desc").hide();
	        $("#apartamento" + test).show();
	    });

		});


		</script>
		<script type="text/javascript">

        $("#file-1").fileinput({

            theme: 'fa',

            uploadUrl: "/image-view",

            uploadExtraData: function() {

                return {

                    _token: $("input[name='_token']").val(),

                };

            },

            allowedFileExtensions: ['jpg', 'png', 'gif'],

            overwriteInitial: false,

            maxFileSize:2000,

            maxFilesNum: 10,

            slugCallback: function (filename) {

                return filename.replace('(', '_').replace(']', '_');

            }

        });

    </script>
		<script>
        var map;
        var markers = [];
        function initMap(listener) {
            var maputo = {lat: -25.959621, lng: 32.578774};
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13.0,
                center: maputo,
                mapTypeId: 'terrain'
            });

            // addicionar marcador  no mapa com click
            map.addListener('click', function(event) {
                if (markers.length >= 1) {
                    deleteMarkers();
                }
                addMarker(event.latLng);
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value =  event.latLng.lng();
            });
        }

        //fazer um push dos marcadores do array no mapa
        function addMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }

        // colocar todos marcadores no mapa
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        //Remover os marcadores do mapa
        function clearMarkers() {
            setMapOnAll(null);
        }
        //  apagar todos marcadores no array removendo as referencias
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdrPxZ-u0hSuRW3Yg7jIHsaL9KXUXkIPU&callback=initMap"></script>




	</html>
