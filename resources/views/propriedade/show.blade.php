@extends('layouts.app')
@section('content')
<div class="site-section site-section-sm bg-white">
      <div class="container mt-2">
        <div class="row  mt-2">
          <div class="col-lg-8 ">
            <div class="mb-5">

              <div class="slide-one-item home-slider owl-carousel">
                    @foreach($data as $propriedade)
                <div>

                  <img src="{{ URL::to('/') }}/images/fotos/{{ $data->fotos }}" class="img-fluid"  />

                </div>

                 @endforeach
              </div>

            </div>

          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded " style="padding-top: 0px; padding-left: 5px;">

              <!-- <h3 class="h4 text-black widget-title mb-3">Detalhes da Propriedade</h3> -->
              <!-- <div class="row"> -->

              <div class="footer_pro ">
                                      <ul>
                                        <li>
                                            <div class="single_info_doc border-bottom">

                                                    <img src="{{ URL::to('/images/svg_icon/location.svg') }}" >

                                                <span>Localizacao</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_info_doc d-flex">
                                              <span class="d-inline-block text-black mb-0 ">Provincia:</span> &nbsp
                                              <strong class="d-block">{{$data->provincia->nome}}</strong>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_info_doc d-flex">

                                              <span class="d-inline-block text-black mb-0 ">Bairo:</span> &nbsp
                                              <strong class="d-block">{{$data->bairo}}</strong>

                                            </div>
                                        </li>
                                          <li>
                                              <div class="single_info_doc d-flex">

                                                <span class="d-inline-block text-black mb-0 ">Avenida:</span> &nbsp
                                                <strong class="d-block">{{$data->avenida}}</strong>

                                              </div>
                                          </li>
                                          <li class=" mt-3">
                                              <div class="single_info_doc border-bottom ">

                                                      <img src="{{ URL::to('/images/svg_icon/location.svg') }}" >

                                                  <span>compartimentos</span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="single_info_doc d-flex">
                                                <span class="d-inline-block text-black mb-0 ">Area:</span> &nbsp
                                                <strong class="d-block">{{$data->area}}</strong><span>m<sup>2</sup></span>


                                              </div>
                                          </li>

                                          <li>
                                              <div class="single_info_doc d-flex">
                                                <span class="d-inline-block text-black mb-0 ">Quartos:</span> &nbsp
                                                <strong class="d-block">{{$data->quarto}}</strong>


                                              </div>
                                          </li>
                                          <li>
                                              <div class="single_info_doc d-flex">
                                                <span class="d-inline-block text-black mb-0 ">Casa de Banho:</span> &nbsp
                                                <strong class="d-block">{{$data->wc}}</strong>


                                              </div>
                                          </li>
                                          <li class=" mt-3">
                                              <div class="single_info_doc border-bottom ">

                                                      <img src="{{ URL::to('/images/svg_icon/location.svg') }}" >

                                                  <span>Disponibilidade</span>
                                              </div>
                                          </li>


                                          <li>
                                              <div class="single_info_doc d-flex">
                                                <span class="d-inline-block text-black mb-0 ">Ano de Construcao:</span> &nbsp
                                                <strong class="d-block">{{$data->construcao}}</strong>


                                              </div>
                                          </li>
                                          <li>
                                              <div class="single_info_doc d-flex">
                                                <span class="d-inline-block text-black mb-0 ">Disponibilidade:</span> &nbsp
                                                <strong class="d-block">{{$data->construcao}}</strong>


                                              </div>
                                          </li>
                                          <li>
                                              <div class="single_info_doc d-flex">

                                                  <p>Preco:</p>
                                                  <span>{{$data->preco}}</span><span>mzn</span>
                                              </div>
                                          </li>
                                          <li class=" mt-3">
                                              <div class="single_info_doc border-bottom ">

                                                      <img src="{{ URL::to('/images/png/house-keys.svg') }}" >

                                                  <span>Outras Facilidades</span>
                                              </div>
                                          </li>
                                          <li>
                                 <div class="container">
                                             @if($data->consinha)
                                      <img src="{{ URL::to('/images/png/kitchen.png') }}" class="png-wid mr-2 mt-2" >
                                          @endif
                                          @if($data->jardin)
                                      <img src="{{ URL::to('/images/png/farming.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->psicinas)
                                      <img src="{{ URL::to('/images/png/swimming.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->escritorio)
                                      <img src="{{ URL::to('/images/png/desk.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->garagen)
                                      <img src="{{ URL::to('/images/png/garage.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->Seguranca)
                                      <img src="{{ URL::to('/images/png/policeman.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->cerca_electrica)
                                      <img src="{{ URL::to('/images/png/fence.png') }}" class="png-wid mr-2 mt-2">
                                          @endif
                                          @if($data->gerador)
                                      <img src="{{ URL::to('/images/png/electric-generator.png') }}" class="png-wid mr-2 mt-2">
                                          @endif

                                        </div>
                                      </li>



                                      </ul>
                                  </div>
              <!-- </div> -->

            </div>

            <input type="hidden" id="latitude" value="{{$data->latitude}}" />
              <input type="hidden" id="longitude" value="{{$data->longitude}}"/>


          </div>
          <div class="">
            <div class="bg-white row">
                <div class="container-fluid">

              <label for="descricao">Descrição Da propriedade<span class="text-danger"></span></label>
              <div  class=" mb-2">{{$data->descricao}}</div>
               </div>





              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Galeria da Propriedade</h2>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="{{ URL::to('/') }}/images/fotos/{{ $data->fotos }}" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="{{ URL::to('/') }}/images/{{ $data->fotos }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="{{ URL::to('/') }}/images/{{ $data->fotos }}" alt="Image" class="img-fluid"></a>
                </div>
              </div>

            </div>
            <div class="p-sm-0 br-bottom shadow-sm">
           <div id="mappropreidade" class="br-bottom-no-line" style="height: 265px;"></div>
       </div>
          </div>

        </div>

      </div>
    </div>







    @endsection
    <script>

function initmappropreidade() {
        // Map options
        var latitude = -25.959621;
        var longitude = 32.578774;

        var lat = parseFloat($('#latitude').val());
        var log = parseFloat($('#longitude').val());

        if (lat && log) {
            latitude = lat;
            longitude = log;
        }

        var options;
        options = {
            zoom: 15,
            center: {lat: latitude, lng: longitude}
        };
        // New map
        var map = new google.maps.Map(document.getElementById('mappropreidade'), options);

        var markers = [{
            coords: {lat: latitude, lng: longitude},
            content: '<p style="font-weight:bold">{{$data->designacao}}</p>'
        }];

        // Loop through markers
        for (var i = 0; i < markers.length; i++) {
            // Add marker
            addMarker(markers[i]);
        }

        // Add Marker Function
        function addMarker(props) {
            var marker = new google.maps.Marker({
                position: props.coords,
                map: map,
            });

            // Check for customicon
            if (props.iconImage) {
                // Set icon image
                marker.setIcon(props.iconImage);
            }

            // Check content
            if (props.content) {
                var infoWindow = new google.maps.InfoWindow({
                    content: props.content
                });

                marker.addListener('click', function () {
                    infoWindow.open(map, marker);
                });
            }
        }
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdrPxZ-u0hSuRW3Yg7jIHsaL9KXUXkIPU&callback=initmappropreidade">
</script>
