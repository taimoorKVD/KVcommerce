/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************************!*\
  !*** ./resources/dist/js/sidebarmenu.js ***!
  \******************************************/
/*
Template Name: Admin Template
Author: Wrappixel

File: js
*/
// ============================================================== 
// Auto select left navbar
// ============================================================== 
$(function () {
  var url = window.location;
  var element = $('ul#sidebarnav a').filter(function () {
    return this.href == url;
  }).addClass('active').parent().addClass('active');

  while (true) {
    if (element.is('li')) {
      element = element.parent().addClass('in').parent().addClass('active').children('a').addClass('active');
    } else {
      break;
    }
  }

  $('#sidebarnav a').on('click', function (e) {
    if (!$(this).hasClass("active")) {
      // hide any open menus and remove all other classes
      $("ul", $(this).parents("ul:first")).removeClass("in");
      $("a", $(this).parents("ul:first")).removeClass("active"); // open our new menu and add the open class

      $(this).next("ul").addClass("in");
      $(this).addClass("active");
    } else if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).parents("ul:first").removeClass("active");
      $(this).next("ul").removeClass("in");
    }
  });
  $('#sidebarnav >li >a.has-arrow').on('click', function (e) {
    e.preventDefault();
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*****************************************!*\
  !*** ./resources/dist/js/custom.min.js ***!
  \*****************************************/
$(function () {
  "use strict";

  $(function () {
    $(".preloader").fadeOut();
  }), jQuery(document).on("click", ".mega-dropdown", function (e) {
    e.stopPropagation();
  });

  var e = function e() {
    (0 < window.innerWidth ? window.innerWidth : this.screen.width) < 1170 ? ($("body").addClass("mini-sidebar"), $(".navbar-brand span").hide(), $(".sidebartoggler i").addClass("ti-menu")) : ($("body").removeClass("mini-sidebar"), $(".navbar-brand span").show());
    var e = (0 < window.innerHeight ? window.innerHeight : this.screen.height) - 1;
    (e -= 55) < 1 && (e = 1), 55 < e && $(".page-wrapper").css("min-height", e + "px");
  };

  $(window).ready(e), $(window).on("resize", e), $(".sidebartoggler").on("click", function () {
    $("body").hasClass("mini-sidebar") ? ($("body").trigger("resize"), $("body").removeClass("mini-sidebar"), $(".navbar-brand span").show()) : ($("body").trigger("resize"), $("body").addClass("mini-sidebar"), $(".navbar-brand span").hide());
  }), $(".nav-toggler").click(function () {
    $("body").toggleClass("show-sidebar"), $(".nav-toggler i").toggleClass("ti-menu"), $(".nav-toggler i").addClass("ti-close");
  }), $(".search-box a, .search-box .app-search .srh-btn").on("click", function () {
    $(".app-search").toggle(200);
  }), $(".right-side-toggle").click(function () {
    $(".right-sidebar").slideDown(50), $(".right-sidebar").toggleClass("shw-rside");
  }), $(".floating-labels .form-control").on("focus blur", function (e) {
    $(this).parents(".form-group").toggleClass("focused", "focus" === e.type || 0 < this.value.length);
  }).trigger("blur"), $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  }), $(function () {
    $('[data-toggle="popover"]').popover();
  }), $(".scroll-sidebar, .right-side-panel, .message-center, .right-sidebar").perfectScrollbar(), $("body").trigger("resize"), $(".list-task li label").click(function () {
    $(this).toggleClass("task-done");
  }), $('a[data-action="collapse"]').on("click", function (e) {
    e.preventDefault(), $(this).closest(".card").find('[data-action="collapse"] i').toggleClass("ti-minus ti-plus"), $(this).closest(".card").children(".card-body").collapse("toggle");
  }), $('a[data-action="expand"]').on("click", function (e) {
    e.preventDefault(), $(this).closest(".card").find('[data-action="expand"] i').toggleClass("mdi-arrow-expand mdi-arrow-compress"), $(this).closest(".card").toggleClass("card-fullscreen");
  }), $('a[data-action="close"]').on("click", function () {
    $(this).closest(".card").removeClass().slideUp("fast");
  });

  var i,
      a = function a() {
    $("#eco-spark").sparkline([6, 10, 9, 11, 9, 10, 12, 11, 10, 7, 11, 9, 8, 10, 9, 12], {
      type: "bar",
      height: "50",
      barWidth: "4",
      resize: !0,
      barSpacing: "7",
      barColor: "#01c0c8"
    });
  };

  $(window).on("resize", function (e) {
    clearTimeout(i), i = setTimeout(a, 500);
  }), a();
  var s,
      n = ["skin-default", "skin-green", "skin-red", "skin-blue", "skin-purple", "skin-megna", "skin-default-dark", "skin-green-dark", "skin-red-dark", "skin-blue-dark", "skin-purple-dark", "skin-megna-dark"];

  function t(e) {
    var i, a;
    return $.each(n, function (e) {
      $("body").removeClass(n[e]);
    }), $("body").addClass(e), i = "skin", a = e, "undefined" != typeof Storage ? localStorage.setItem(i, a) : window.alert("Please use a modern browser to properly view this template!"), !1;
  }

  (s = function (e) {
    if ("undefined" != typeof Storage) return localStorage.getItem(e);
    window.alert("Please use a modern browser to properly view this template!");
  }("skin")) && $.inArray(s, n) && t(s), $("[data-skin]").on("click", function (e) {
    $(this).hasClass("knob") || (e.preventDefault(), t($(this).data("skin")));
  }), $("#themecolors").on("click", "a", function () {
    $("#themecolors li a").removeClass("working"), $(this).addClass("working");
  }), $(".custom-file-input").on("change", function () {
    var e = $(this).val();
    $(this).next(".custom-file-label").html(e);
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/dist/js/ecom-dashboard.js ***!
  \*********************************************/
$(function () {
  "use strict"; //This is for the Notification top right

  Morris.Area({
    element: 'morris-area-chart2',
    data: [{
      period: '2010',
      iMac: 0,
      iPhone: 0
    }, {
      period: '2011',
      iMac: 130,
      iPhone: 100
    }, {
      period: '2012',
      iMac: 30,
      iPhone: 60
    }, {
      period: '2013',
      iMac: 30,
      iPhone: 200
    }, {
      period: '2014',
      iMac: 200,
      iPhone: 150
    }, {
      period: '2015',
      iMac: 105,
      iPhone: 90
    }, {
      period: '2016',
      iMac: 250,
      iPhone: 150
    }],
    xkey: 'period',
    ykeys: ['iMac', 'iPhone'],
    labels: ['iMac', 'iPhone'],
    pointSize: 0,
    fillOpacity: 0.4,
    pointStrokeColors: ['#b4becb', '#01c0c8'],
    behaveLikeLine: true,
    gridLineColor: '#e0e0e0',
    lineWidth: 0,
    smooth: true,
    hideHover: 'auto',
    lineColors: ['#b4becb', '#01c0c8'],
    resize: true
  }); // Morris donut chart

  Morris.Donut({
    element: 'morris-donut-chart',
    data: [{
      label: "Orders",
      value: 8500
    }, {
      label: "Panding",
      value: 3630
    }, {
      label: "Delivered",
      value: 4870
    }],
    resize: true,
    colors: ['#fb9678', '#01c0c8', '#4F5467']
  });
});
})();

/******/ })()
;