@extends('layouts.index')


@section('css')
    <!-- CSS Files -->
    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/css/demo.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/css/register.css" rel="stylesheet"/>
@endsection


@section('content')

    <div class="image-container set-full-height" style="background-image: url('/assets/img/wizard.jpg')">
        <!--   Creative Tim Branding   -->
        <a href="http://creative-tim.com">
            <div class="logo-container">
                <div class="logo">
                    <img src="/assets/img/new_logo.png">
                </div>
                <div class="brand">
                    <b>{{ config('app.name') }}</b>
                </div>
            </div>
        </a>

        <!--  Made With Get Shit Done Kit  -->
        <a href="http://demos.creative-tim.com/get-shit-done/index.html?ref=get-shit-done-bootstrap-wizard"
           class="made-with-mk">
            <div class="brand">HP</div>
            <div class="made-with"><strong>H&ocirc;tel Pro Online</strong></div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form  data-url='{{ route("store") }}' action='{{ route("store") }}' accept-charset="UTF-8" role="form" method="POST"
                                  id="register-form">
                            {{ csrf_field() }}
                            <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                        <b>Enregistrez </b> votre HOTEL<br>
                                        <small>Ces informations nous permettront de mieux vous connaitre.</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">Personnelles</a></li>
                                        <li><a href="#address" data-toggle="tab">H&ocirc;tels</a></li>
                                        <li><a href="#recap" data-toggle="tab">Recapitulatifs</a></li>
                                        <li><a href="#condition" data-toggle="tab">Conditions</a></li>
                                    </ul>

                                </div>


                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">

                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="/fotoupload/img/default-avatar.png"
                                                             class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture" name="image">
                                                    </div>
                                                    <h6>Image Profile</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="col-md-6">
                                                    <div class="form-group{{$errors->has('nom_proprio') ? ' has-error' : ''}}">
                                                        <label>Nom :
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="nom_proprio" type="text" class="form-control"
                                                               placeholder="Your first name">
                                                        @if ($errors->has('nom_proprio'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('nom_proprio') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{$errors->has('prenom_proprio') ? ' has-error' : ''}}">
                                                        <label>Prenom :
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="prenom_proprio" type="text" class="form-control"
                                                               placeholder="Your last name">
                                                        @if ($errors->has('prenom_proprio'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('prenom_proprio') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group{{$errors->has('cni') ? ' has-error' : ''}}">
                                                    <label>CNI :
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="cni" type="text" class="form-control"
                                                           placeholder="CNI">
                                                    @if ($errors->has('cni'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('cni') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{$errors->has('cni') ? ' has-error' : ''}}">
                                                    <label>PassPort : </label>
                                                    <input name="passport" type="text" class="form-control"
                                                           placeholder="PassPort">
                                                    @if ($errors->has('passport'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('passport') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{$errors->has('tel_proprio') ? ' has-error' : ''}}">
                                                    <label>Telephone :
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="tel_proprio" type="text" class="form-control"
                                                           placeholder="Your personnal Phone number">
                                                    @if ($errors->has('tel_proprio'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('tel_proprio') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group{{$errors->has('email_proprio') ? ' has-error' : ''}}">
                                                    <label>Email
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="email_proprio" type="email" class="form-control"
                                                           placeholder="Your personnal mail">
                                                    @if ($errors->has('email_proprio'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('email_proprio') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">

                                        <div class="row">

                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="/fotoupload/img/default-avatar.png"
                                                             class="picture-src" id="wizardPicturePreview1" title=""/>
                                                        <input type="file" id="wizard-picture1" name="logo">
                                                    </div>
                                                    <h6>Logo</h6>
                                                </div>

                                                <div class="form-group" style="margin-top: 20px; text-align: center;  ">
                                                    <label>Description *: </label>
                                                    <textarea name="description" class="form-control" rows="10"
                                                              placeholder="Description"></textarea>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group{{$errors->has('nom') ? ' has-error' : ''}}">
                                                    <label>Nom *: </label>
                                                    <input name="nom" type="text" class="form-control"
                                                           placeholder="Name of your establissement">
                                                    @if ($errors->has('nom'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('nom') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{$errors->has('ville') ? ' has-error' : ''}}">
                                                        <label>Ville *: </label>
                                                        <input name="ville" type="text" class="form-control"
                                                               placeholder="hotel city">
                                                        @if ($errors->has('ville'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('ville') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{$errors->has('pays') ? ' has-error' : ''}}">
                                                        <label>Pays *: </label>
                                                        <input name="pays" type="text" class="form-control"
                                                               placeholder="hotel country">
                                                        @if ($errors->has('pays'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('pays') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group{{$errors->has('tel') ? ' has-error' : ''}}">
                                                    <label>Telephone *: </label>
                                                    <input name="tel" type="text" class="form-control"
                                                           placeholder="your hotel contact">
                                                    @if ($errors->has('tel'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tel') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{$errors->has('place') ? ' has-error' : ''}}">
                                                    <label>@lang("string.Place") : </label>
                                                    <input name="place" type="text" class="form-control"
                                                           placeholder="your hotel adress">
                                                    @if ($errors->has('place'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('place') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                                                    <label>Email *:</label>
                                                    <input name="email" type="email" class="form-control"
                                                           data-key="Email de l hotel" placeholder="hotel mail">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="recap">

                                        <div class="row">

                                            <div class="col-md-9">
                                                <p style="text-align: center; margin-left: 30%;">Veuillez v&eacute;rifier
                                                    les informations fournies, vous pouvez les modifier plutard</p>
                                                <table class="table table-responsive table-bordered ">
                                                    <tbody>
                                                    <tr>
                                                        <td class="perso"></td>
                                                        <td class="hotel"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="condition">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 12px; text-align: justify;">
                                                    Assurez-vous d'examiner nos politiques anti-spam, de confidentialité
                                                    et de
                                                    conditions d'utilisation avant de créer un compte. Nous prenons le
                                                    spam très au
                                                    sérieux et nous avons une politique d'autorisation stricte que vous
                                                    et vos clients
                                                    devrez respecter.
                                                </p>

                                            </div>
                                            <div class="box">
                                                <div class="box-body">

                                                    <div class="form-group{{$errors->has('g-recaptcha-response') ? ' has-error' : ''}}">
                                                        {!! Recaptcha::render() !!}
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>



                                                    {{--
                                                    <input type="checkbox" name="condition" value=""
                                                           style="margin-left: 60px;text-align: center; font-size: 14px;">
                                                    J'accepte les conditions d'utilisation et respecterai la politique
                                                    anti-spam.
                                                     --}}


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm'
                                               name='next' value='Next'/>
                                        <a href='{{url("store")}}'>
                                            <input type='submit'
                                                   class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'
                                                   name='finish' value='Finish'>
                                        </a>
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm'
                                               name='previous' value='Previous'/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container">
                Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">kamitbrains</a>.
            </div>
        </div>

    </div>


@endsection

@section('js')

    <script src="/assets/js/jquery.bootstrap.wizard.js"></script>

    <!--  Plugin for the Wizard -->
    <script src="/assets/js/gsdk-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="/assets/js/jquery.validate.min.js"></script>


@endsection


