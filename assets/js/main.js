$(function() {

    $('.boxes .thumbnail img').on('click', function() {
      var imageSource = $(this).attr('src');
      $('.main-image img').attr('src', imageSource);

      $('.boxes .thumbnail').removeClass('active');
      $(this).parent().addClass('active');
   })


});