<?php $__env->startSection('css'); ?>
  <link href="assets/css/gsdk.css" rel="stylesheet" />   
  <link href="assets/css/spinkit.css" rel="stylesheet" />   
  <link href="assets/css/index.css" rel="stylesheet" /> 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
  <?php echo $__env->make('index.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main" style="border-color: #212121" id="app-search">
  <div class="container-fluid tim-container" style="background-color: #9a9a9a17;">
    <div class="row">
      <div class="col-md-12">
        
        <form class="page-search-form" role="search" style="max-width:800px; padding:3.5em 0 2.5em 0; margin: auto;">
          <div class="input-search input-search-dark">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" v-model="text" v-on:keyup="search()" v-on:click="scrollUp()"  class="form-control" id="inputSearch" name="search" placeholder="Search Hotels" autofocus>
            <button v-on:click="showOption()" v-on:mouveover="showTooltipster()" type="button" class="input-search-close option icon wb-stats-bars" aria-label="Option" style="font-size: 14pt; transform: translate(0, -14px);"></button>
            <button v-on:click="clear()" type="button" class="input-search-close close icon wb-close" aria-label="Close" style="font-size: 10pt; transform: translate(-26px, -9px);"></button>
          </div>
        </form>
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
    <div class="container tim-container" style="max-width:800px;">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">

          <ul class="nav nav-pills">
            <li class="active"><a class="waves-effect waves-light" href="#Bla">Tous <span class="badge badge-success m-l-10">325</span></a></li>
            <li><a class="waves-effect waves-light" href="#nice">Disponible <span class="badge badge-success m-l-10">325</span></a></li>
            <li><a class="waves-effect waves-light" href="#best">Reserve <span class="badge badge-success m-l-10">325</span></a></li>
            
          </ul>
          <h4 class="page-search-title">Search Results For "Web Desing"</h4>
          <p class="page-search-count">About
            <span>1,370</span> result (
            <span>0.13</span> seconds)</p>
            
          <ul class="list-group list-group-full list-group-dividered">
            <li class="list-group-item">
              <h4><a href="https://github.com/amazingSurge?tab=repositories">Eademque Virtutum Laudantium</a></h4>
              <a class="search-result-link" href="https://github.com/amazingSurge?tab=repositories">https://github.com/amazingSurge?tab=repositories</a>
              <p>Praebeat pecunias viveremus probamus opus apeirian haec perveniri,
                memoriter.Praebeat pecunias viveremus probamus opus apeirian haec
                perveniri, memoriter.Praebeat pecunias viveremus probamus opus
                apeirian haec perveniri, memoriter.</p>
            </li>

            <li class="list-group-item">
              <h3 class="h5 font-600 m-b-5"><a href="#">Uplon - Responsive Bootstrap 4 Web App Kit</a></h3>
              <div class="font-13 text-success m-b-10">
                  http://themeforest.net/user/coderthemes/portfolio?ref=coderthemes
              </div>

              <div class="">
                  <img src="assets/images/small/img-1.jpg" height="48" alt="image"/>
                  <img src="assets/images/small/img-2.jpg" height="48" alt="image"/>
                  <img src="assets/images/small/img-3.jpg" height="48" alt="image"/>
                  <img src="assets/images/small/img-4.jpg" height="48" alt="image"/>
              </div>
            </li>

            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="#"> <img class="media-object img-circle" alt="64x64" src="assets/images/users/avatar-1.jpg" style="width: 54px; height: 54px;"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="#" class="text-dark">Chadengle</a>
                        </h5>
                        <p class="font-13">
                            <b>Email:</b>
                            <span><a href="#" class="text-muted">mediaheader@mail.com</a></span>
                        </p>
                        <p class="m-b-0 font-13">
                            <b>Bio:</b>
                            <br/>
                            <span class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</span>
                        </p>
                    </div>
                </div>
            </li>
          </ul>
          <nav>
            <ul class="pagination pagination-no-border">
              <li class="disabled">
                <a href="javascript:void(0)" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="javascript:void(0)">2</a></li>
              <li><a href="javascript:void(0)">3</a></li>
              <li><a href="javascript:void(0)">4</a></li>
              <li><a href="javascript:void(0)">5</a></li>
              <li>
                <a href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- End Panel -->
    </div>
    <div class="space"></div>
<!-- end container -->
</div>
<!-- end main -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>