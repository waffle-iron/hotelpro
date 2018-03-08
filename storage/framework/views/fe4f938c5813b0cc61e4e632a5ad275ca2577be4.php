<?php $__env->startSection('css'); ?>
  <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/css/register.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="image-container set-full-height" style="background-image: url('/assets/img/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
         <div class="logo-container">
            <div class="logo">
                <img src="/assets/img/new_logo.png">
            </div>
            <div class="brand">
                <b><?php echo e(config('app.name')); ?></b>
            </div>
        </div>
    </a>

  <!--  Made With Get Shit Done Kit  -->
    <a href="http://demos.creative-tim.com/get-shit-done/index.html?ref=get-shit-done-bootstrap-wizard" class="made-with-mk">
      <div class="brand">GK</div>
      <div class="made-with">Made with <strong>GSDK</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form data-url="<?php echo e(route('hotel.store')); ?>" method="POST" id="register-form">
                        <?php echo e(csrf_field()); ?>

                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>REGISTER</b> YOUR HOTEL<br>
                             <small>This information will let us know more about your hotel.</small>
                          </h3>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#about" data-toggle="tab">About</a></li>
                              <li><a href="#address" data-toggle="tab">Address</a></li>
                              <li><a href="#captcha" data-toggle="tab">Captcha</a></li>
                          </ul>

            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture" name="logo">
                                          </div>
                                          <h6>Choose Logo</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                                        <label>Name <small>(required)</small></label>
                                        <input name="nom" type="text" class="form-control" placeholder="..." value="<?php echo e(old('nom')); ?>" required="">
                                        <?php if($errors->has('nom')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('nom')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                        <label>Telephone <small>(required)</small></label>
                                        <input name="tel" type="text" class="form-control" placeholder="Tel..." value="<?php echo e(old('tel')); ?>" required>
                                        <?php if($errors->has('tel')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('tel')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                          <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="Email..." value="<?php echo e(old('email')); ?>" required>
                                          <?php if($errors->has('email')): ?>
                                              <span class="help-block">
                                                  <strong><?php echo e($errors->first('email')); ?></strong>
                                              </span>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group<?php echo e($errors->has('place') ? ' has-error' : ''); ?>">
                                            <label>Street Name (required)</label>
                                            <input type="text" class="form-control" placeholder="..." name="place" value="<?php echo e(old('place')); ?>" required>
                                            <?php if($errors->has('place')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('place')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group<?php echo e($errors->has('num_place') ? ' has-error' : ''); ?>">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" placeholder="---" name="num_place" value="<?php echo e(old('num_place')); ?>">
                                          </div>
                                          <?php if($errors->has('num_place')): ?>
                                              <span class="help-block">
                                                  <strong><?php echo e($errors->first('num_place')); ?></strong>
                                              </span>
                                          <?php endif; ?>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group<?php echo e($errors->has('ville') ? ' has-error' : ''); ?>">
                                            <label>City (required)</label>
                                            <input type="text" class="form-control" placeholder="..." name="ville">

                                            <?php if($errors->has('ville')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('ville')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group<?php echo e($errors->has('pays') ? ' has-error' : ''); ?>">
                                            <label>Country (required)</label><br>
                                             <select value="<?php echo e(old('pays')); ?>" name="pays" class="form-control">
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

                                          <?php if($errors->has('pays')): ?>
                                              <span class="help-block">
                                                  <strong><?php echo e($errors->first('pays')); ?></strong>
                                              </span>
                                          <?php endif; ?>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="captcha">
                                <h4 class="info-text hide">
                                 </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="jobb" value="Design">
                                                <div class="icon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <h6>Design</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="jobb" value="Code">
                                                <div class="icon">
                                                    <i class="fa fa-terminal"></i>
                                                </div>
                                                <h6>Code</h6>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="jobb" value="Develop">
                                                <div class="icon">
                                                    <i class="fa fa-laptop"></i>
                                                </div>
                                                <h6>Develop</h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

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
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">kamitbrains</a>.
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

  <script src="/assets/js/jquery.bootstrap.wizard.js"></script>

  <!--  Plugin for the Wizard -->
  <script src="/assets/js/gsdk-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="/assets/js/jquery.validate.min.js"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>