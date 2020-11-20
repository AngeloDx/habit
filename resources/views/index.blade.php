@extends('layouts.app')
@section('content')

<div class="container cont" id="caro">

    <div id="" class="carousel slide z-depth-1-half" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="images/hero_bg_1.jpg" class="d-block w-100 altura"/>
            </div>
            <div class="carousel-item">
                <img src="images/hero_bg_2.jpg" class="d-block w-100 altura"/>
            </div>
            <div class="carousel-item">
                <img src="images/hero_bg_3.jpg" class="d-block w-100 altura"/>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row mb-5 vet-align">
    <div class="col-lg-8 mx-auto">

        <form action="">
            <div class="input-group mb-4">
                <input type="search" placeholder="Pesquise Propriedades" aria-describedby="button-addon5" class="form-control">
                <div class="input-group-append">
                    <button id="button-addon5" type="submit" class="btn btn-primary back">Pesquisar</button>
                    <button id="button-addon5" type="submit" class="btn ">Pesquisar no Mapa</button>
                </div>
            </div>
        </form>
        <!-- End -->

    </div>
</div>

<div class="row mb-5 ">
    <div class="col-12 text-center">
        <div class="site-section-title iconn">
            <h2>Categorias Populares</h2>
        </div>

    </div>
</div>

<!-- BEGIN row -->
<div class="row mx-auto">
    <!-- BEGIN col-6 -->
    <div class="col-12 col-md-6 m-b-5">
    <!-- BEGIN widget-card -->
        <div class="widget-card widget-card-inverse" style="height: 18rem">
            <!-- BEGIN widget-card-cover -->
            <div class="widget-card-cover cat-5-bg" style="background-image: url('../images/img_1.jpg')">
                <div class="cover-bg"></div>
            </div>
            <!-- END widget-card-cover -->
            <!-- BEGIN widget-card-content -->
            <div class="widget-card-content">
                <div class="dropdown dropdown-icon pull-right">
                    <a href="#" class="text-white" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">View</a>
                        <a href="#" class="dropdown-item">Analytics</a>
                        <a href="#" class="dropdown-item">Report</a>
                    </div>
                </div>
                <h4 class="widget-title">Apartamentos</h4>
            </div>
            <!-- END widget-card-content -->
            <!-- BEGIN widget-card-content -->
            <div class="widget-card-content bottom">
                <div class="widget-list widget-list-inverse widget-list-full-width">
                    <a href="#" class="widget-list-item">

                        <div class="widget-list-content">
                            <h4>Apartamentos Bem Localizados</h4>
                            <p><i class="far fa-eye"></i> Uma vista espetacular</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END widget-card-content -->
        </div>
        <!-- END widget-card -->
    </div>
    <!-- END col-6 -->
    <!-- BEGIN col-6 -->
    <div class="col-12 col-md-6 m-b-5">
    <!-- BEGIN row -->
    <div class="col-12  m-b-5">
    <!-- BEGIN row -->

        <div class="row">




                <div class="col-6">

                <a href="" class="widget-card widget-card-inverse dynamic text-center height-150" style="background-image: url('../images/img_2.jpg');
                background-size:cover;">

                    <div class=" cat-4-bg " >
                      <!-- <img src="images/img_1.jpg" class="img-fluid"/> -->

                    </div>
                    <div class="widget-card-content p-t-40 p-b-40">
                        <h4 class="widget-title widget-title-inverse f-s-20 m-b-5">flat</h4>
                        <div class="widget-desc widget-desc-inverse">descricao <span class="d-none d-md-inline"><br /></span> and 12 more</div>
                            <i class="far fa-user"></i>
                    </div>

                </a>

                <!-- END widget-card -->

            </div>
            <div class="col-6">

            <a href="" class="widget-card widget-card-inverse dynamic text-center height-150" style="background-image: url('../images/img_3.jpg');
            background-size:cover;">

                <div class=" cat-4-bg " >
                  <!-- <img src="images/img_1.jpg" class="img-fluid"/> -->

                </div>
                <div class="widget-card-content p-t-40 p-b-40">
                    <h4 class="widget-title widget-title-inverse f-s-20 m-b-5">flat</h4>
                    <div class="widget-desc widget-desc-inverse">descricao <span class="d-none d-md-inline"><br /></span> and 12 more</div>
                        <i class="far fa-user"></i>
                </div>

            </a>

            <!-- END widget-card -->

        </div>
        <div class="col-6">

        <a href="" class="widget-card widget-card-inverse dynamic text-center height-150"  style="background-image: url('../images/img_4.jpg');
        background-size:cover;">

            <div class=" cat-4-bg ">
              <!-- <img src="images/img_1.jpg" class="img-fluid"/> -->

            </div>
            <div class="widget-card-content p-t-40 p-b-40">
                <h4 class="widget-title widget-title-inverse f-s-20 m-b-5">flat</h4>
                <div class="widget-desc widget-desc-inverse">descricao <span class="d-none d-md-inline"><br /></span> and 12 more</div>
                    <i class="far fa-user"></i>
            </div>

        </a>

        <!-- END widget-card -->

    </div>
    <div class="col-6">

    <a href="" class="widget-card widget-card-inverse dynamic text-center height-150"style="background-image: url('../images/img_5.jpg');
    background-size:cover;">

        <div class=" cat-4-bg ">
          <!-- <img src="images/img_1.jpg" class="img-fluid"/> -->

        </div>
        <div class="widget-card-content p-t-40 p-b-40">
            <h4 class="widget-title widget-title-inverse f-s-20 m-b-5">flat</h4>
            <div class="widget-desc widget-desc-inverse">descricao <span class="d-none d-md-inline"><br /></span> and 12 more</div>
                <i class="far fa-user"></i>
        </div>

    </a>

    <!-- END widget-card -->

</div>

          </div>

          </div>






    </div>
    <!-- END col-6 -->
</div>
<!-- END row -->


<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="site-section-title iconn">
                    <h2>Propriedades Recentes</h2>
                </div>

            </div>
        </div>
        <div class="row mb-5">
          @forelse($propriedade as $propriedade)
            <div class="col-xl-4 col-md-6 col-lg-4">
                <a href="{{ route('propriedade.show', $propriedade->id) }} " class="prop-entry d-block single_property">


                  <div class="property_thumb">
                          <div class="property_tag">
                                {{$propriedade->intencao->nome}}
                          </div>
                          <figure>
 <!-- <img src="images/img_2.jpg" class="img-fluid"/> -->


                        <img src="{{ URL::to('/') }}/images/fotos/{{ $propriedade->fotos }}" class="img-fluid"  />
                      </figure>
                      </div>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">{{$propriedade->preco}} Mt</span>
                            <h3 class="title">{{$propriedade->designacao}}</h3>
                            <p class="location">{{$propriedade->provincia->nome}}</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>{{$propriedade->area}}m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Quartos:</span>
                                    <strong>{{$propriedade->quarto}}</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>{{$propriedade->wc}}</strong>
                                </div>
                                <!-- <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            @empty
            <div class="row"> Nao tem nehuma Propriedade</div>
            @endforelse
           <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_2.jpg" class="img-fluid"/>
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">2,438,000Mt</span>
                            <h3 class="title">Avenida da Marginal</h3>
                            <p class="location">Cidade da Matola</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Quartos:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--  <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_3.jpg" class="img-fluid"/>
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">5,320,000Mt</span>
                            <h3 class="title">Belo Horizonte</h3>
                            <p class="location">Cidade da Matola</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Quartos:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_4.jpg" class="img-fluid"/>
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">2,350,000 Mt</span>
                            <h3 class="title">Bairro das Estacao</h3>
                            <p class="location">Cidade de Maputo</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Qaurtos:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_5.jpg" class="img-fluid"/>

                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">1,550,000 Mt</span>
                            <h3 class="title">Vila Olimpica</h3>
                            <p class="location">Cidade de Maputo</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Quartos:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_6.jpg" class="img-fluid"/>

                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">4,291,000 Mt</span>
                            <h3 class="title">Bairo da Manga</h3>
                            <p class="location">Cidade da Beira</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Quartos:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garagens:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

        </div>

    </div>
</div>




@endsection
