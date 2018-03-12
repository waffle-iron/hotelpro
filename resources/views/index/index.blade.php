@extends('layouts.index')

@section('css')
<link href="assets/css/gsdk.css" rel="stylesheet" />
<link href="assets/css/spinkit.css" rel="stylesheet" />
<link href="assets/css/index.css" rel="stylesheet" />
@endsection

@section('header')
@include('index.header')
@endsection

@section('content')
<div class="main" style="border-color: #212121" id="appSearch" >
  <div class="container-fluid tim-container ">
    <div id="search-zone" class="card"  style="transform: translate(0, -90px);">
      <div class="col-md-12">
        <form class="form form-inline filter-search-form" role="search" style="max-width:845px; ">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">Prix</div>
              <input type="text" v-model="filtre.prixMin" style="max-width: 120px; border-right: none;" class="form-control text-center" name="prix_min" placeholder="Prix min" autofocus>
              <div class="input-group-addon" style="border-right: none; border-left: none;">-</div>
              <input type="text" v-model="filtre.prixMax" style="max-width: 120px; border-left: none;" class="form-control text-center" name="prix_max" placeholder="Prix max" autofocus>
            </div>
          </div>
          <div class="form-group">
            <input type="text" v-model="filtre.place" class="form-control" name="place" placeholder="Place, ville, pays" autofocus>
          </div>
          <div class="form-group">
            <input v-model="filtre.nbreEtoile" ref="nbreEtoile" style="max-width: 80px" class="form-control" type="text" name="nbre_etoile" placeholder="Etoiles" style="display: block;">
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-direction btn-left btn-success btn-outline"><i class="icon wb-search"></i></button>
          </div>
        </form>
        <form class="page-search-form" role="search" style="max-width:800px; padding:3.5em 0 2.5em 0; margin: auto;">
          <div class="input-search input-search-dark">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" v-model="text" @input="search()" @click="scrollUp()"  class="form-control" id="inputSearch" name="search" placeholder="Search Hotels" autofocus>
            <button v-on:click="showOption()" v-on:mouveover="showTooltipster()" type="button" class="input-search-close option icon wb-stats-bars" aria-label="Option" style="font-size: 14pt; transform: translate(0, -14px);"></button>
            <button v-on:click="clear()" type="button" class="input-search-close close icon wb-close" aria-label="Close" style="font-size: 10pt; transform: translate(-26px, -9px);"></button>
            
          </div>
        </form>
        <!-- <vue-tooltipster>
        <span>Html tooltip content</span>
        <div slot="content" style="background-color: red">
          <div class="form-group tooltip-search-option" style="padding: 2em">
            option de recherche
          </div>
        </div>
        </vue-tooltipster> -->
        <div class="sk-wave" v-show="searchInProgress" style="display: none;">
          <div class="sk-rect sk-rect1"></div>
          <div class="sk-rect sk-rect2"></div>
          <div class="sk-rect sk-rect3"></div>
          <div class="sk-rect sk-rect4"></div>
          <div class="sk-rect sk-rect5"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid tim-container" style="max-width:920px;" page-search>
    <div class="col-md-12 " >
      <!-- Example Tabs In The Panel -->
      <div class="panel nav-tabs-horizontal">
        <div class="panel-heading">
          <h3 class="panel-title">Search Results For "@{{ filtre.q }}"<br>
          <small>About @{{ results.total }} result ( 0.13 seconds)</small>
          </h3>
        </div>
        <ul v-show="showIfResults" style="display: none;" class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
          <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTopHome" aria-controls="exampleTopHome" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>Hotels</a></li>
          <li role="presentation"><a title="hotel a chambre 100% dispo." data-toggle="tab" href="#exampleTopComponents" aria-controls="exampleTopComponents" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>J'ai de la chance</a></li>
          <li role="presentation"><a data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>Mets</a></li>
          <li role="presentation"><a data-toggle="tab" href="#exampleTopJavascript" aria-controls="exampleTopJavascript" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>JavaScript</a></li>
          <li class="dropdown" role="presentation" style="display: none;">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
              <span class="caret"></span>Dropdown </a>
              <ul class="dropdown-menu" role="menu">
                <li class="" role="presentation"><a data-toggle="tab" href="#exampleTopHome" aria-controls="exampleTopHome" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>Home</a></li>
                <li role="presentation"><a data-toggle="tab" href="#exampleTopComponents" aria-controls="exampleTopComponents" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>Components</a></li>
                <li role="presentation"><a data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>Mets</a></li>
                <li role="presentation"><a data-toggle="tab" href="#exampleTopJavascript" aria-controls="exampleTopJavascript" role="tab"><i class="icon wb-tag" aria-hidden="true"></i>JavaScript</a></li>
              </ul>
            </li>
          </ul>
          <div class="panel-body">
            <div class="tab-content">
              <div class="tab-pane active" id="" role="tabpanel">
                <ul class="list-group list-group-full list-group-dividered search-result-list">
                  <li  v-for="item of results.data" class="list-group-item">
                    
                    <div class="media">
                      <div class="media-left">
                        <a v-bind:href="'/assets/images/hotels/'+ item.id ">
                        <img style="opacity: 0.6" v-bind:src="'/images/hotels/'+ item.logo " class="media-object img-circle" alt="64x64"style="width: 96px; height: 96px;"> </a>
                      </div>
                      <div class="media-body">
                        <h4>
                        <a  v-bind:href="'{{ route('hotel.index') }}/'+ item.id " >@{{ item.nom }}</a>&nbsp;&nbsp;
                        <a style="opacity: 0.4" title="in new onglet"  v-bind:href="'{{ route('hotel.index') }}/'+ item.id " target="_blank" ><i class="icon wb-link-intact"></i></a></h4>
                        <a class="search-result-link"  v-bind:src="'{{ route('hotel.index') }}/'+ item.logo " >{{ route('hotel.index') }}/@{{ item.id }}</a>
                        <p>@{{ _.truncate(item.desc, {length: 180}) }}</p>
                        <p class="font-13">
                          <b><i class="icon wb-envelope"></i>:</b>
                          <span><a href="#" class="text-muted">@{{ item.email }}</a></span>&nbsp;&nbsp;
                          <b><i class="icon wb-mobile"></i>:</b>
                          <span><a href="#" class="text-muted">@{{ item.tel }}</a></span>&nbsp;&nbsp;
                          <b><i class="icon wb-graph-up"></i>:</b>
                          <span><a href="#" class="text-muted">@{{ item.prix_max }}</a></span>&nbsp;&nbsp;
                          <b><i class="icon wb-graph-down"></i>:</b>
                          <span><a href="#" class="text-muted">@{{ item.prix_min }}</a></span>&nbsp;&nbsp;
                        </p>
                        
                      </div>
                    </div>
                  </li>
                </ul>
                
                <pagination :data="results">
                  <span slot="prev-nav" aria-hidden="true">&laquo;</span>
                  <span slot="next-nav" aria-hidden="true">&raquo;</span>
                </pagination>
                
                
                <!-- <nav >
                  <ul class="pagination pagination-no-border">
                    <li class="disabled">
                      <a href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li>
                      <a href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav> -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Example Tabs In The Panel -->
      </div>
    </div>

    <div class="container tim-container" style="max-width:800px;">
      <!-- Panel -->
      <div v-show="!showIfResults" class="panel">
        <div class="panel-body">
          Wait for your search. <br>
          No results in moment.
        </div>
      </div>
      <!-- End Panel -->
    </div>
    <!-- end container -->
    <div class="container-fluid tim-container" style="max-width:800px;">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">
          <h2>Meilleurs destinations</h2>
          <div v-for="item of featureds.data" class="col-md-3">
            <div class="card">
              <h2>@{{ item.nom }}</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
      
    </div>
    <div class="space"></div>
    <!-- end container -->
  </div><!-- end main -->
  @endsection

  @section('js')
  @endsection