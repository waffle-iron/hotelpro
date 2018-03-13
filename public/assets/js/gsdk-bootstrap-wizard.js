/*!

 =========================================================
 * Bootstrap Wizard - v1.1.1
 =========================================================
 
 * Product Page: https://www.creative-tim.com/product/bootstrap-wizard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/bootstrap-wizard/blob/master/LICENSE.md)
 
 =========================================================
 
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

// Get Shit Done Kit Bootstrap Wizard Functions

var searchVisible = 0;
var transparent = true;
var recapPageIndex = 2;
var submitPageIndex = 3;

$(document).ready(function(){

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    // Code for the Validator
    var $validator = $('.wizard-card form').validate({
		  rules: {
		    nom: {
		      required: true,
		      minlength: 3
		    },
		    tel: {
		      required: true,
		      minlength: 9
		    },
            email: {
              required: true,
              minlength: 3,
            },
            ville: {
              required: true,
              minlength: 3,
            },
            place: {
              required: true,
              minlength: 3,
            },
		    pays: {
		      required: true,
		    }

        }
	});

    // Wizard Initialization
  	$('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

        onNext: function(tab, navigation, index) {
        	var $valid = $('.wizard-card form').valid();
        	if(!$valid) {
        		$validator.focusInvalid();
        		return false;
        	}
        },

        onInit : function(tab, navigation, index){

          //check number of tabs and fill the entire row
          var $total = navigation.find('li').length;
          $width = 100/$total;
          var $wizard = navigation.closest('.wizard-card');

          $display_width = $(document).width();

          if($display_width < 600 && $total > 3){
              $width = 50;
          }

           navigation.find('li').css('width',$width + '%');
           $first_li = navigation.find('li:first-child a').html();
           $moving_div = $('<div class="moving-tab">' + $first_li + '</div>');
           $('.wizard-card .wizard-navigation').append($moving_div);
           refreshAnimation($wizard, index);
           $('.moving-tab').css('transition','transform 0s');
       },

        onTabClick : function(tab, navigation, index){

            var $valid = $('.wizard-card form').valid();

            if(!$valid){
                return false;
            } else {
                return true;
            }
        },

        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;

            var $wizard = navigation.closest('.wizard-card');

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $($wizard).find('.btn-next').hide();
                $($wizard).find('.btn-finish').show();
            } else {
                $($wizard).find('.btn-next').show();
                $($wizard).find('.btn-finish').hide();
            }

            button_text = navigation.find('li:nth-child(' + $current + ') a').html();

            setTimeout(function(){
                $('.moving-tab').text(button_text);
            }, 150);

            var checkbox = $('.footer-checkbox');

            if( !index == 0 ){
                $(checkbox).css({
                    'opacity':'0',
                    'visibility':'hidden',
                    'position':'absolute'
                });
                if (parseInt(index) == recapPageIndex) {
                    onRecapNeeded();
                }


                if (parseInt(index) == submitPageIndex) {
                        onSubmit();
                }


            } else {
                $(checkbox).css({
                    'opacity':'1',
                    'visibility':'visible'
                });

            }

            refreshAnimation($wizard, index);
        }
  	});


    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
    $("#wizard-picture1").change(function(){
        readURL1(this);
    });

    $('[data-toggle="wizard-radio"]').click(function(){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function(){
        if( $(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked','true');
        }
    });

    $('.set-full-height').css('height', 'auto');

});



 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview1').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(window).resize(function(){
    $('.wizard-card').each(function(){
        $wizard = $(this);
        index = $wizard.bootstrapWizard('currentIndex');
        refreshAnimation($wizard, index);

        $('.moving-tab').css({
            'transition': 'transform 0s'
        });
    });
});

function refreshAnimation($wizard, index){
    total_steps = $wizard.find('li').length;
    move_distance = $wizard.width() / total_steps;
    step_width = move_distance;
    move_distance *= index;

    $wizard.find('.moving-tab').css('width', step_width);
    $('.moving-tab').css({
        'transform':'translate3d(' + move_distance + 'px, 0, 0)',
        'transition': 'all 0.3s ease-out'

    });
}

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
		if (immediate && !timeout) func.apply(context, args);
	};
};


function onSubmit() {
    var $form = $('.wizard-card form');
    let datas = $form.serialize();


    $form.submit(function (e) {
       e.preventDefault();    
       
     });

    $('.btn-finish').click(_.debounce(function () {
         $form.find(':input').prop('disabled', true);

           axios.post($form.data('url'), datas).then(function onSuccess(response) {   
               swal(
                    {
                        title: 'Youpi !',
                        text: 'Votre Hotel a ete enregister et sera etudier avant d\'etre enregistrer!',
                        type: 'success',
                        confirmButtonColor: '#4fa7f3'
                    });
               
           }, function onError(error) {
               toastr.warning('You should check in on some of those fields below.', 'Holy !');

           }).then( () => { $form.find(':input').prop('disabled', false) })
    }, 1000));
}


function onRecapNeeded() {

    var $form = $('.wizard-card form');
    var $inputs = $form.find(":input:not(.btn)");
    $inputs.each(function () {
        $input = $(this);

        let key = $input.data("key") === undefined ? ($input.attr("placeholder") ===  undefined ? $input.attr("placeholder") : $input.attr("name") )
                                                    : $input.data("key") ;

        let val = $input.val();

        var nameAttr = $input.attr('name');
        let isAffichable= key !== undefined;

        if (isAffichable) {
            if (nameAttr !== "description") {

                var tr = '<tr><td class="key"><b class="key '+nameAttr+'">'+ key +'</b></td><td class="val">'+val+'</td></tr>';

                //console.log(tr);
                var isForPerso = $input.parents('#about').length;

                if (isForPerso ) {
                    $('#recap').find('tbody td.perso').append(tr);
                }else {
                    $('#recap').find('tbody td.hotel').append(tr);
                }
            }

        }

    });

}