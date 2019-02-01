jQuery(function($) {// BUTTON SUBMISSION

$('.more-informations-input').hide();
$('.rodo').css('margin-top','40%'); 
/* Donate Module - Amount Section - Impact Statement */
// Amount Radio Label Button Events

$( document ).ready(function() {
  var dollarAmount=0;
  var finaldollarAmount=0;
  var isprovision = false;
  $.validate({
	  form : '#ccform',
    lang: 'pl',
	 onError : function($form) {
      alert('Validation of form '+$form.attr('id')+' failed!');
    },
    //validateOnBlur : false, // disable validation when input looses focus
    errorMessagePosition : 'top', // Instead of 'inline' which is default
    modules: 'logic',
    validateHiddenInputs : true,
	scrollToTopOnError : false
  });

  $("form").on("click", ".form-error", function(){
    $('.form-error').hide();
});
 
function provision_check(){
  if($('#provision').prop("checked")) {
      finaldollarAmount = parseFloat(dollarAmount*100/98.8).toFixed(2);
      isprovision = true;
      if(finaldollarAmount != 0)update_button();
      return;
   }
  else
    finaldollarAmount = dollarAmount;
    if(finaldollarAmount != 0)update_button();
}

function update_button(){
  $('button.donate').text('Podaruj ' + finaldollarAmount + ' zł');
  $('.finalamount').val(finaldollarAmount);
}
  
$('.amount label').on('click', function () {
    dollarAmount = parseInt($(this).text().replace('$', ''), 10);
    var impactAmount = parseInt(dollarAmount / 10, 10);
    // copy to impact statement
    $('.impact-amount').text(dollarAmount+' zł');
    $('.impact-results').text('180 days back to ' + impactAmount + ' girls.');
    // Clear other amount donation, if any
    $('#amount_other').val('');

});

// Other Donation Amount Events
$('#amount_other').keyup(function () {
    dollarAmount = parseInt($(this).val());
    var impactAmount = parseInt(dollarAmount / 10, 10);

    // copy to impact statement
    $('.impact-amount').text(dollarAmount+' zł');
    $('.impact-results').text('180 days back to ' + impactAmount + ' girls.');
    
    $('.amount input[type=radio]').prop('checked', false); 
});
  

/* Progress bar of the donate module */
$('.step').on('click', function () {
   provision_check();
    $('.step').removeClass("active");
    $(this).addClass('active');
    if ($('.amount').hasClass('active')) {
        $('.step--active').css('left', '0%');
        $('.donation-module-content-amount').addClass('active').removeClass('next').removeClass('previous');
        if ($('.donation-module-content-name').hasClass('active')) {
            $('.donation-module-content-name').removeClass('active').addClass('previous');

        } else if ($('.donation-module-content-payment').hasClass('active')) {
            $('.donation-module-content-payment').removeClass('active').addClass('previous');
        }
    } else if ($('.name').hasClass('active')) {
        $('.step--active').css('left', '33.333%');
        $('.donation-module-content-name').addClass('active').removeClass('next').removeClass('previous');


        if ($('.donation-module-content-amount').hasClass('active')) {
            $('.donation-module-content-amount').removeClass('active').addClass('next');
        } else if ($('.donation-module-content-payment').hasClass('active')) {
            $('.donation-module-content-payment').removeClass('active').addClass('previous');
        }
    } else if ($('.payment').hasClass('active')) {
        $('.step--active').css('left', '66.666%');
        $('.donation-module-content-payment').addClass('active').removeClass('next').removeClass('previous');
        if ($('.donation-module-content-amount').hasClass('active')) {
            $('.donation-module-content-amount').removeClass('active').addClass('next');
        } else if ($('.donation-module-content-name').hasClass('active')) {
            $('.donation-module-content-name').removeClass('active').addClass('next');

        }
    }
});


$(".donation-module-content-amount button.next").on('click', function () {
    provision_check();
    $('.step').removeClass("active");
    $('.name').addClass('active');
    $('.step--active').css('left', '33.333%');
    $('.donation-module-content-amount').addClass('next').removeClass('active');
    $('.donation-module-content-name').removeClass('previous').removeClass('next').addClass('active');
});

$(".donation-module-content-name button.next").on('click', function () {
    
    $('.step').removeClass("active");
    $('.payment').addClass('active');
    $('.step--active').css('left', '66.666%');
    $('.donation-module-content-name').addClass('next').removeClass('active');
    $('.donation-module-content-payment').removeClass('previous').removeClass('next').addClass('active');
});

/* More informations checkbox */
$('#more-informations').change(function() {
   if($(this).prop("checked")) {
      $('.more-informations-input').show();
     $('.rodo').css('margin-top','0px');
      return;
   }
  else {
   $('.more-informations-input').hide();
   $('.rodo').css('margin-top','40%');   
  }

});
});
 });