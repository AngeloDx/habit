@extends('layouts.app')
@section('content')
    <div class="south-search-area">
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
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>Todas provicias</option>
                                            <option>Maputo</option>
											<option>Matola</option>
                                            <option>Gaza</option>
                                            <option>Inhabane</option>
                                            <option>Sofala</option>
                                            <option>Manica</option>
                                            <option>Tete</option>
                                            <option>Nampula</option>
                                            <option>Zambezia</option>
											<option>Niassa</option>
                                            <option>Cabo Delgado</option>

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

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>Todas Offertas</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="listings">
                                            <option>Toda Listagem</option>
                                            <option>Listagem 1</option>
                                            <option>Listagem 2</option>
                                            <option>Listagem 3</option>
                                            <option>Listagem 4</option>
                                            <option>Listagem 5</option>
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

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>casa de Banho</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all back" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all back"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all back" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all back" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mt - 1300 mt</div>
                                    </div>
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>Todos tipos</option>
                                                    <option>Apartmento <span>(30)</span></option>
                                                    <option>Terrenos <span>(69)</span></option>
                                                    <option>Villas <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>Todas Catagorias</option>
                                                    <option>Apartmento</option>
                                                    <option></option>
                                                    <option>Farm</option>
                                                    <option>House</option>
                                                    <option>Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>Todas Accoes</option>
                                                    <option>Venda</option>
													<option>Aluguer</option>
                                                    <option>Reserva</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>Todas Cidades</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>Todas Accoes</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter cor">
                                        <a href="#" id="moreFilter">+ Mais filtros</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn bnt-b">Pesquisar</button>
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

        <div class="row mb-0">
          @forelse($propriedade as $propriedade)
            <div class="col-xl-4 col-md-6 col-lg-4">
                <a href="{{ route('propriedade.show', $propriedade->id) }} " class="prop-entry d-block single_property">


                  <div class="property_thumb">

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
                            <p class="location">{{$propriedade->provincia_id}}</p>
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
            @endforelse

        </div>

        </div>

		<div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>
        </div>

      </div>
    </div>




  </div>
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
