$(function(){
  /**
   * Navitgation and url hash functions
   */
  if (!!$('#menuF').offset()) { // make sure "#menuF" element exists
    var stickyTop = $('#menuF').offset().top; // returns number
    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number
      if (stickyTop < windowTop){
        $('#menuF').removeClass('default').addClass('fixed');
      }else {
        $('#menuF').removeClass('fixed').addClass('default');
      }
    });
  }

  $('.navmenu ul li a, #downMenu li a').click(function(e) {
    e.preventDefault();
    var $this = $(this);
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 60}, 800);
    $('.active').removeClass('active');
    $this.parent().addClass('active');
    document.title = "BB:Software | " + $this.text();
    location.hash = this.hash;
  });

  $(window).on('hashchange', function() {
    $('.active').removeClass('active');
    $('#menu .'+location.hash.split('#')[1]).addClass('active');
    $('html, body').scrollTop( $(location.hash).offset().top - 60);
  });
  if (location.hash){ $(window).trigger('hashchange'); }



  /**
   * Contact form validation
   */
  jQuery.extend(jQuery.validator.messages, {
    required: "El campo es requierido.",
    email: "Por favor ingrese un email válido."
  });
  $('#contact_form').validate();




  /**
   * Back to top button
   */
  $('#backToTop').on('click', function(){
    $('html, body').animate({scrollTop: 0}, 800);
  });
});
