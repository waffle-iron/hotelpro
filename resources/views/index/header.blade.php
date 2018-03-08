
 <div id="navbar-full">
    <div id="navbar">
    <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
          <div class="alert alert-success hidden">
            <div class="container">
                <b>Info</b> Nothins to talk. How is HotelProOnline ?
            </div>
          </div>
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#gsdk">{{ config('app.name') }}</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                 <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <span class="flag-icon flag-icon-{{Config::get('app.locale')}}"></span>
                         <b class="caret hide"></b>
                       </a>
                       <ul class="dropdown-menu">
                         <li><a href="?fr">
                         <span class="flag-icon flag-icon-fr"></span>@lang('string.French')</a></li>
                         <li><a href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a></li>
                         <li><a href="#"><span class="flag-icon flag-icon-gb"></span> English(UK)</a></li>
                         <li><a href="#"><span class="flag-icon flag-icon-ro"></span>Română</a></li>
                         <li><a href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a></li>

                         <!-- <li class="divider"></li> -->
                         

                       </ul>
                 </li>

               </ul>
              <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#gsdk">Link</a></li>
                <li class="dropdown">
                      <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li><a href="#gsdk">Separated link</a></li>
                      </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="search" class="hidden-xs"><i class="fa fa-search"></i></a>
                </li>-->
              </ul>
               <form class="navbar-form navbar-left navbar-search-form" role="search">                  
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div> 
              </form>
              <ul class="nav navbar-nav navbar-right">

                @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a class="btn btn-round btn-default" href="{{ route('hotel.new') }}">Register a Hotel</a></li>
                @endguest
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          @if(1)

          @endif
        </nav>
        <div class="blurred-container">
            <div class="img-src" style="background-image: url('assets/img/bg.jpg')"></div>

            <div class="motto">
              <div>Hotel</div>
              <div class="border">pro</div>
              <h1>
                  <small class="subtitle" style="text-transform: lowercase;
                                                text-align: right;
                                                position: relative;
                                                top: -70px;
                                                right: 1em;
                                                font-size: 22px;">online</small>
              </h1>
            </div>
        </div>

    </div><!--  end navbar -->


    <div id="search-box">
      
    </div>
</div> <!-- end menu-dropdown -->