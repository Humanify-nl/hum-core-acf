/**
 * Add toggle class for tabs
 *
 * @package hum-v7-core
 */

jQuery(document).ready(function($) {

  // activate first tab & toggled title
  $(".tab:first .tab--card").addClass("is-active");
  $(".tab:first .block__title").addClass("is-toggled");
  var tabHeight = $(".tab:first").outerHeight();

  // eval height and add it
  var firstHeight = $(".tab:first .tab--card").outerHeight() + tabHeight + "px";
  $(".list--tabs").css("height",firstHeight);

  // toggle is-active when toggled
  $(".tab--wrap").click(function() {

    const shouldExpand = !$(this).hasClass("is-toggled");

    var contentHeight = $(this).find(".tab--card").outerHeight() + tabHeight + "px";
    if ( contentHeight < 80 ) {
      var currentHeight = 80 + tabHeight + "px";
    } else {
      var currentHeight = contentHeight;
    }

    $(".is-toggled").toggleClass("is-toggled");
    $(".is-active").toggleClass("is-active");

    if (shouldExpand) {

      $(this).children(".tab--card").toggleClass("is-active");
      $(this).find(".block__title").toggleClass("is-toggled");

      // adjust height
      $(".list--tabs").css("height",currentHeight);

    }


  });
});
