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

  var moving = false;

  $('.end, .begin').waypoint(function(){
    if ( ! moving){
      var $this = $(this);
      var $link = $($this.data('whom'));
      $('.active').removeClass('active');
      $link.addClass('active');
      document.title = "BB:Software | " + $link.find('a').first().text();
      // history.pushState(null, null, $this.data('whom').replace('.', '#')); //Descomentare esta linea para hacer el scrolling un poquito lag!
    }
  });

  $('.navmenu ul li a, #downMenu li a').click(function(e) {
    e.preventDefault();
    var $this = $(this);
    moving = true;
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 60}, 800, function(){
      moving = false;
    });
    $('.active').removeClass('active');
    $this.parent().addClass('active');
    document.title = "BB:Software | " + $this.text();
    history.pushState(null, null, this.hash);
    return false;
  });

  $(window).on('hashchange', function() {
    $('.active').removeClass('active');
    $('#menu .'+window.location.hash.split('#')[1]).addClass('active');
    $('html, body').scrollTop( $(window.location.hash).offset().top - 60);
  });
  if (window.location.hash){ $(window).trigger('hashchange'); }

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
