(function($){

  //nav sp trigger
  $(function(){
    var $html = $("html");
    $(".l-nav__trigger__button").on("click", function(){
      $html.toggleClass("is-show-nav");
    });
  })

})(jQuery);
