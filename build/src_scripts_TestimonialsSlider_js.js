"use strict";
(self["webpackChunkbrads_boilerplate_theme"] = self["webpackChunkbrads_boilerplate_theme"] || []).push([["src_scripts_TestimonialsSlider_js"],{

/***/ "./src/scripts/TestimonialsSlider.js":
/*!*******************************************!*\
  !*** ./src/scripts/TestimonialsSlider.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var swiper_css_bundle__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css/bundle */ "./node_modules/swiper/swiper-bundle.min.css");


const TestimonialsSlider = el => {
  const swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"](el, {
    loop: true,
    slidesPerView: 1,
    modules: [swiper__WEBPACK_IMPORTED_MODULE_0__.Pagination],
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets'
    },
    autoPlay: true
  });
};
/* harmony default export */ __webpack_exports__["default"] = (TestimonialsSlider);

/***/ })

}]);
//# sourceMappingURL=src_scripts_TestimonialsSlider_js.js.map