<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Publicar Terreno</title>

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
<div class="image-container set-full-height" style="background-image: url('images/wizard-city.jpg')">
    <!--   Creative Tim Branding   -->


    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard">
                <form action="" method="">
                <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>LIST</b> YOUR PLACE <br>
                        	   <small>This information will let us know more about your place.</small>
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#location" data-toggle="tab">Location</a></li>
	                            <li><a href="#type" data-toggle="tab">Type</a></li>
	                            <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
	                            <li><a href="#description" data-toggle="tab">Description</a></li>
	                        </ul>
						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Let's start with the basic details</h4>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                       <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option disabled="" selected="">- country -</option>
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Accommodates</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- persons -</option>
                                            <option>1 Person</option>
                                            <option>2 Persons </option>
                                            <option>3 Persons</option>
                                            <option>4 Persons</option>
                                            <option>5 Persons</option>
                                            <option>6+ Persons</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Rent price</label>
                                          <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Rent price per day">
                                              <span class="input-group-addon">$</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="type">
                                <h4 class="info-text">What type of location do you have? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="type" value="House">
                                                <div class="icon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <h6>House</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type" value="Appartment">
                                                <div class="icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <h6>Appartment</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="facilities">
                                <h4 class="info-text">Tell us more about facilities. </h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Your place is good for</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- type -</option>
                                            <option>Business</option>
                                            <option>Vacation </option>
                                            <option>Work</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Is air conditioning included ?</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- response -</option>
                                            <option>Yes</option>
                                            <option>No </option>
                                          </select>
                                      </div>
                                     </div>
                                     <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Does your place have wi-fi?</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- response -</option>
                                            <option>Yes</option>
                                            <option>No </option>
                                          </select>
                                       </div>
                                      </div>
                                      <div class="col-sm-5">
                                       <div class="form-group">
                                          <label>Is breakfast included?</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- response -</option>
                                            <option>Yes</option>
                                            <option>No </option>
                                          </select>
                                       </div>
                                      </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description. </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Place description</label>
                                            <textarea class="form-control" placeholder="" rows="9">

                                            </textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
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
        <div class="container">
             Produto da Maximus
        </div>
    </div>
</div>

</body>


	<!--   Core JS Files   -->
	<script src="js/custom/wizard/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/custom/wizard/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/custom/wizard/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/custom/wizard/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/custom/wizard/jquery.validate.min.js"></script>

</html>
