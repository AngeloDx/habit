<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Habitat</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="{{ asset('css/custom/wizard/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/custom/wizard/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('css/custom/demo.css') }}" rel="stylesheet" />

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('images/img_8.jpg')">
    <!--   Creative Tim Branding   -->


    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard">
                <form action="" method="">



                        <div class="tab-content">


                            <div class="" >
                                <h4 class="info-text">O que desejas Publicar? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">

                                          <a href="{{ route('propriedade.create')}}" >    <div class="col-sm-3 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Selecione para Publicar uma propriedade.">
                                                <input type="radio" name="type" value="House">
                                                <div class="icon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <h6>Propriedades</h6>
                                            </div>
                                        </div>
                                      </a>
                                    <a href="" >   <div class="col-sm-3">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Selecione para Publicar um Projecto">
                                                <input type="radio" name="type" value="Appartment">
                                                <div class="icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <h6>Projectos</h6>
                                            </div>
                                        </div>
                                      </a>
                                        <div class="col-sm-3">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Selecione para Publicar uma Terreno">
                                                <input type="radio" name="type" value="Appartment">
                                                <div class="icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <h6>Terrenos</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="wizard-footer">

                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Produto da Maximus
        </div>
    </div>
</div>

</body>


	<!--   Core JS Files   -->
	<script src="js/custom/wizard/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/custom/wizard/bootstrap.min.js" type="text/javascript"></script>
	<!-- <script src="js/custom/wizard/jquery.bootstrap.wizard.js" type="text/javascript"></script> -->

	<!--  Plugin for the Wizard -->
	<script src="js/custom/wizard/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/custom/wizard/jquery.validate.min.js"></script>

</html>
