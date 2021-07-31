// Salvo Alpha - Plugin per jQuery
jQuery.fn.salvoAlpha = function (quanto, durata) {
  jQuery(this).css("opacity", quanto);
  jQuery(this).hover(passa, allontana);
  function passa() {
    jQuery(this).stop().animate({ "opacity": 1 }, durata);
  }
  function allontana() {
    jQuery(this).stop().animate({ "opacity": quanto }, durata);
  }
}