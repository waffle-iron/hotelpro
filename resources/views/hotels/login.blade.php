<!DOCTYPE html>
<html lang="en">
<head>
    <title>HotelPro</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/chocolat.css" type="text/css" media="screen">
    <link href="/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="/css/jquery-ui.css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
    <style>
        .w3layouts-banner-top,.w3layouts-banner-top1,.w3layouts-banner-top2{
            min-height:100vh;
        }
        .book-form {
            position: absolute;
            background: #0f2453;
            height: 147px;
            padding: 0 0 0 27px;
            bottom: 181px;
            z-index: 2;
        }

        .fields-w3ls {
            width: 33%;
            float: left;
            margin: 2.2em 1em 0 0;
        }
        .book-form input[type="text"], .book-form input[type="date"], .book-form input[type="time"], .book-form input[type="email"], .book-form .form-control {

            font-size: 1.4em;
            line-height: 42px;
        }
        .book-form form input[type="submit"] {
            padding: 1.2em 2em 0em 2em;
            font-size: 20px;

        }
    </style>
</head>
<body>
<!-- //header -->
<!-- banner -->
<div id="home" class="w3ls-banner">
    <!-- banner-text -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <h4>Star Hotel</h4>
                                <h3>We know what you love</h3>
                                <p>Welcome to our hotels</p>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h4>Star Hotel</h4>
                                <h3>Stay with friends & families</h3>
                                <p>Come & enjoy precious moment with us</p>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h4>Star Hotel</h4>
                                <h3>want luxurious vacation?</h3>
                                <p>Get accommodation today</p>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <!--banner Slider starts Here-->
    </div>
    <div class="col-md-10 col-md-offset-1 book-form">
        <form action="#" class="center-block" method="post" style="width: 900px;">
            <div class="fields-w3ls form-date-w3-agileits">
                <p>@lang('string.Email')</p>
                <input name="login" type="text" placeholder="@lang('string.Email')"  onfocus="this.value = '';" required="">
            </div>
            <div class="fields-w3ls form-date-w3-agileits">
                <p>@lang('string.Password')</p>
                <input name="password" type="text" placeholder="@lang('string.Password')" onfocus="this.value = '';" required="">
            </div>
        
            <input type="submit" value="@lang('string.Login')">

        </form>
    </div>
    {{--
    <div class="thim-click-to-bottom">
        <a href="#about" class="scroll">
            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
        </a>
    </div>
     --}}
</div>
<!-- //banner -->
<!--//Header-->
<!-- js -->
<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<!-- /contact form -->
<!-- Calendar -->
<script src="/assets/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="/css/swipebox.css">
<script src="/assets/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/assets/js/move-top.js"></script>
<script type="text/javascript" src="/assets/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
<script defer src="/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<script src="/assets/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--search-bar-->
<script src="/assets/js/main.js"></script>
<!--//search-bar-->
<!--tabs-->
<script src="/assets/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!--//tabs-->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<div class="arr-w3ls">
    <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="/assets/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>