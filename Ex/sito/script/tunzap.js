// JavaScript for Tunzap!
$(document).ready(vai);
var durata = 300;

function vai() {
  $("#nav a").salvoAlpha(0.6, 300);
  $("#autori img").salvoAlpha(0.8, 400);

  $("#pag2,#pag3").hide();

  $(".prox,.prec").click(cambioPag);

  // Setup selezioni CSS
  $("#css input").click(clickCss);

  // Setup selezioni JS
  $("#js_1 input").click(clickJs);
  $("#js_2 .dep").parent("li").hide();
  $("#js_2 input[value='jquery']").parent("li").show();

  $(".tweets").salvoTwitFeed("tunzap", 3);
}

function cambioPag() {
  var attuale = $(this).parent("div").parent("div");
  attuale.slideToggle(durata);
  if ($(this).hasClass("prox")) {
    attuale.next("div").slideToggle(durata);
  } else {
    attuale.prev("div").slideToggle(durata);
  }
}

function clickCss() {
  console.log($(this).attr("value"));
}

function clickJs() {
  $("#js_2 .dep").parent("li").hide();
  var cliccato = $(this).attr("value");
  $("#js_2 input[value=" + cliccato + "]").parent("li").show();
}