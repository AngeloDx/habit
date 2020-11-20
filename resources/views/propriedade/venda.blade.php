@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
              $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
             });
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,

                data: function (d) {
                 d.start_date = $('#start_date').val();
                 d.end_date = $('#end_date').val();
                },

            });
           $('#btnFiterSubmitSearch').click(function(){
             $('#laravel_datatable').DataTable().draw(true);
           });
        });
    </script>
@section('content')
    <div class="south-search-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Aplicar Filtro</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="search" id="search" placeholder="ecreva aqui">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="filtro_provincia" name="provincia_id">
                                            <option>Provincia</option>
                                            @foreach($provincia as $provincia)
                                            	<option value="{{$provincia->id}}"> {{$provincia->nome}} </option>
						                                 @endforeach

                                        </select>


                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>Todas categorias</option>
                                            <option>Apartmentos</option>
                                            <option>Villas</option>
                                            <option>Casa de campo</option>
                                            <option>Condominios</option>

                                        </select>
                                    </div>
                                </div>





                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option>Quartos</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>



                                <!-- <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <!-- <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all back" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all back"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                        </div>
                                        <div class="range">120m <sup>2</sup>- 820m<sup>2</sup></div>
                                    </div> -->

                                    <!-- Distance Range
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all back" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mt - 1300 mt</div>
                                    </div>
                                </div> -->


                                    <div class="form-group mb-0">
                                        <button type="button" class="btn btn-warning" name="filtro" id="filtro">Filtrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

	<div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row mb-0 mt-3">
          @forelse($propriedade as $propriedade)
            <div class="col-xl-4 col-md-6 col-lg-4">
                <a href="{{ route('propriedade.show', $propriedade->id) }} " class="prop-entry d-block single_property">


                  <div class="property_thumb">
                          <!-- <div class="property_tag">
                                {{$propriedade->intencao->nome}}
                          </div> -->
                          <figure>
        <!-- <img src="images/img_2.jpg" class="img-fluid"/> -->

                        <!-- <img src="{{ asset('/images/') }}"  class="img-fluid" alt="" title=""> -->
                        <img src="{{ URL::to('/') }}../images/fotos/{{ $propriedade->fotos }}" class="img-fluid"  />
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
                                <div class="col">
                                    <span>Garagem:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            @empty
            <div class="row"> Nao tem nehuma Propriedade</div>
  {{$propriedade->links()}}
            @endforelse

        </div>

<table id="tabela">
  <tr>
    <td></td>
  </tr>
</table>

        <!-- <table class="table table-striped table-bordered">
          <h3 align="center">Total Data : <span id="total_records"></span></h3>
               <thead>
                <tr>
                 <th>Imagem</th>
                 <th>desigancao</th>
                 <th>localizacao</th>
                 <th>Postal Code</th>
                 <th>Country</th>
                </tr>
               </thead>
               <tbody>

               </tbody>
              </table> -->
		<div class="row">


          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>

              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>
        </div>

      </div>
    </div>




  </div>
  <script>
  var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 10000,
      max: 1000000,
      values: [ 200000, 750000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	siteSliderRange();
  </script>
  <!-- <script>
    $(document).ready(function(){
      fetch_propriedade();
    function fetch_propriedade($query=''){
      $.ajax({
        url:"{{route('propriedade.filtro')}}",
        method:'GET',
        data: {query:query},
        dataType:'json'
        success:function(data){
          $('tbody').html(data.table_data);
          $('#total_records').text(data.total_data);
        }


      })
    }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_propriedade(query);
 });


  )};

  </script> -->
  <script>

  $(document).ready(function(){
    function fill_datatable(filtro_provincia=''){
      var datatabele =$('tabela').DataTable();
      processing: true,
      serverSide: true,
      ajax: {
       url:  "{{ route('propriedade.filtro') }}",
       data: {filtro_provincia:filtro_provincia},
       columns: [
             { data: 'designacao',
              name: 'desigancao' },
           { data: 'bairo',
            name: 'bairo' },
           { data: 'provincia_id',
            name: 'provincia_id' },

       ]

      }

    }
  });


  </script>




@endsection
