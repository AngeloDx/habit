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
 <link href="{{ asset('css/custom/dropzone.css') }}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
<link href="{{ asset('css/custom/owl.carousel.min.css') }}" rel="stylesheet">
	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/custom/wizard/themify-icons.css') }}" rel="stylesheet">

	</head>

	<body>

	<div class="image-container set-full-height" style="background-image: url('images/img_1.jpg')">




	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizard">
                     <form  method="post" action="{{ route('propriedade.update', $data->id) }}" id="msg_form" autocomplete="off" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">editar a sua Propriedade</h3>

		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#Informacao_Basica" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-list"></i>
												</div>
												Informacao Basica
											</a>
										</li>
			                            <li>
											<a href="#Localizacao" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-briefcase"></i>
												</div>
												Localizacao
											</a>
										</li>
			                            <li>
											<a href="#detalhes" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-pencil"></i>
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
                                                      <i class="ti-time"></i>
                            <p>Proprietario</p>
                                                  </div>
                                              </div>
                                          </div>
     <div class="col-sm-4">
    <div class="choice" data-toggle="owner-radio">
          <input type="checkbox" name="broker" value="broker">
            <div class="card card-checkboxes card-hover-effect">
              <i class="ti-calendar"></i>
        <p>Agente</p>
            </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
<div class="row">
 <div class="col-sm-5">
   <div class="form-group">
   <label>Listar Para</label><br>
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
   <div class="col-md-3 bg-danger">
	<a href="#residencial" data-toggle="tab"><div class="comer">Residencial</div></a>
   </div>
   <div class="col-md-3 offset-md-3">
	 <a href="#comercial" data-toggle="tab"><div class="comer">Comercial</div></a>
   </div>
</div>
<div class="icon-container row ">
	<div class="tab-content" style="padding:0; padding-left:20px; padding-right:20px; min-height:auto;">
		<div class="tab-pane active bg-danger" id="residencial">
            @foreach($residencial as $residencial)

						    <div class="col-sm-3">
						          <div class="choice" data-toggle="owner-radio">
																<input type="radio" name="{{$residencial->nome}}" value="">
						                         <div class="card card-checkboxes card-hover-effect">
						                             <img src="{{ URL::to('/') }}/images/{{ $residencial->icon }}">
						                                     <p>{{$residencial->nome}}</p>
						                             </div>
						           </div>
						     </div>


                @endforeach

                            </div>
                            <div class="tab-pane" id="comercial">
                               @foreach($comercial as $comercial)
															 <div class="col-sm-3">
																		 <div class="choice" data-toggle="owner-radio">
																							 <input type="radio" name="{{$comercial->nome}}" value="">
																										<div class="card card-checkboxes card-hover-effect">
																												<img src="{{ URL::to('/') }}/images/{{ $comercial->icon }}">
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
                                    <div class="form-group col-md-4">
                                      <label>Designacao <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="designacao" value="" placeholder="Designacao" />
                                    </div>
                                    <div class="col-md-3">
		                                     <div class="form-group">
																 							<label>Provincia</label><br>
																 							 <select name="provincia_id" class="form-control">
                                                 	<option disabled="" selected="">- Provincia -</option>
                                                 @forelse($provincia as $provincia)

																 									<option value="{{$provincia->id}}"> {{$provincia->nome}} </option>
                                                  @empty

                                                          <option>nao tem provincia</option>
                                                 @endforelse

																 							</select>
																 						</div>
		                                   </div>
                                       <div class="col-md-4">
	<div class="form-group">
																					<label>Cidade</label><br>
																							<select name="cidade_id" class="form-control">
        <option disabled="" selected="">- Cidade -</option>
            @forelse($cidade as $cidade)
			<option value="{{$cidade->id}}"> {{$cidade->nome}}</option>
              @empty
            <option>nao tem cidade</option>
            @endforelse

	</select>
    </div>
</div>
<div class="col-md-4 form-group">

			<label>Distrito</label><br>
				<select name="distrito_id" class="form-control">
                    <option disabled="" selected="">- Distrito -</option>
                        @forelse($distrito as $distrito)
                    <option value="{{$distrito->id}}"> {{$distrito->nome}}</option>
                     @empty
                    <option>nao tem distrito</option>
                    @endforelse
				</select>

    </div>
    <div class="form-group col-md-3">
		<label>Bairo <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="bairo" value="" placeholder="Bairo" />
	</div>
  <div class="form-group col-md-4">
  <label>Avenida <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="avenida" value="" placeholder="Avenida" />
</div>
<div class="form-group col-md-3">
	<label>Rua <span class="text-danger">*</span></label>
	<input type="text" class="form-control"  name="rua" value="" placeholder="Rua" />
</div>
<div class="form-group col-md-4">
<label>Quarteirao <span class="text-danger">*</span></label>
<input type="text" class="form-control"  name="quarteirao" value="" placeholder="Quarteirao" />
</div>
<div class="form-group col-md-4">
	<label>Andar <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="andar" value="" placeholder="Andar" />
</div>
<div class="form-group col-md-3">
<label>Numero da casa <span class="text-danger">*</span></label>
<input type=" number" class="form-control"  name="nrcasa" value="" placeholder="Numero da Casa" />															</div>

<div class=" pt-0 mar mr-2 ml-2">
<div id="map"></div>
</div>
 <div class="col-md-4">
    <div class="form-group">
        <label>Disponibilidade</label>
        <div class="input-group">
          <input type="date" name="disponibilidade" class="form-control" placeholder="">
                                              <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
        </div>
  </div>
</div>
 <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Ano da construcao</label>
                                          <div class="input-group">
                                              <input type="date" name="construcao" class="form-control" placeholder="">
                                              <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
		                            <div class="tab-pane" id="detalhes">
                                  <div class="row">
<div class="form-group col-md-4 mr-2">
 <label>Area <span class="text-danger">*</span></label>
<input type=" number" class="form-control"  name="area" value="" placeholder="Area da Propriedade" />

                                           </div>
<div class="form-group col-md-3 mr-2">
 <label>Quartos <span class="text-danger">*</span></label>
 <input type=" number" class="form-control"  name="quarto" value="" placeholder=" Numero de Quartos" />
</div>

<div class="form-group col-md-4 mr-2">
 <label>Casa de banho <span class="text-danger">*</span></label>
 <input type=" number" class="form-control"  name="wc" value="" placeholder="Casas de Banho" />
                                           </div>
</div>

<div class="container-fluid">
    <ul class="checklista">
        <li class="illista">
          <input type="checkbox" id="myCheckbox1" class="check" name="consinha" rel="tooltip" title="Armazem"/>

            <label for="myCheckbox1">
							<img src=" asset('images/kitchen-1.svg') "/>
						</label>
      </li>
     <li class="illista">
         <input type="checkbox" id="myCheckbox2" name="escritorio"  />
       <label for="myCheckbox2">
	      <img src="images/work.svg" />
      </label>
    </li>
    <li class="illista">
  <input type="checkbox" id="myCheckbox3" name="psicinas" />
  <label for="myCheckbox3">
		<img src="images/beach.svg" />
	</label>
  </li>

<li class="illista">
  <input type="checkbox" id="myCheckbox4" name="jardin"   />
  <label for="myCheckbox4">
		<img src="images/gar.svg" />
	</label>
</li>
<li class="illista">
    <input type="checkbox" id="myCheckbox5" name="garagen"   />
    <label for="myCheckbox5">
			<img src="images/car.svg" />
		</label>
</li>
  <li class="illista">
      <input type="checkbox" id="myCheckbox6" name="cerca_electrica"   />
      <label for="myCheckbox6">
				<img src="images/electric-fence.svg" />
			</label>
  </li>
  <li class="illista">
      <input type="checkbox" id="myCheckbox7" name="Seguranca"  />
      <label for="myCheckbox7">
				<img src="images/police.svg" />
			</label>
 </li>
  <li class="illista">
    <input type="checkbox" id="myCheckbox8" name="gerador"  />
    <label for="myCheckbox8">
			<img src="images/generator.svg" />
		</label>
</li>

</ul>





		</div>
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
<div class="row" >
	<div id="dZUpload" class="dropzone form-control">
      <div class="dz-default dz-message"></div>
</div>
</div>
<input name="fotos" type="file" multiple />
<input name="capa" type="file" />
	<input type="text" class="form-control" placeholder="latitude" name="latitude" >
  	<input type="text" class="form-control" placeholder="longitude" name="longitude" >
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
	<script src="{{asset('js/custom/wizard/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/custom/wizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('js/custom/wizard/demo.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/custom/wizard/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{asset('js/custom/wizard/jquery.validate.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/custom/dropzone.js')}}"></script>
	<script>
	$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#dZUpload").dropzone({
        url: "upload.ah",
        addRemoveLinks: true,
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});
	</script>
</html>
