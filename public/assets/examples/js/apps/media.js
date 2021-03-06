(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define("/apps/media", ["jquery"], factory);
  } else if (typeof exports !== "undefined") {
    factory(require("jquery"));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery);
    global.appsMedia = mod.exports;
  }
})(this, function (_jquery) {
  "use strict";

  _jquery = babelHelpers.interopRequireDefault(_jquery);
  // (function(document, window, $) {
  //   'use strict';
  //   window.AppMedia = App.extend({
  //     handleArrangement: function() {
  //       $('#arrangement-grid').on('click', function() {
  //         var $this = $(this);
  //         if ($this.hasClass('active')) {
  //           return;
  //         }
  //         $('#arrangement-list').removeClass('active');
  //         $this.addClass('active');
  //         $('.media-list').removeClass('is-list').addClass('is-grid');
  //         $('.media-list>ul>li').removeClass('animation-fade').addClass('animation-scale-up');
  //       });
  //       $('#arrangement-list').on('click', function() {
  //         var $this = $(this);
  //         if ($this.hasClass('active')) {
  //           return;
  //         }
  //         $('#arrangement-grid').removeClass('active');
  //         $this.addClass('active');
  //         $('.media-list').removeClass('is-grid').addClass('is-list');
  //         $('.media-list>ul>li').removeClass('animation-scale-up').addClass('animation-fade');
  //       });
  //     },
  //     handleActive: function() {
  //       $.components.getDefaults('selectable').rowSelector = '.media-item';
  //     },
  //     handleAction: function() {
  //       var actionBtn = $('.site-action').actionBtn().data('actionBtn');
  //       var $selectable = $('[data-selectable]');
  //       $('.site-action-toggle', '.site-action').on('click', function(e) {
  //         var $selected = $selectable.asSelectable('getSelected');
  //         if ($selected.length === 0) {
  //           $('#fileupload').trigger('click');
  //           e.stopPropagation();
  //         }
  //       });
  //       $('[data-action="trash"]', '.site-action').on('click', function() {
  //         console.log('trash');
  //       });
  //       $('[data-action="download"]', '.site-action').on('click', function() {
  //         console.log('download');
  //       });
  //       $selectable.on('asSelectable::change', function(e, api, checked) {
  //         if (checked) {
  //           actionBtn.show();
  //         } else {
  //           actionBtn.hide();
  //         }
  //       });
  //     },
  //     handleDropdownAction: function() {
  //       $('.info-wrap>.dropdown').on('show.bs.dropdown', function() {
  //         $(this).closest('.media-item').toggleClass('item-active');
  //       }).on('hidden.bs.dropdown', function() {
  //         $(this).closest('.media-item').toggleClass('item-active');
  //       });
  //       $('.info-wrap .dropdown-menu').on('`click', function(e) {
  //         e.stopPropagation();
  //       });
  //     },
  //     run: function() {
  //       $('.media-item-actions').on('click', function(e) {
  //         e.stopPropagation();
  //       });
  //       this.handleArrangement();
  //       this.handleAction();
  //       this.handleActive();
  //       this.handleDropdownAction();
  //     }
  //   });
  //   $(document).ready(function() {
  //     AppMedia.run();
  //   });
  // 
  (0, _jquery.default)(document).ready(function () {
    AppMedia.run();
  });
});